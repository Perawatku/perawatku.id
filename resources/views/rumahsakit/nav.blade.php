<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Perawatku</title>
    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{ url('/asset/material/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/material/plugins/node-waves/waves.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/material/plugins/animate-css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/material/plugins/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/material/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/material/css/theme-black.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/material/plugins/dropzone/dropzone.css') }}" rel="stylesheet">

    <script src="{{ url('/asset/material/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/node-waves/waves.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/jquery-countto/jquery.countTo.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/morrisjs/morris.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/chartjs/Chart.bundle.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/flot-charts/jquery.flot.time.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ url('/asset/material/js/admin.js') }}"></script>
    <script src="{{ url('/asset/material/js/pages/index.js') }}"></script>
    <script src="{{ url('/asset/material/plugins/dropzone/dropzone.js') }}"></script>
    <script src="{{ url('/asset/material/js/demo.js') }}"></script>
  </head>
  <body class="theme-black">
      <!-- Page Loader -->
      <div class="page-loader-wrapper">
          <div class="loader">
              <div class="preloader">
                  <div class="spinner-layer pl-red">
                      <div class="circle-clipper left">
                          <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                          <div class="circle"></div>
                      </div>
                  </div>
              </div>
              <p>Please wait...</p>
          </div>
      </div>
      <!-- #END# Page Loader -->
      <!-- Overlay For Sidebars -->
      <div class="overlay"></div>
      <!-- #END# Overlay For Sidebars -->
      <!-- Search Bar -->
      <div class="search-bar">
          <div class="search-icon">
              <i class="material-icons">search</i>
          </div>
          <input type="text" placeholder="START TYPING...">
          <div class="close-search">
              <i class="material-icons">close</i>
          </div>
      </div>
      <!-- #END# Search Bar -->
      <!-- Top Bar -->
      <nav class="navbar">
          <div class="container-fluid col-centered">
              <div class="navbar-header">
                  <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                  <a href="javascript:void(0);" class="bars"></a>
                  <a class="navbar-brand" href="{{url('/rumahsakit')}}"></a>
              </div>
          </div>
      </nav>
      <!-- #Top Bar -->
      @extends('rumahsakit.sidebar')
    @yield('content')
</body>
</html>
