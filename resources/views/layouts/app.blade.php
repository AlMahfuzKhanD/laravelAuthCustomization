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
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- end: CSS -->

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    {{-- <li class="dropdown">
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
    </li> --}}

    <div id="app">

        
        
                

                
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <!-- Right Side Of Navbar -->
                   
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>

                            
                        @else

                        
                            <!-- Brand -->
                            <a class="navbar-brand" href="#">Logo</a>
                          
                            <!-- Links -->
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#">Link 1</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Link 2</a>
                              </li>
                          
                              <!-- Dropdown -->
                              
                              <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
                                  Dropdown link
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                  <a class="dropdown-item" href="{{ route('password.change') }}">Change password</a>
                                  
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                              </li>
                            </ul>
                          
                        

                            
                        @endguest
                    
               
                    </nav>

        @yield('content')
    </div>


    <!-- start: JavaScript-->

		<script src="{{ 'frontend/js/jquery-1.9.1.min.js' }}"></script>
        <script src="{{ 'frontend/js/jquery-migrate-1.0.0.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery-ui-1.10.0.custom.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.ui.touch-punch.js' }}"></script>
        
            <script src="{{ 'frontend/js/modernizr.js' }}"></script>
        
            <script src="{{ 'frontend/js/bootstrap.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.cookie.js' }}"></script>
        
            <script src='{{ "frontend/js/fullcalendar.min.js" }}'></script>
        
            <script src='{{ "frontend/js/jquery.dataTables.min.js" }}'></script>
    
            <script src="{{ 'frontend/js/excanvas.js' }}"></script>
        <script src="{{ 'frontend/js/jquery.flot.js' }}"></script>
        <script src="{{ 'frontend/js/jquery.flot.pie.js' }}"></script>
        <script src="{{ 'frontend/js/jquery.flot.stack.js' }}"></script>
        <script src="{{ 'frontend/js/jquery.flot.resize.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.chosen.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.uniform.min.js' }}"></script>
            
            <script src="{{ 'frontend/js/jquery.cleditor.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.noty.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.elfinder.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.raty.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.iphone.toggle.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.uploadify-3.1.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.gritter.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.imagesloaded.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.masonry.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.knob.modified.js' }}"></script>
        
            <script src="{{ 'frontend/js/jquery.sparkline.min.js' }}"></script>
        
            <script src="{{ 'frontend/js/counter.js' }}"></script>
        
            <script src="{{ 'frontend/js/retina.js' }}"></script>
    
            <script src="{{ 'frontend/js/custom.js' }}"></script>
        <!-- end: JavaScript-->
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>
