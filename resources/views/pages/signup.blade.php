@extends('layouts.auth-master')

@section('title', 'Register Page')

@section('content')
<div class="auth-wrapper auth-basic px-2">
  <div class="auth-inner my-2">
    <!-- Register basic -->
    <div class="card mb-0">
      <div class="card-body">
        <a href="#" class="brand-logo">
          <span class="brand-logo">
            <img src="{{asset('images/footer-logo.png')}}" width="200px" height="70px">
          </span>
        </a>

        <h4 class="card-title mb-1">Register your account 😍</h4>
        <p class="card-text mb-2">Make your app management easy and fun!</p>

        <form class="auth-register-form mt-2" action="{{route('signup')}}" method="POST">
          @csrf
          <div class="mb-1">
            <label class="form-label" for="register-email">Email</label>
            <input class="form-control" id="register-email" type="text" name="email" value="{{old('email')}}"
              placeholder="john@example.com" aria-describedby="register-email" tabindex="1" />
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="mb-1">
            <label class="form-label" for="register-password">Password</label>
            <div class="input-group input-group-merge form-password-toggle">
              <input class="form-control form-control-merge" id="register-password" type="password" name="password"
                value="{{old('password')}}" placeholder="············" aria-describedby="register-password"
                tabindex="2" />
              <span class="input-group-text cursor-pointer"><i class="fa fa-eye"></i></span>
            </div>
            @if ($errors->has('password'))
            <span class=" text-danger">{{ $errors->first('password') }}</span>
            @endif
          </div>
          <div class="mb-1">
            <label class="form-label" for="confirm-password">Confirm Password</label>
            <div class="input-group input-group-merge form-password-toggle">
              <input class="form-control form-control-merge" id="confirm-password" type="password"
                name="confirm_password" value="{{old('confirm_password')}}" placeholder="············"
                aria-describedby="confirm-password" tabindex="3" />
              <span class="input-group-text cursor-pointer"><i class="fa fa-eye"></i></span>
            </div>
            @if ($errors->has('confirm_password'))
            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
            @endif
          </div>
          <!-- <div class="mb-1">
            <div class="form-check">
              <input class="form-check-input" id="register-privacy-policy" name="privacy" @if(old('privacy')) checked
                @endif type="checkbox" tabindex="4" />
              <label class="form-check-label" for="register-privacy-policy">I agree to<a href="#">&nbsp;privacy policy &
                  terms</a></label>
            </div>
            @if ($errors->has('privacy'))
            <span class="text-danger">{{ $errors->first('privacy') }}</span>
            @endif
          </div> -->
          <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
        </form>

        <p class="text-center mt-2">
          <span>Already have an account?</span>
          <a href="{{route('signin-page')}}">
            <span>Sign in instead</span>
          </a>
        </p>
      </div>
    </div>
    <!-- /Register basic -->
  </div>
</div>
@endsection