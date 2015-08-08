@extends('layouts.main')

@section('nav-content')
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li>
                <a href="/resellers">Resellers</a>
            </li>
            <li>
                <a href="/products">Products</a>
            </li>
            <li>
                <a href="/orders">Orders</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="/auth/logout"><i class="icon ion-log-out"></i> Logout</a>
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="sub-nav">
        <div class="container">
            <div class="row">
                <ul class="nav nav-pills">
                  <li role="presentation" class="active"><a href="/products" >Products</a></li>
                  <li role="presentation"><a href="/products/new">Add New</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="col-item">
                        <div class="photo">
                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price col-md-6 text-left">
                                    <h5 class="">{{ $product->name }}</h5>
                                    <small>6 Resellers</small>
                                </div>
                                <div class="rating hidden-sm col-md-6">
                                    <h5 class="">SRP: P200.00</h5>
                                    <h6 class="">RP: P160.00</h6>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                <p><a href="#" class="hidden-sm btn btn-default btn-block">More details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-item">
                        <div class="photo">
                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price col-md-6 text-left">
                                    <h5 class="">Sample Product</h5>
                                    <small>6 Resellers</small>
                                </div>
                                <div class="rating hidden-sm col-md-6">
                                    <h5 class="">SRP: P200.00</h5>
                                    <h6 class="">RP: P160.00</h6>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                <p><a href="#" class="hidden-sm btn btn-default btn-block">More details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-item">
                        <div class="photo">
                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price col-md-6 text-left">
                                    <h5 class="">Sample Product</h5>
                                    <small>6 Resellers</small>
                                </div>
                                <div class="rating hidden-sm col-md-6">
                                    <h5 class="">SRP: P200.00</h5>
                                    <h6 class="">RP: P160.00</h6>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                <p><a href="#" class="hidden-sm btn btn-default btn-block">More details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-item">
                        <div class="photo">
                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price col-md-6 text-left">
                                    <h5 class="">Sample Product</h5>
                                    <small>6 Resellers</small>
                                </div>
                                <div class="rating hidden-sm col-md-6">
                                    <h5 class="">SRP: P200.00</h5>
                                    <h6 class="">RP: P160.00</h6>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                <p><a href="#" class="hidden-sm btn btn-default btn-block">More details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-item">
                        <div class="photo">
                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price col-md-6 text-left">
                                    <h5 class="">Sample Product</h5>
                                    <small>6 Resellers</small>
                                </div>
                                <div class="rating hidden-sm col-md-6">
                                    <h5 class="">SRP: P200.00</h5>
                                    <h6 class="">RP: P160.00</h6>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                <p><a href="#" class="hidden-sm btn btn-default btn-block">More details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-item">
                        <div class="photo">
                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price col-md-6 text-left">
                                    <h5 class="">Sample Product</h5>
                                    <small>6 Resellers</small>
                                </div>
                                <div class="rating hidden-sm col-md-6">
                                    <h5 class="">SRP: P200.00</h5>
                                    <h6 class="">RP: P160.00</h6>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                <p><a href="#" class="hidden-sm btn btn-default btn-block">More details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection