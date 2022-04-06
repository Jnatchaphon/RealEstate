<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ url('css/assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/home.css')}}" rel="stylesheet">




    <link rel="stylesheet" href="{{url('assets/css/docs.theme.min.css')}} ">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{url('assets/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/owlcarousel/assets/owl.theme.default.min.css')}}">



</head>

<body class="bg-black">
    <div class="container-fluid p-0">
        <nav class="navbar navbar-dark navbar-expand-md bg-menu p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse dual-nav order-2 order-md-1 justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item mr-3 pl-2 ">
                        <a class="nav-link text-white promptl text-menu" href="{{url('/')}}">HOME</a>
                    </li>
                    <li class="nav-item mr-3 pl-2">
                        <a class="nav-link text-white promptl text-menu" href="{{url('news')}}">GUNNER NEWS</a>
                    </li>
                    <li class="nav-item mr-3 pl-2">
                        <a class="nav-link text-white promptl text-menu" href="{{url('previews')}}">PREVIEWS</a>
                    </li>
                    <li class="nav-item mr-3 pl-2">
                        <a class="nav-link text-white promptl text-menu" href="{{url('columnists')}}">COLUMNISTS</a>
                    </li>
                </ul>
            </div>
            <a href="/" class="navbar-brand mx-auto order-0 order-md-2"><img src="{{url('img/logo.png')}}"
                    class="logomr"></a>
            <div class="navbar-collapse collapse dual-nav order-3 order-md-3">
                <ul class="navbar-nav">
                    <li class="nav-item mr-3 pl-2">
                        <a class="nav-link text-white promptl text-menu" href="#">MATCHRATING</a>
                    </li>
                    <li class="nav-item mr-3 pl-2">
                        <a class="nav-link text-white promptl text-menu" href="#">PLAYERS</a>
                    </li>
                    <li class="nav-item mr-3 pl-2">
                        <a class="nav-link text-white promptl text-menu" href="{{url('sportsworld')}}">SPORTSWORLD</a>
                    </li>
                    <li class="nav-item mr-3 pl-2">
                        <a class="nav-link text-white promptl text-menu" href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>





    @yield('content')









    <div class="container-fluid mt-5 foot p-0 m-0">
        <div class="row mfoot">
            <div class="col-sm">
                <h4 class="promptb text-center text-white">THE HONOUR</h4>
            </div>
        </div>
        <div class="row mfoot">
            <div class="col-2">
                <img src="{{url('img/h1.png')}}" class="rounded mx-auto d-block">
            </div>
            <div class="col-2">
                <img src="{{url('img/h2.png')}}" class="rounded mx-auto d-block">
            </div>
            <div class="col-2">
                <img src="{{url('img/h3.png')}}" class="rounded mx-auto d-block">
            </div>
            <div class="col-2">
                <img src="{{url('img/h4.png')}}" class="rounded mx-auto d-block">
            </div>
            <div class="col-2">
                <img src="{{url('img/h5.png')}}" class="rounded mx-auto d-block">
            </div>
            <div class="col-2">
                <img src="{{url('img/h6.png')}}" class="rounded mx-auto d-block">
            </div>
        </div>
        <div class="container-fluid border-top mt-4 p-0">
            <div class="row dfoot p-0">
                <div class="col-sm pt-3 pb-3 lfoot1 p-0">
                    <p class="text-white m-0 promptl" style="font-size : 14px;">FACEBOOK : GUNNERTALK</p>
                </div>
                <div class="col-sm pt-3 pb-3 lfoot2 p-0">
                    <p class="text-white m-0 promptl" style="font-size : 14px;">EMAIL : TG.Thaigunners@gmail.com</p>
                </div>
                <div class="col-sm pt-3 pb-3 lfoot3 p-0">
                    <p class="text-white m-0 promptl" style="font-size : 14px;">TEL : +6696-293-9839
                        <script type="text/javascript" language="javascript1.1" src="http://tracker.stats.in.th/tracker.php?sid=54964"></script>
                        <noscript><a target="_blank" href="http://www.stats.in.th/">Stat</a></noscript>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-footb">
            <div class="container text-center pt-1"><img src="{{url('img/logo.png')}}"></div>
        </div>
    </div>




</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{url('assets/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{url('assets/vendors/highlight.js')}}"></script>
<script src="{{url('assets/js/app.js')}}"></script>
<script>


    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    $('.tog').hover(function () {
        $(this).toggleClass('togbg');
    });
    $('.togsm').hover(function () {
        $(this).toggleClass('togbgsm');
    });

    $('.topichvariety').hover(function () {
        $(this).toggleClass('topichvarietyac');
    });

    $('.topichvarietyc').hover(function () {
        $('.topichvariety').toggleClass('topichvarietyac');
    });

    $('.topichvariety2').hover(function () {
        $(this).toggleClass('topichvarietyac');
    });

    $('.topichvarietyc2').hover(function () {
        $('.topichvariety2').toggleClass('topichvarietyac');
    });



    $('.ff1').hover(function () {
        $('.ff1').animate({
            width: "60%"
        }, 300, function () {
            $('.ttv1').toggleClass('topichvariety3');
            $('.ttv1').toggleClass('topichvarietyac');
            $('.imgovr1').toggleClass('cd111');
        });
        $('.ff2').animate({
            width: "19.99%"
        }, 300);
        $('.ff3').animate({
            width: "19.99%"
        }, 300);
    });
    $('.ff2').hover(function () {
        $('.ff2').animate({
            width: "60%"
        }, 300, function () {
            $('.ttv2').toggleClass('topichvariety3');
            $('.ttv2').toggleClass('topichvarietyac');
            $('.imgovr2').toggleClass('cd111');

        });
        $('.ff1').animate({
            width: "19.99%"
        }, 300);
        $('.ff3').animate({
            width: "19.99%"
        }, 300);
    });
    $('.ff3').hover(function () {
        $('.ff3').animate({
            width: "60%"
        }, 300, function () {
            $('.ttv3').toggleClass('topichvariety3');
            $('.ttv3').toggleClass('topichvarietyac');
            $('.imgovr3').toggleClass('cd111');
        });
        $('.ff1').animate({
            width: "19.99%"
        }, 300);
        $('.ff2').animate({
            width: "19.99%"
        }, 300);


    });

</script>
