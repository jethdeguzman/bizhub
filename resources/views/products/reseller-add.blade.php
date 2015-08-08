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
                  <li role="presentation" class="active"><a href="/products" >My Products</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
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
                                    <small>{{ $product->supplier->company_name }}</small>
                                </div>
                                <div class="rating hidden-sm col-md-6">
                                    <h5 class="">SRP: P{{ $product->suggested_retail_price }}</h5>
                                    <h6 class="">RP: P{{ $product->reseller_price }}</h6>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                
                                <p><a type="button" data-toggle="modal" data-target="#modal{{$product->id}}" class="hidden-sm btn btn-primary btn-block">Add to my Products</a></p>
                                }
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content" style="border-radius:0px;">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align:left;">Add Product</h4>
                      </div>
                      <div class="modal-body">
                        <div class="media">
                          <div class="media-left media-middle">
                            <a href="#">
                              <img class="media-object" src="/assets/img/company-64.png" alt="...">
                            </a>
                          </div>
                          <div class="media-body text-left">
                            <h4 class="media-heading">{{$product->name}}</h4>
                            <span>{{$product->description}}</span><br>
                            <span>SRP {{$product->suggested_retail_price}} | RP {{$product->reseller_price}}</span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="/products/{{$product->id}}/add" class="btn btn-primary">Save</a>
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