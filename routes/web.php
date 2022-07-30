<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.dashboard');
})->name('home');
Route::get('/policy', function () {
    return view('pages.policy');
})->name('policy');
Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');
Route::group(['prefix' => 'auth'], function() {
    Route::get('signin', function () {
        return view('pages.signin');
    })->name('signin-page');
    Route::get('signup', function () {
        return view('pages.signup');
    })->name('signup-page');
    Route::get('verify', function () {
        return view('pages.verify');
    })->name('verify-page');
    Route::get('signout', [AuthenticationController::class, 'signOut'])->name('signout');
    Route::post('signin', [AuthenticationController::class, 'signin'])->name('signin');
    Route::post('signup', [AuthenticationController::class, 'signup'])->name('signup');
    Route::post('verify', [AuthenticationController::class, 'verify'])->name('email-verify');
});