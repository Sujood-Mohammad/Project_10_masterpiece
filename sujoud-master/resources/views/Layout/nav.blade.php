<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from layerdrops.com/agriox/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 11:17:57 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sejo</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="Agriox HTML Template For Agriculture Farming Services" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Shadows+Into+Light&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/icomoon-icons/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/twentytwenty/twentytwenty.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/agriox.css')}}" />


    <link rel="stylesheet" href="{{ asset('assets/css/agriox-rtl.css')}}">

    <link rel="stylesheet" id="jssMode" href="{{ asset('assets/css/modes/agriox-light.css')}}">

    <!-- toolbar css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/toolbar/css/toolbar.css')}}">
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">

</head>

<body>

    <!-- style switcher -->
    <div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3>Layout Options</h3>
        <div class="language-feature">
            <button class="ltr-switcher" data-href="#googtrans(en|en)">LTR</button><!-- /.ltr-switcher -->
            <button class="rtl-switcher" data-href="#googtrans(en|ar)">RTL</button><!-- /.rtl-switcher -->
        </div><!-- /.language-feature -->
        <div class="layout-feature" id="colorMode">
            <a href="#" class="dark-switcher" data-theme="agriox-dark">Dark</a>
            <a href="#" class="light-switcher" data-theme="agriox-light">Light</a>
            <button class="boxed-switcher">Boxed</button><!-- /.ltr-switcher -->
        </div><!-- /.language-feature -->
    </div>
    <!-- end style switcher -->

    <div class="preloader">
        <img class="preloader__image" width="60" src="{{asset('assets/images/loader.png')}}" alt="" />
    </div> <!-- /.preloader -->

    <div class="page-wrapper">

        <header class="main-header main-header--one main-header--one--two  clearfix">
            <div class="main-header--one__wrapper">
                <div class="main-header--one__bottom clearfix">
                    <div class="auto-container">
                        <div class="main-header--one__bottom-inner">
                            <div class="main-header--one__bottom-middel">
                                <div class="logo">
                                    <a href="/">
                                        <img src="{{asset('assets/images/resources/falahD.png')}}" width="115px" height="54" alt="" class="light-logo" />
                                        <img src="{{asset('assets/images/resources/falahW.png')}}" width="115px" height="54" class="dark-logo" alt="" />
                                    </a>
                                </div>
                            </div>

                            <nav class="main-menu main-menu--1">
                                <div class="main-menu__inner">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                                    <div class="stricky-one-logo">
                                        <div class="logo">
                                            <a href="/">
                                                <img src="{{ asset('assets/images/resources/falahD.png')}}" width="115px" height="54" class="dark-logo" alt="">
                                                <img src="{{ asset('assets/images/resources/falahW.png')}}" width="115px" height="54" class="light-logo" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="main-header--one__bottom-left">
                                        <ul class="main-menu__list">
                                            <li class="dropdown megamenu">
                                                <a href="/">Home</a>

                                            </li>
                                            <li><a href="/about">About</a></li>


                                            <li class="dropdown">
                                                <a href="/product">Shop</a>

                                            </li>

                                            <li><a href="/contact">Contact</a></li>
                                             <li>

                                            <a href="/cart">Cart
                                         @if (Auth::check())
                                        [{{$total_quntity}}]
                                            @endif

                                            </a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                            <div class="main-header--one__bottom-right clearfix">
                                <div class="search-cart">
                                    <a href="#" class="search search-toggler"><span
                                            class="icon-magnifying-glass"></span></a>
                                    <a href="#" class="cart mini-cart__toggler"><span
                                            class="icon-shopping-cart"></span></a>
                                </div>
                                {{-- <div class="contact-box">
                                    <div class="icon">
                                        <span class="icon-phone-call-2"></span>
                                    </div>
                                    <div class="text">
                                        <p>Call Anytime</p>
                                        <a href="tel:123456789">666 888 0000</a>
                                    </div>
                                </div> --}}

                                @guest

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style="color: white" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color: white" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img class="rounded-circle" src="{{asset('img/'.Auth::user()->image)}}" width="40px" height="40px" alt="">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}">
                                        {{ __('Profile') }}
                                    </a>
                                    @if (Auth::user()->roles == 1)
                                    <a class="dropdown-item" href="/admin">
                                        {{ __('Admin Dashboard') }}
                                    </a>
                               @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest




                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
