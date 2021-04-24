<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- start: CSS -->
	<link id="bootstrap-style" href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ asset('frontend/css/style-responsive.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    {{-- <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> --}}

                    <!-- Branding Image -->
                    {{-- <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> --}}
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>


    <!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jquery-migrate-1.0.0.min.js"></script>
        
            <script src="js/jquery-ui-1.10.0.custom.min.js"></script>
        
            <script src="js/jquery.ui.touch-punch.js"></script>
        
            <script src="js/modernizr.js"></script>
        
            <script src="js/bootstrap.min.js"></script>
        
            <script src="js/jquery.cookie.js"></script>
        
            <script src='js/fullcalendar.min.js'></script>
        
            <script src='js/jquery.dataTables.min.js'></script>
    
            <script src="js/excanvas.js"></script>
        <script src="js/jquery.flot.js"></script>
        <script src="js/jquery.flot.pie.js"></script>
        <script src="js/jquery.flot.stack.js"></script>
        <script src="js/jquery.flot.resize.min.js"></script>
        
            <script src="js/jquery.chosen.min.js"></script>
        
            <script src="js/jquery.uniform.min.js"></script>
            
            <script src="js/jquery.cleditor.min.js"></script>
        
            <script src="js/jquery.noty.js"></script>
        
            <script src="js/jquery.elfinder.min.js"></script>
        
            <script src="js/jquery.raty.min.js"></script>
        
            <script src="js/jquery.iphone.toggle.js"></script>
        
            <script src="js/jquery.uploadify-3.1.min.js"></script>
        
            <script src="js/jquery.gritter.min.js"></script>
        
            <script src="js/jquery.imagesloaded.js"></script>
        
            <script src="js/jquery.masonry.min.js"></script>
        
            <script src="js/jquery.knob.modified.js"></script>
        
            <script src="js/jquery.sparkline.min.js"></script>
        
            <script src="js/counter.js"></script>
        
            <script src="js/retina.js"></script>
    
            <script src="js/custom.js"></script>
        <!-- end: JavaScript-->
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>
