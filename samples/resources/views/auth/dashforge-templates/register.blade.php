<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('vendor/dashforge/assets/img/favicon.png') }}">

    <title>Black Market - Bidding Zone</title>

    <!-- vendor css -->
    <link href="{{ asset('vendor/dashforge/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/dashforge/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/dashforge/assets/css/dashforge.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/dashforge/assets/css/dashforge.auth.css') }}">
  </head>
  <body>

    <header class="navbar navbar-header navbar-header-fixed">
      <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
      <div class="navbar-brand">
        <a href="../../index.html" class="df-logo">Black<span>Market</span></a>
      </div><!-- navbar-brand -->
      {{--<div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
          <a href="../../index.html" class="df-logo">dash<span>forge</span></a>
          <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        <ul class="nav navbar-menu">
          <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="pie-chart"></i> Dashboard</a>
            <ul class="navbar-menu-sub">
              <li class="nav-sub-item"><a href="dashboard-one.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Sales Monitoring</a></li>
              <li class="nav-sub-item"><a href="dashboard-two.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Website Analytics</a></li>
              <li class="nav-sub-item"><a href="dashboard-three.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Cryptocurrency</a></li>
              <li class="nav-sub-item"><a href="dashboard-four.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Helpdesk Management</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="package"></i> Apps</a>
            <ul class="navbar-menu-sub">
              <li class="nav-sub-item"><a href="app-calendar.html" class="nav-sub-link"><i data-feather="calendar"></i>Calendar</a></li>
              <li class="nav-sub-item"><a href="app-chat.html" class="nav-sub-link"><i data-feather="message-square"></i>Chat</a></li>
              <li class="nav-sub-item"><a href="app-contacts.html" class="nav-sub-link"><i data-feather="users"></i>Contacts</a></li>
              <li class="nav-sub-item"><a href="app-file-manager.html" class="nav-sub-link"><i data-feather="file-text"></i>File Manager</a></li>
              <li class="nav-sub-item"><a href="app-mail.html" class="nav-sub-link"><i data-feather="mail"></i>Mail</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="layers"></i> Pages</a>
            <div class="navbar-menu-sub">
              <div class="d-lg-flex">
                <ul>
                  <li class="nav-label">Authentication</li>
                  <li class="nav-sub-item"><a href="page-signin.html" class="nav-sub-link"><i data-feather="log-in"></i> Sign In</a></li>
                  <li class="nav-sub-item"><a href="page-signup.html" class="nav-sub-link"><i data-feather="user-plus"></i> Sign Up</a></li>
                  <li class="nav-sub-item"><a href="page-verify.html" class="nav-sub-link"><i data-feather="user-check"></i> Verify Account</a></li>
                  <li class="nav-sub-item"><a href="page-forgot.html" class="nav-sub-link"><i data-feather="shield-off"></i> Forgot Password</a></li>
                  <li class="nav-label mg-t-20">User Pages</li>
                  <li class="nav-sub-item"><a href="page-profile-view.html" class="nav-sub-link"><i data-feather="user"></i> View Profile</a></li>
                  <li class="nav-sub-item"><a href="page-connections.html" class="nav-sub-link"><i data-feather="users"></i> Connections</a></li>
                  <li class="nav-sub-item"><a href="page-groups.html" class="nav-sub-link"><i data-feather="users"></i> Groups</a></li>
                  <li class="nav-sub-item"><a href="page-events.html" class="nav-sub-link"><i data-feather="calendar"></i> Events</a></li>
                </ul>
                <ul>
                  <li class="nav-label">Error Pages</li>
                  <li class="nav-sub-item"><a href="page-404.html" class="nav-sub-link"><i data-feather="file"></i> 404 Page Not Found</a></li>
                  <li class="nav-sub-item"><a href="page-500.html" class="nav-sub-link"><i data-feather="file"></i> 500 Internal Server</a></li>
                  <li class="nav-sub-item"><a href="page-503.html" class="nav-sub-link"><i data-feather="file"></i> 503 Service Unavailable</a></li>
                  <li class="nav-sub-item"><a href="page-505.html" class="nav-sub-link"><i data-feather="file"></i> 505 Forbidden</a></li>
                  <li class="nav-label mg-t-20">Other Pages</li>
                  <li class="nav-sub-item"><a href="page-timeline.html" class="nav-sub-link"><i data-feather="file-text"></i> Timeline</a></li>
                  <li class="nav-sub-item"><a href="page-pricing.html" class="nav-sub-link"><i data-feather="file-text"></i> Pricing</a></li>
                  <li class="nav-sub-item"><a href="page-help-center.html" class="nav-sub-link"><i data-feather="file-text"></i> Help Center</a></li>
                  <li class="nav-sub-item"><a href="page-invoice.html" class="nav-sub-link"><i data-feather="file-text"></i> Invoice</a></li>
                </ul>
              </div>
            </div><!-- nav-sub -->
          </li>
          <li class="nav-item"><a href="../../components/" class="nav-link"><i data-feather="box"></i> Components</a></li>
          <li class="nav-item"><a href="../../collections/" class="nav-link"><i data-feather="archive"></i> Collections</a></li>
        </ul>
      </div><!-- navbar-menu-wrapper -->
      <div class="navbar-right">
        <a href="http://dribbble.com/themepixels" class="btn btn-social"><i class="fab fa-dribbble"></i></a>
        <a href="https://github.com/themepixels" class="btn btn-social"><i class="fab fa-github"></i></a>
        <a href="https://twitter.com/themepixels" class="btn btn-social"><i class="fab fa-twitter"></i></a>
        <a href="https://themeforest.net/item/azia-responsive-bootstrap-4-dashboard-template/22983790" class="btn btn-buy"><i data-feather="shopping-bag"></i> <span>Buy Now</span></a>
      </div><!-- navbar-right -->--}}
    </header><!-- navbar -->

    <div class="content content-fixed content-auth">
      <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p">
          <form class="sign-wrapper mg-lg-r-50 mg-xl-r-60" method="post" action="{{ url('/register') }}">
            {!! csrf_field() !!}
          <!-- <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60"> -->
            <div class="pd-t-20 wd-100p">
              <h4 class="tx-color-01 mg-b-5">Create New Account</h4>
              <p class="tx-color-03 tx-16 mg-b-40">It's free to signup and only takes a minute.</p>

              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email address">
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Password</label>
                </div>
                <input type="password" class="form-control" placeholder="Enter your password">
              </div>
              <div class="form-group">
                <label>Firstname</label>
                <input type="text" class="form-control" placeholder="Enter your firstname">
              </div>
              <div class="form-group">
                <label>Lastname</label>
                <input type="text" class="form-control" placeholder="Enter your lastname">
              </div>
              <div class="form-group tx-12">
                By clicking <strong>Create an account</strong> below, you agree to our terms of service and privacy statement.
              </div><!-- form-group -->

              <button class="btn btn-brand-02 btn-block">Create Account</button>
              <div class="divider-text">or</div>
              <button class="btn btn-outline-facebook btn-block">Sign Up With Facebook</button>
              <button class="btn btn-outline-twitter btn-block">Sign Up With Twitter</button>
              <div class="tx-13 mg-t-20 tx-center">Already have an account? <a href="{{ url('/login') }}">Sign In</a></div>
            </div>
          <!-- </div> -->
          </form><!-- sign-wrapper -->
          <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
            <div class="mx-lg-wd-500 mx-xl-wd-550">
              <img src="https://via.placeholder.com/1280x1225" class="img-fluid" alt="">
            </div>
            <div class="pos-absolute b-0 r-0 tx-12">
              Social media marketing vector is created by <a href="https://www.freepik.com/pikisuperstar" target="_blank">pikisuperstar (freepik.com)</a>
            </div>
          </div><!-- media-body -->
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content -->

    <footer class="footer">
      <div>
        <span>&copy; 2019 Bidding Zone v1.0.0. </span>
        <span>Created by <a href="http://redtech.co.id">Redtech</a></span>
      </div>
      <div>
        <nav class="nav">
          <a href="#" class="nav-link">Term & Conditions</a>
          <a href="#" class="nav-link">How To</a>
          <a href="#" class="nav-link">Get Help</a>
        </nav>
      </div>
    </footer>

    <script src="{{ asset('vendor/dashforge/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/dashforge/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/dashforge/lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('vendor/dashforge/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('vendor/dashforge/assets/js/dashforge.js') }}"></script>

    <!-- append theme customizer -->
    <script src="{{ asset('vendor/dashforge/lib/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('vendor/dashforge/assets/js/dashforge.settings.js') }}"></script>
  </body>
</html>