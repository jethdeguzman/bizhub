@extends('layouts.main')

@section('nav-content')
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li>
                <a href="/suppliers">Suppliers</a>
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
                  <li role="presentation"><a href="/products" >Products</a></li>
                  <li role="presentation" class="active"><a href="/products/new">Add New</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                @foreach($products as $product)

                <div class="col-sm-3">
                    <div class="col-item">
                        <div class="photo">
                            <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price col-md-6 text-left">
                                    <h5 class="">{{ $product->name }}</h5>
                                    <small>{{ $product->supplier->name }}</small>
                                </div>
                                <div class="rating hidden-sm col-md-6">
                                    <h5 class="">SRP: P{{ $product->suggested_retail_price }}</h5>
                                    <h6 class="">RP: P{{ $product->reseller_price }}</h6>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                <p><a href="#" class="hidden-sm btn btn-primary btn-block">Add to my Products</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection