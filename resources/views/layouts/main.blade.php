<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BizHub - Retail Business Platform</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/scrolling-nav.css" rel="stylesheet">
    <link href="/assets/css/ionicons.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
    <link href="/assets/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    @section('navigation')
        @include('layouts.navigation')
    @show
    @yield('content')
    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/scrolling-nav.js"></script>
    <script type="text/javascript">
        jQuery(function(){
            $(".dropdown-search").on('click', function(){
                $('#search-input').attr('placeholder', 'Search '+$(this).text());
                // $('#search-form').attr('action', '#/'+$(this).text().toLowerCase());
            });
            $('.flip-btn').click(function(){
                console.log($(this).parent().parent());
                $(this).parent().parent().toggleClass('flipped');
            });
            $('.back-flip-btn').click(function(){
                $(this).parent().parent().parent().parent().toggleClass('flipped');
            });


        });
    </script>

</body>

</html>
