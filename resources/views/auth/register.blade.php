@extends('layouts.main')

@section('nav-content')
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{url('/auth/login')}}"><i class="icon ion-log-in"></i> Login</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <section id="intro" class="intro-section" style="padding-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hgroup class="text-center">
                        <h1>Let's get started!</h1>
                        <h1>Tell us what you need.</h1>
                    </hgroup>
                </div>
            </div>
            <div class="spacer"></div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="col-md-5">
                        <div class="flip">
                            <div class="card" id="supplier-card"> 
                                <div class="face front"> 
                                    <div class="text-muted">
                                        <div><img src="/assets/img/supplier.png"></div>
                                        <div class="account-type">I'm looking for resellers</div>
                                    </div>
                                  <p>
                                      Manage a virtual sales team.<br> Add your products and hire resellers. 
                                  </p>
                                  <a href="javascript:void(0)" class="btn btn-info flip-btn" >Apply as Supplier</a>
                                </div> 
                                <div class="face back">
                                    <h3 class="text-left"><img src="/assets/img/supplier-32.png"/> Apply as Supplier</h3>
                                    @if (count($errors) > 0 && Input::get('type') == 1)
                                        <p class="alert alert-danger text-left" style="border-radius:0px">
                                           <button type="button" class="close" data-dismiss="alert">&times;</button>
                                           Please fill all the fields correctly.
                                        </p>
                                    @endif
                                    <form method="post" action="{{url('/auth/register')}}">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="type" value="1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                        </div>
                                        <div class="text-left">
                                            <a href="javascript:void(0)" class="btn btn-default back-flip-btn">Back</a>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>   
                        </div>
                    </div>

                    <div class="col-md-2 divider">OR</div>

                    <div class="col-md-5">
                        <div class="flip">
                            <div class="card" id="reseller-card">
                                <div class="face front"> 
                                    <div class="text-muted">
                                        <div><img src="/assets/img/reseller.png"></div>
                                        <div class="account-type">I'm looking for products to sell</div>
                                    </div>
                                    <p>
                                        Manage an online store. <br>Connect to different suppliers and sell their products.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-warning flip-btn">Apply as Reseller</a>
                                </div>
                                <div class="face back">
                                    <h3 class="text-left"><img src="/assets/img/reseller-32.png"/> Apply as Reseller</h3>
                                    @if (count($errors) > 0 && Input::get('type') == 2)
                                        <p class="alert alert-danger text-left" style="border-radius:0px">
                                           <button type="button" class="close" data-dismiss="alert">&times;</button>
                                           Please fill all the fields correctly.
                                        </p>
                                    @endif
                                    <form method="post" action="{{url('/auth/register')}}">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="type" value="2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                        </div>
                                        <div class="text-left">
                                            <a href="javascript:void(0)" class="btn btn-default back-flip-btn">Back</a>
                                            <button type="submit" class="btn btn-warning">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script type="text/javascript">
jQuery(function() {
    
    var type = getParameterByName('type');
    if(type == 1) {
        $("#supplier-card").toggleClass('flipped');
    }
    if(type == 2) {
        $("#reseller-card").toggleClass('flipped');
    }
    
    
    function getParameterByName(name) {
        var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
        return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
    }
});
</script>
@endsection