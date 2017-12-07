<!DOCTYPE html>
@section('content')
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Perawatku</title>
    <!-- Bootstrap -->
    <link href="{{ url('/asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/css/mobile.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/css/tablet.css') }}" rel="stylesheet">
    <script src="{{ url('/asset/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ url('/asset/js/custom.js') }}"></script>
    <script src="{{ url('/asset/js/scrollreveal.min.js') }}"></script>
    <script src="{{ url('/asset/js/jquery.sldr.js') }}"></script>
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-menu">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand"><img src="{{ url('/asset/images/logo.png') }}"></a>
          <button class="navbar-toggle" data-target="#navbar" data-toggle="collapse">
            <div class="iconx">
              <div class="hamburger"></div>
            </div>
          </button>
        </div>
        <div class="collapse navbar-collapse navbar-collapse-full" id="navbar">
          <ul class="nav navbar-nav navbar-right nav-overlay">
            <a href="#" class="nav-close" data-target="#navbar" data-toggle="collapse"> Close</a>
            <li><hr></li>
            <li class="li-nav" {{ request()->route()->getName() === 'perawatku.index' ? ' class=active' : '' }}><a href="{{route('index')}}" >HOME</a></li>
            <li class="li-nav" {{ request()->route()->getName() === 'perawatku.listrawat' ? ' class=active' : '' }}><a href="{{ url('/listrawat') }}">PERAWATKU</a></li>
            <li class="li-nav" ><a href="{{ url('/about') }}">ABOUT US</a></li>
            <li class="li-nav"><a href="{{ url('/faq') }}">FAQ</a></li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
    @extends('layouts.footer')
</body>
</html>
