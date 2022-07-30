<?php

namespace App\Http\Controllers;
use App\Mail\VerifyEmail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthenticationController extends Controller
{
    public function signup(Request $req)
    {
        $req->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6',
        ]);

        $this->sendMail($req);

        return redirect()->route('verify-page')->with('success', 'You are registered successfully! Please check your email for a 6-digit pin to verify your email.');
    }

    public function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'status' => 2,
            'created_at' => Carbon::now()
        ]);
    }

    public function sendMail($req) {
        $data = $req->all();
        $user = $this->create($data);

        if($user) {
            $verify2 =  DB::table('password_resets')->where([
                ['email', $data['email']]
            ]);

            if ($verify2->exists()) {
                $verify2->delete();
            }
            $pin = rand(100000, 999999);
            DB::table('password_resets')
                ->insert(
                    [
                        'email' => $data['email'], 
                        'token' => $pin,
                        'created_at' => Carbon::now()
                    ]
                );
        }
        
        // Mail::to($req->email)->send(new VerifyEmail($pin));
        $token = $user->createToken('myapptoken')->plainTextToken;
        Session::put('email', $data['email']);
    }

    public function verify(Request $req) {
        $req->validate([
            'code' => 'required',
        ]);

        $select = DB::table('password_resets')
            ->where('email', Session::get('email'))
            ->where('token', $req->code);

        if ($select->get()->isEmpty()) {
            return back()->with('invalid_pin', "Invalid PIN");
        }

        $select = DB::table('password_resets')
            ->where('email', $req->email)
            ->where('token', $req->code)
            ->delete();

        $user = User::where('email', Session::get('email'))->first();
        $user->email_verified_at = Carbon::now()->getTimestamp();
        $user->save();

        return redirect()->route('signin')->with('success', 'Email is verified. You can login now');
    }

    public function signin(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $verify = User::where('email', $req->email)->first();

        $credentials = $req->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            if($verify && $verify->email_verified_at != null) {
                // Check User Type
                
                return redirect()->route('home')->with('success', 'You are successfully logged in!');
            } else {
                return back()->with('warning', 'Your email is not verified yet.');
            }
        }

        return back()->with('failed', 'Login details are not valid');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('auth/signin');
    }
}