<!DOCTYPE html>
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="ACN Registration - Register Your Company Online for Only" />
    <meta name="keywords"
      content="australian company incorporation, register company in australia, register company online, asic company registration, incorporate company, company incorporation, incorporate company online, company registration, company formation, register a company, form company, register company, company structure, shelf company, incorporate online, register company online, company register company registration, register company, register now, new company registration, register new company" />
    <meta name="norton-safeweb-site-verification"
      content="9ccgpmuud9hkkqwawg-2rab9xvu3vzm9xlsgvv77abdc1jmhkw9sbssa972p82kut4-fwn5evgiaw3qeb7o526ync-2m-1nveu6qb2xdzhxp1x8vp0ezpizmh4skpget" />

    <!-- Favicons -->
    <link href="{{asset('images/favicon.png')}}" rel="icon">
    <link href="{{asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <title>@yield('title')</title>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
      rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/authentication.css') }}">
  </head>

  <body>
    @yield('content')

    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @yield('page-script')
  </body>

</html>