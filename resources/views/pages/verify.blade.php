@extends('layouts.auth-master')

@section('title', 'Register Page')

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

        <h2 class="card-title fw-bolder mb-1">Email Verification 💬</h2>
        <p class="card-text mb-75">
          We sent a verification code to your email. Enter the code from the email in the field below.
        </p>

        <form class="mt-2" action="{{route('email-verify')}}" method="POST">
          @csrf
          <h6>Type your 6 digit security code</h6>
          <div class="auth-input-wrapper d-flex align-items-center justify-content-between">
            <input type="text" name="code" class="form-control auth-input height-50 mx-25" maxlength="6"
              value="{{old('code')}}" autofocus="" />
          </div>
          @if($errors->has('code'))
          <span class="text-danger">{{$errors->first('code')}}</span>
          @endif
          @if(Session::has('invalid_pin'))
          <span class="text-danger">{{Session::get('invalid_pin')}}</span>
          @endif
          <button type="submit" class="btn btn-primary w-100 mt-2" tabindex="4">Verify my account</button>
        </form>

        <p class="text-center mt-2">
          <span>Didn’t get the code?</span><a href="Javascript:void(0)"><span>&nbsp;Resend</span></a>
          <span>or</span>
          <a href="Javascript:void(0)"><span>&nbsp;Call Us</span></a>
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