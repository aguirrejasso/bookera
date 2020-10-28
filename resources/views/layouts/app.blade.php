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
                <a href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" alt="logo"></a>
            </div>
        </div>

        <div class="comero-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset('img/logo.png')}}" alt="logo"></a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item p-relative"><a href="#" class="nav-link active">Categorías <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    @foreach (DB::table('categories')->get() as $category)
                                        <li class="nav-item"><a href="{{ route('findBy', $category->id) }}" class="nav-link">{{ $category->category }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>

                        <div class="others-option">
                            <div class="option-item"><i class="search-btn fas fa-search"></i>
                                <i class="close-btn fas fa-times"></i>
                                
                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form" method= "post" action= "{{route('find')}}">
                                            @csrf
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
                                    <a href="{{route('orders')}}">{{Auth::user()->name}}</a>
                                @endif
                            </div>

                            <div class="option-item"><a href="{{ route('cart.index') }}">Carrito <i class="fas fa-shopping-bag"></i></a></div>

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

    <!-- Start Facility Area -->
    <section class="facility-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="facility-box">
                        <div class="icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h3>Envio a todo el mundo</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="facility-box">
                        <div class="icon">
                            <i class="fas fa-money-check-alt"></i>
                        </div>
                        <h3>Garantía de devolución del 100% del dinero</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="facility-box">
                        <div class="icon">
                            <i class="far fa-credit-card"></i>
                        </div>
                        <h3>Muchas formas de pago</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="facility-box">
                        <div class="icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>Soporte en línea 24/7</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Facility Area -->

    <!-- Start Footer Area -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="logo">
                            <a href="#"><img src="{{asset('img/logo.png')}}" alt="logo"></a>
                        </div>

                        <p>En Bookera buscamos que todas las personas cambien su mente y su vida a traves del habito de la lectura</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Enlaces rapidos</h3>

                        <ul class="quick-links">
                            <li><a href="#">Sobre Nosotros</a></li>
                            <li><a href="#">Preguntas Frecuentes</a></li>
                            <li><a href="#">Sobre Nuestros Servicios</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Informacion</h3>

                        <ul class="information-links">
                            <li><a href="#">Aviso de Privacidad</a></li>
                            <li><a href="#">Terminos y Condiciones</a></li>
                            <li><a href="#">Politica de Envios</a></li>
                            <li><a href="#">Politica de Devolucion</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contactanos</h3>

                        <ul class="footer-contact-info">
                            <li><i class="fas fa-map-marker-alt"></i> Direccion: 2750 Quadra Street Victoria, Canada</li>
                            <li><i class="fas fa-phone"></i> Telefono: <a href="#">(+123) 456-7898</a></li>
                            <li><i class="far fa-envelope"></i> Email: <a href="#">support@bookera.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p>Copyright @2020 Bookera. All Rights Reserved</p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <ul class="payment-card">
                            <li><a href="#" target="_blank"><img src="{{ asset('img/visa.png')}}" alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="{{ asset('img/mastercard.png')}}" alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="{{ asset('img/mastercard2.png')}}" alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="{{ asset('img/visa2.png')}}" alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="{{ asset('img/expresscard.png')}}" alt="image"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -

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
