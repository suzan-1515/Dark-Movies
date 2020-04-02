<!DOCTYPE html >
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('/admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('/admin/css/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('/admin/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('/admin/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('/admin/img/favicon.ico') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg" style="background-color: #000;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);color: #fff;">
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="/" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong style="color: red;font-weight: bolder;">Dark</strong><strong>Movies</strong></div>
              <div class="brand-text brand-sm"><strong style="color: red;font-weight: bolder;">D</strong><strong>M</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button style="color: red;font-weight: bolder;" class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">



            <!-- Log out               -->
            <div class="list-inline-item logout"> <a id="logout" style="color: red;font-weight: bolder;" href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout <i class="icon-logout"></i></a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                                   </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch" >
      <!-- Sidebar Navigation-->
      <nav id="sidebar" style="background-color:rgb(10,10,10);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center" style="background-color:rgb(10,10,10);">
          <div class="avatar"><img src="/admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{ Auth::user()->name }}</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <ul class="list-unstyled">
                <li class="active"><a href="/admin/dashboard"> <i class="fa fa-snowflake-o" aria-hidden="true"></i>Home </a></li>
                <li><a href="/admin/movies"> <i class="fa fa-film" aria-hidden="true"></i>Movies </a></li>
                <li><a href="/admin/director"> <i class="fa fa-users" aria-hidden="true"></i>Director </a></li>
                <li><a href="/admin/writer"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Writer </a></li>
                <li><a href="/admin/actor"> <i class="fa fa-user" aria-hidden="true"></i>Actor </a></li>
                <li> <a href="/admin/actress"> <i class="fa fa-female" aria-hidden="true"></i>Actress </a></li>
               <li> <a href="/admin/genre"> <i class="fa fa-ticket" aria-hidden="true"></i>Genre </a></li>
                    <li> <a href="/admin/year"> <i class="icon-chart"></i>Year </a></li>
                    <li> <a href="/admin/blog"><i class="fa fa-rss" aria-hidden="true"></i>Blog </a></li>
                    <li> <a href="/admin/comments"> <i class="fa fa-address-card-o" aria-hidden="true"></i>Comments </a></li>

               </ul></nav>
      <!-- Sidebar Navigation d-->
      <div class="page-content" style="background-color:#222222;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

      @yield('panel')


        <footer class="footer">
          <div class="footer__block block no-margin-bottom" style="background-color:rgb(10,10,10);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); color: red;">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
               <p class="no-margin-bottom">2019 &copy; Dark Movies</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('/admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/admin/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admin/js/front.js') }}"></script>
  </body>
</html>
