@extends('layouts.master')

@section('title', 'ACN Registration - Register Your Company Online for Only')

@section('content')

@include('layouts.home')
@include('layouts.register-now')
@auth
@include('layouts.client')
@endauth
@include('layouts.how-it-works')
@include('layouts.faq')
@include('layouts.about-us')

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