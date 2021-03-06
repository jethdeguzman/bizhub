<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="/assets/css/store.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
    <script src="/assets/js/store.js"></script>

    <style type="text/css">
        .footer {
            position: absolute;
          bottom: 0;
          width: 100%;
          /* Set the fixed height of the footer here */
          height: 24px;
        }
        html {
          position: relative;
          min-height: 100%;
        }
        body {
          /* Margin bottom by footer height */
          margin-bottom: 60px;
        }
    </style>
</head>
<body>
    
    <header id="header" class="container">
        <h1 style="text-align:center"><img src="/{{$user->company_logo}}" class="img-circle" width="64"> {{$user->company_name}}</h1>
        <hr>
    </header>
    <!-- Posts -->
    
    <!-- <div id="grid" class="container"> -->
    <div id="grid">
        <div id="posts">
            @foreach($items as $product)
            <div class="post">
                <div class="col-item">
                    <div class="photo">
                        <img src="{{ $product->image }}" />
                    </div>
                    <div class="info" >
                        <div class="row" style="padding: 0px 26px">
                            <h3 style="text-align:left; ">{{ $product->name }} </h3>
                            <span class="pull-left" style="font-size:14px; ">{{ $product->description }}</span>
                            <h3 class="pull-right">P {{ $product->reseller_price }}</h3>

                        </div>
                        <div class="separator clear-left">
                            <p><a href="#" type="button" class="hidden-sm btn btn-primary btn-block">Add to Cart</a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



    <!-- Footer -->
    
    {{-- <footer id="footer" class="container">
        <hr>
        <p>Thanks for watching!</p>
    </footer> --}}

    <footer class="footer" id="footer" style="padding:0px 20px; background-color:#1B1B1B; color:#FFF">
        <div class="pull-right hidden-xs">
          <a href="#" style="color:#FFF">Privacy Policy</a>
           | <a href="#" style="color:#FFF">Terms of Use</a> 
           | <a href="#" style="color:#FFF">About</a>
        </div>
        <strong>Copyright © <?php echo date('Y'); ?> Powered by Bizhub.</strong> All rights reserved.
    </footer>


</body>
</html>