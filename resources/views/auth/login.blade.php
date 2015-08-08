@extends('layouts.main')

@section('nav-content')
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{url('/auth/register')}}"><i class="icon ion-ios-compose-outline"></i> Register</a>
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <!-- Intro Section -->
    <section id="intro" class="intro-section" style="padding-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default" style="border-radius:0px; border-color:transparent;">
                        <div class="panel-body">
                            <h3>Login and start your business</h3><hr>
                            <form action="" role="form" method="POST">
                                
                                <input type="hidden" name="_token" >
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="icon ion-ios-email-outline"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" value="">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="icon ion-ios-locked-outline"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Password" value="">
                                </div>
                                <p class="help-block highlight text-left" id="note-message"><a href="#">Forgot Password?</a></p>
                             
                                <button type="submit" class="btn  btn-primary  btn-block">Login</button>
                                <hr>
                                <span class="login-footer">
                                    Create your BizHub account now. <a href="{{url('/auth/register')}}"> Register</a>
                                </span>                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection