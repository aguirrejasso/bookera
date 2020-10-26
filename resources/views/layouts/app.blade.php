<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- niceSelect CSS -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
    <!-- ION rangeSlider Min CSS -->
    <link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.min.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- Slick Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <title>@yield('title')</title>

</head>
<body>
    
    <!-- Start Top Panel Area -->
    <div class="top-panel">
        <div class="container">
            <div class="panel-content">
                <div class="top-panel-slides owl-carousel owl-theme">
                    <div class="single-item-box">
                        <p><strong>Envío express.</strong> Recibe tu pedido al siguiente día </p>
                    </div>

                    <div class="single-item-box">
                        <p><strong>Leer para aprender.</strong> Cambia tu mente, cambia tu vida </p>
                    </div>

                    <div class="single-item-box">
                        <p><strong>Envíos gratis</strong> en pedidos desde $499 </p>
                    </div>
                </div>

                <i class="fas fa-times panel-close-btn"></i>
            </div>
        </div>
    </div>
    <!-- End Top Panel Area -->

    <!-- Start Top Header Area -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <ul class="top-header-nav">
                        <li><a href="about.html">Sobre Nosotros</a></li>
                        <li><a href="faq.html">Preguntas Frecuentes</a></li>
                        <li><a href="contact-us.html">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="comero-mobile-nav">
            <div class="logo">
                <a href="{{route('home')}}"><img src="" alt="logo"></a>
            </div>
        </div>

        <div class="comero-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="" alt="logo"></a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item p-relative"><a href="#" class="nav-link active">Categorías <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="index.html" class="nav-link">Ejemplo</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="others-option">
                            <div class="option-item"><i class="search-btn fas fa-search"></i>
                                <i class="close-btn fas fa-times"></i>
                                
                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">

                                            <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="option-item">
                                @if(!Auth::check())
                                    <a href="{{route('login')}}">Ingresar</a>
                                @else
                                    <a href="{{route('login')}}">{{Auth::user()->name}}</a>
                                @endif
                            </div>

                            <div class="option-item"><a href="#">Carrito <i class="fas fa-shopping-bag"></i></a></div>

                            @if(Auth::check())
                                <div class="option-item"><a href="{{ route('dashboard') }}" class="text-danger">Administrar </a></div>
                            @endif

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    @yield('content')

    <div class="go-top"><i class="fas fa-arrow-up"></i><i class="fas fa-arrow-up"></i></div>

    <!-- JQuery Min Js -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Popper Min JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap Min Js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Parallax Min JS -->
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <!-- Slick Min JS -->
    <script src="{{ asset('js/slick.js') }}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup Min JS -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- niceSelect Min JS -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <!-- MeanMenu JS -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- ION rangeSlider Min JS  -->
    <script src="{{ asset('js/ion.rangeSlider.min.js') }}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <!-- Contact Form Min JS -->
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
    <!-- ajaxChimp Min JS -->
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Comero Map JS FILE -->
    <script src="{{ asset('js/comero-map.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
