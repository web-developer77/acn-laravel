<header>
  <!-- header-area start -->
  <div id="sticker" class="header-area px-1">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <!-- Navigation -->
        <nav class="navbar navbar-default d-flex align-center justify-between">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <!-- Brand -->
            <a class="navbar-brand page-scroll sticky-logo" href="{{ url('/') }}">
              <img src="{{ asset('images/logo.png') }}" alt="" title="">
            </a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a class="page-scroll" href="#home">Home</a>
              </li>
              <li>
                <a class="page-scroll" href="#register_company">Register Now</a>
              </li>
              @auth
              <li>
                <a class="page-scroll" href="#client">Client Zone</a>
              </li>
              @endauth
              <li>
                <a class="page-scroll" href="#how_it_works">How it works</a>
              </li>
              <li>
                <a class="page-scroll" href="#faq">FAQs</a>
              </li>
              <li>
                <a class="page-scroll" href="#about_us">About Us</a>
              </li>
            </ul>
          </div>
          <div class="d-flex align-center">
            @if(auth()->user())
            <div class="dropdown">
              <button class="btn-signup mx05 dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{auth()->user()->email}}</button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a href="{{ route('signout') }}">Change Password</a>
                <a href="{{ route('signout') }}">Signout</a>
              </div>
            </div>
            @else
            <a class="btn-signin mx-05" href="{{ route('signin') }}">SignIn</a>
            <a class="btn-signup mx-05" href="{{ route('signup') }}">SignUp</a>
            @endif
            <button type="button" class="navbar-toggle collapsed mx-05" id="btn-menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <!-- navbar-collapse -->
        </nav>
        <!-- END: Navigation -->
      </div>
    </div>
  </div>
  <div class="menu-responsive">
    <ul>
      <li class="responsive-active">
        <a class="page-scroll" href="#home">Home</a>
      </li>
      <li>
        <a class="page-scroll" href="#register_company">Register Now</a>
      </li>
      @auth
      <li>
        <a class="page-scroll" href="#client">Client Zone</a>
      </li>
      @endauth
      <li>
        <a class="page-scroll" href="#how_it_works">How it works</a>
      </li>
      <li>
        <a class="page-scroll" href="#faq">FAQs</a>
      </li>
      <li>
        <a class="page-scroll" href="#about_us">About Us</a>
      </li>
    </ul>
  </div>
  <!-- header-area end -->
</header>