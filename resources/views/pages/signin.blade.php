@extends('layouts.auth-master')

@section('title', 'Login Page')

@section('content')
<div class="auth-wrapper auth-basic px-2">
  <div class="auth-inner my-2">
    <div class="card mb-0">
      <div class="card-body">
        <a href="#" class="brand-logo">
          <span class="brand-logo">
            <img src="{{asset('images/footer-logo.png')}}" width="200px" height="70px">
          </span>
        </a>

        <h4 class="card-title mb-1">Welcome 👋</h4>
        <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>

        <form class="auth-login-form mt-2" action="{{route('signin')}}" method="POST">
          @csrf
          <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input type="text" class="form-control" id="login-email" name="email" placeholder="john@example.com"
              aria-describedby="login-email" tabindex="1" autofocus />
          </div>

          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Password</label>
              <a href="{{url('auth/forgot-password-basic')}}">
                <small>Forgot Password?</small>
              </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
              <input type="password" class="form-control form-control-merge" id="login-password" name="password"
                tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="login-password" />
              <span class="input-group-text cursor-pointer"><i class="fa fa-eye"></i></span>
            </div>
          </div>
          <div class="mb-1">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
              <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
          </div>
          <button class="btn btn-primary w-100" tabindex="3">Sign in</button>
        </form>

        <p class="text-center mt-2">
          <span>New on our platform?</span>
          <a href="{{route('signup-page')}}">
            <span>Create an account</span>
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection

@section('page-script')
<script>
@if(Session::has('success'))
toastr.success("{{Session::get('success')}}");
@elseif(Session::has('failed'))
toastr.error(Session::get('failed'));
@elseif(Session::has('warning'))
toastr.warning(Session::get('warning'));
@endif
</script>
@endsection