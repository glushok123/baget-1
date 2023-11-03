<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="title" content="@yield('title')" />
    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="1 days">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta property="og:type" content="website">
    <meta property="og:title" content="Багетная мастерская">
    <meta property="og:description" content="
        Мы оформляем в багетные рамки постеры,
        фотографии, изображения, вышивки и многое другое.
        Печатаем на холсте, на глянцевой и матовой бумаге любые форматы изображений.
        Делаем красивые модульные картины для Вашего интерьера. Накатываем на пенокартон,
        делаем натяжку на подрамник, предоставляем услуги дизайнера.
    ">

    <meta property="og:site_name" content="">
    <meta property="og:image" content="images/offer-img.png">
    <meta property="og:image:secure_url" content="images/offer-img.png">
    <meta property="og:image:width" content="679">
    <meta property="og:image:height" content="386">
    <meta property="og:image:alt" content="">
    <meta name="geo.position" content="55.7411820;37.6301270">
    <meta name="geo.region" content="RU-">
    <meta name="geo.placename" content="Климентовский пер., 6, Москва, Россия, 115184">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1d2b40">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1d2b40">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1d2b40">

    <link rel="icon" type="image/png" sizes="100x100" href="/icon.svg">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" media="all">
</head>

<body>

        <div class="main-page-wrapper">
            <!-- ===================================================
                Loading Transition
            ==================================================== -->
            <div id="preloader">
                <div id="ctn-preloader" class="ctn-preloader">
                    <div class="animation-preloader">
                        <div class="icon">
                            <img src="/logo.png" alt="" class="m-auto d-block" width="340"></div>
                        <div class="txt-loading mt-3">
							<span data-text-preloader="БАГЕТНАЯ" class="letters-loading">
								БАГЕТНАЯ
							</span>
                            <br>
                            <span data-text-preloader="Мастерская" class="letters-loading">
								Мастерская
							</span>
                        </div>
                    </div>
                </div>
            </div>

            <!--
                =============================================
                    Theme Main Menu
                ==============================================
                -->
            <header class="theme-main-menu sticky-menu theme-menu-one">
                <div class="inner-content position-relative">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logo order-lg-0"><a href="/" class="d-block"><img src="/logo.png" alt="" width="250" style=""></a></div>

                        <div class="right-widget d-flex align-items-center order-lg-3">
                            <a href="contact-us-v2.html" class="contact-btn-one fs-16 fw-500 text-white tran3s d-none d-lg-block">Конструктор</a>
                        </div> <!-- /.right-widget -->

                        <nav class="navbar navbar-expand-lg order-lg-2">
                            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="d-block d-lg-none"><div class="logo"><a href="index.html" class="d-block"><img src="/logo.png" alt="" width="250"></a></div></li>
                                    <li class="nav-item active ">
                                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Главная</a>
                                    </li>
                                    <li class="nav-item dropdown mega-dropdown-md">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Услуги</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="menu-column">
                                                            <h6 class="mega-menu-title">Essential</h6>
                                                            <ul class="style-none mega-dropdown-list">
                                                                <li><a href="about-v1.html" class="dropdown-item"><span>About- insurance</span></a></li>
                                                                <li><a href="about-v2.html" class="dropdown-item"><span>About- Real Estate</span></a></li>
                                                                <li><a href="about-v3.html" class="dropdown-item"><span>About- Agency</span></a></li>
                                                                <li><a href="about-v4.html" class="dropdown-item"><span>About- L.Generation</span></a></li>
                                                                <li><a href="pricing.html" class="dropdown-item"><span>Pricing</span></a></li>
                                                                <li><a href="pricing-v2.html" class="dropdown-item"><span>Pricing- Sass Product</span></a></li>
                                                                <li><a href="pricing-v3.html" class="dropdown-item"><span>Pricing- Web Hosting</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="menu-column">
                                                            <h6 class="mega-menu-title">Features</h6>
                                                            <ul class="style-none mega-dropdown-list">
                                                                <li><a href="feature(sass).html" class="dropdown-item"><span>Feature- Sass Product</span></a></li>
                                                                <li><a href="feature(web-hosting).html" class="dropdown-item"><span>Feature- Web Hosting</span></a></li>
                                                                <li><a href="service-v1.html" class="dropdown-item"><span>Service- insurance</span></a></li>
                                                                <li><a href="service-v2.html" class="dropdown-item"><span>Service- Real Estate</span></a></li>
                                                                <li><a href="service-v3.html" class="dropdown-item"><span>Service- L.Generation</span></a></li>
                                                                <li><a href="service-v4.html" class="dropdown-item"><span>Service- Agency</span></a></li>
                                                                <li><a href="service-details.html" class="dropdown-item"><span>Service Details</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="menu-column">
                                                            <h6 class="mega-menu-title">Others</h6>
                                                            <ul class="style-none mega-dropdown-list">
                                                                <li><a href="testimonial.html" class="dropdown-item"><span>Testimonials</span></a></li>
                                                                <li><a href="team-v1.html" class="dropdown-item"><span>Team One</span></a></li>
                                                                <li><a href="team-v2.html" class="dropdown-item"><span>Team Two</span></a></li>
                                                                <li><a href="faq.html" class="dropdown-item"><span>FAQ</span></a></li>
                                                                <li><a href="signin.html" class="dropdown-item"><span>Signin</span></a></li>
                                                                <li><a href="signup.html" class="dropdown-item"><span>Signup</span></a></li>
                                                                <li><a href="404.html" class="dropdown-item"><span>404 Error</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Работы</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio-v1.html" class="dropdown-item"><span>Portfolio 01</span></a></li>
                                            <li><a href="portfolio-v2.html" class="dropdown-item"><span>Portfolio 02</span></a></li>
                                            <li><a href="portfolio-v3.html" class="dropdown-item"><span>Portfolio 03</span></a></li>
                                            <li><a href="portfolio-v4.html" class="dropdown-item"><span>Portfolio 04</span></a></li>
                                            <li><a href="portfolio-v5.html" class="dropdown-item"><span>Portfolio 05</span></a></li>
                                            <li><a href="portfolio-v6.html" class="dropdown-item"><span>Portfolio 06</span></a></li>
                                            <li><a href="portfolio-v7.html" class="dropdown-item"><span>Portfolio 07</span></a></li>
                                            <li class="dropdown-submenu dropdown">
                                                <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Single Portfolio</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="portfolio-details-v1.html" class="dropdown-item"><span>Portfolio details One</span></a></li>
                                                    <li><a href="portfolio-details-v2.html" class="dropdown-item"><span>Portfolio details Two</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Статьи</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-v1.html" class="dropdown-item"><span>List With sidebar</span></a></li>
                                            <li><a href="blog-v2.html" class="dropdown-item"><span>Grid With sidebar</span></a></li>
                                            <li><a href="blog-v3.html" class="dropdown-item"><span>Grid Layout</span></a></li>
                                            <li><a href="blog-details.html" class="dropdown-item"><span>Blog Details</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Контакты</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="contact-us.html" class="dropdown-item"><span>Contact- insurance</span></a></li>
                                            <li><a href="contact-us-v2.html" class="dropdown-item"><span>Contact- Agency</span></a></li>
                                            <li><a href="contact-us-v3.html" class="dropdown-item"><span>Contact- Web Hosting</span></a></li>
                                            <li><a href="contact-us-v4.html" class="dropdown-item"><span>Contact- L.Generation</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- Mobile Content -->
                                <div class="mobile-content d-block d-lg-none">
                                    <div class="d-flex flex-column align-items-center justify-content-center mt-70">
                                        <a href="contact-us-v2.html" class="contact-btn-one fs-16 fw-500 text-white tran3s">Конструктор</a>
                                    </div>
                                </div> <!-- /.mobile-content -->
                            </div>
                        </nav>
                    </div>
                </div> <!-- /.inner-content -->
            </header> <!-- /.theme-main-menu -->

            @yield('content')
            @include('layouts.footer')
        </div> <!-- /.main-page-wrapper -->

        <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/wow/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/slick/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.lazy.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
</html>
