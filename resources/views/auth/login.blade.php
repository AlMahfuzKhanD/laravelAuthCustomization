@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        

        <div class="row-fluid">
            <div class="login-box">
                <div class="icons">
                    <a href="index.html"><i class="halflings-icon home"></i></a>
                    <a href="#"><i class="halflings-icon cog"></i></a>
                </div>
                <h2>Login to your account</h2>
                @if (session('successMsg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('successMsg') }}
                    <button type="button" class="close" data-dissmiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                    
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <fieldset>

                        <div class="input-prepend{{ $errors->has('email') ? ' has-error' : '' }}" title="Username">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="email" value="{{ old('email') }}" required autofocus/>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend{{ $errors->has('password') ? ' has-error' : '' }}" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" id="password" type="password" class="form-control" name="password" required/>\
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>




                        <div class="clearfix"></div>


                        
                           

                        
                        <label class="remember" for="remember"><input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}/>Remember Me</label>

                        <div class="button-login">	
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="clearfix"></div>
                </form>
                <hr>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>	
            </div><!--/span-->
        </div><!--/row-->

    </div>
</div>
@endsection
