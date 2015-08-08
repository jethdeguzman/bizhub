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
                  <li role="presentation"><a href="/suppliers" >My Suppliers</a></li>
                  <li role="presentation" class="active"><a href="/suppliers/all">Browse All</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
            @if(count($suppliers) > 0)
                @foreach($suppliers as $supplier)
                    <div class="col-md-3  col-sm-4 col-xs-12 item-wrapper">
                        <div class="media">
                          <div class="media-left media-middle">
                            <a href="#">
                              <img class="media-object" src="/assets/img/company-64.png" alt="...">
                            </a>
                          </div>
                          <div class="media-body text-left">
                            <h4 class="media-heading">{{ $supplier->company_name }}</h4>
                            <span>Connected to 6 resellers</span><br>
                            <span><a href="" class="btn btn-primary btn-xs">View </a> <a href="/resellers/apply/{{$supplier->id}}" class="btn btn-warning btn-xs">Apply </a></span>
                          </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p style="font-size:20px;">No suppliers at the moment.</p>
            @endif
            </div>
        </div>
    </section>
@endsection