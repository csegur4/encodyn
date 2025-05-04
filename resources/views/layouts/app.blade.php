<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Encodyn')</title>
    <meta name="description" content="@yield('description', 'Encodyn: innovative technological solutions')">
    <meta name="keywords" content="@yield('keywords', 'custom software development, web design solutions, responsive websites,
                SEO strategies, digital transformation, business growth, technology solutions, encodyn')">
    <link rel="canonical" href="{{ url()->current() }}">
    <!-- Meta tags and Open Graph -->
    @yield('meta_tags')
    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/favicon.png') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/progressbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    @stack('vite_assets')
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TG8DNRQJQ7"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-TG8DNRQJQ7');
</script>

<body class="font-heading-instumentsans-semibold">

<!-- Preloader -->
<div id="preloader">
    <div id="container" class="container-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text="E" class="characters">E</span>
                <span data-text="n" class="characters">n</span>
                <span data-text="c" class="characters">c</span>
                <span data-text="o" class="characters">o</span>
                <span data-text="d" class="characters">d</span>
                <span data-text="y" class="characters">y</span>
                <span data-text="n" class="characters">n</span>
            </div>
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
</div>

<!-- Cursor Animation -->
<div class="cursor1"></div>
<div class="cursor2"></div>

<!-- Sroll to top -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>

<!-- offcanvas start  -->
<div class="offcanvas-3__area">
    <div class="offcanvas-3__inner">
        <div class="offcanvas-3__meta-wrapper">
            <div class="">
                <button id="close_offcanvas" class="close-button close-offcanvas" onclick="hideCanvas3()">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <div class="offcanvas-3__menu-wrapper pb-5 pt-5">
            <nav class="nav-menu offcanvas-3__menu">
                <ul>
                    <li><a href="{{ route('home') }}">home</a></li>
                    <li><a href="{{ route('services') }}">services</a></li>
                    <li><a href="{{ route('services.software-development') }}" class="mobile-submenu">Software Development</a></li>
                    <li><a href="{{ route('services.web-design') }}" class="mobile-submenu">Web Design</a></li>
                    <li><a href="{{ route('services.seo-optimization') }}" class="mobile-submenu">SEO Optimization</a></li>
                    <li><a href="{{ route('services.brand-design') }}" class="mobile-submenu">Brand Design</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="">
            <div class="offcanvas-3__meta mb-145 pt-5">
                <ul>
                    <li><a href="tel:8133300252" class="unnerline"><u>(813) 330-0252</u></a></li>
                    <li><a href="mailto:{{ env('APP_COMPANY_EMAIL') }}">{{ env('APP_COMPANY_EMAIL') }}</a></li>
                    <li>Tampa, Florida, 33603, USA</li>
                </ul>
            </div>
            <div class="offcanvas-3__social">
                <p class="title">Follow Us</p>
                <div class="offcanvas-3__social-links">
                    <a href="https://www.linkedin.com/company/encodyn" aria-label="Follow Encodyn on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/encodyn" aria-label="Follow Encodyn on Instagram"><i class="fa-brands fa-instagram" ></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offcanvas end  -->

<!-- Header area start -->
<header class="header-area">
    <div class="container large">
        <div class="header-area__inner">
            <div class="header__logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('imgs/encodyn-logo-black.webp')}}" alt="image" style="width: 250px">
                </a>
            </div>
            <div class="header__nav pos-center">
                <nav class="main-menu">
                    <ul>
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('services') }}">Services</a>
                            <ul class="dp-menu">
                                <li><a href="{{ route('services.software-development') }}">Software Development</a></li>
                                <li><a href="{{ route('services.web-design') }}">Web Design</a></li>
                                <li><a href="{{ route('services.seo-optimization') }}">SEO Optimization</a></li>
                                <li><a href="{{ route('services.brand-design') }}">Brand Design</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header__button">
                <div class="wc-btn-group">
                    <a class="wc-btn wc-btn-circle" href="{{ route('contact') }}">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a class="wc-btn wc-btn-primary" href="{{ route('contact') }}">Get started</a>
                    <a class="wc-btn wc-btn-circle" href="{{ route('contact') }}">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="header__navicon d-xl-none">
                <button onclick="showCanvas3()" class="open-offcanvas" aria-label="Open Menu">
                    <i class="fa-solid fa-bars"></i></button>
            </div>
        </div>
    </div>
</header>
<!-- Header area end -->

<div class="has-smooth" id="has_smooth"></div>
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div class="body-wrapper body-branding-agency">

            <!-- overlay switcher close  -->
            <div class="overlay-switcher-close"></div>

            <main>

                @yield('content')

            </main>

            <!-- footer area start  -->
            <footer class="footer-area section-style pb-0">
                <div class="container large">
                    <div class="footer-area-inner section-spacing-top">
                        <div class="footer-widget-wrapper">
                            <div class="footer-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('imgs/encodyn-logo-white.webp') }}" alt="site-logo" style="width: 230px"></a>
                            </div>
                        </div>
                        <div class="footer-widget-wrapper">
                            <h2 class="title">Company</h2>
                            <ul class="footer-nav-list">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('privacy-policy') }}" rel="nofollow">Privacy Policy</a></li>
                                <li><a href="{{ route('terms-and-conditions') }}" rel="nofollow">Terms and Conditions</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget-wrapper">
                            <h2 class="title">Service</h2>
                            <ul class="footer-nav-list">
                                <li><a href="{{ route('services.software-development') }}">Software Development</a></li>
                                <li><a href="{{ route('services.web-design') }}">Web Design</a></li>
                                <li><a href="{{ route('services.seo-optimization') }}">SEO Optimization</a></li>
                                <li><a href="{{ route('services.brand-design') }}">Brand Design</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget-wrapper">
                            <h2 class="title">Follow Us</h2>
                            <ul class="social-links">
                                <li>
                                    <a href="https://www.instagram.com/encodyn" aria-label="Follow Encodyn on Instagram" >
                                        <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/encodyn" aria-label="Follow Encodyn on LinkedIn">
                                        <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="container large">
                        <div class="copyright-area-inner">
                            <div class="copyright-text">
                                <p class="text text-center justify-content-center">© {{ date('Y') }} <a href="https://www.encodyn.com">Encodyn,</a> Inc.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer area end  -->
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/counter.js') }}"></script>
<script src="{{ asset('js/progressbar.js') }}"></script>
<script src="{{ asset('js/gsap.min.js') }}"></script>
<script src="{{ asset('js/ScrollSmoother.min.js') }}"></script>
<script src="{{ asset('js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('js/SplitText.min.js') }}"></script>
<script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('js/backToTop.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/error-handling.js') }}"></script>
<script src="{{ asset('js/offcanvas.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
@stack('page_scripts')

<script>

    // process slider
    if (('.process-slider').length) {
        var process_slider = new Swiper(".process-slider", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 0,
            speed: 1800,
            watchSlidesProgress: true,
            breakpoints: {
                // when window width is >= px
                576: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
                1201: {
                    slidesPerView: 3,
                },
                1367: {
                    slidesPerView: 3,
                },
                1441: {
                    slidesPerView: 4,
                },
            }
        });
    }

    // testimonial slider
    if (('.testimonial-slider').length) {
        var testimonial_slider = new Swiper(".testimonial-slider", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 50,
            speed: 1800,
            watchSlidesProgress: true,
            navigation: {
                prevEl: ".testimonial-button-prev",
                nextEl: ".testimonial-button-next",
            },
            breakpoints: {
                // when window width is >= px
                576: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                992: {
                    slidesPerView: 1,
                },
                1201: {
                    slidesPerView: 2,
                },
                1367: {
                    slidesPerView: 2,
                },
                1441: {
                    slidesPerView: 2,
                },
            }
        });
    }

    // client slider
    if ('.client-slider-active') {
        var client_slider_active = new Swiper(".client-slider-active", {
            slidesPerView: 'auto',
            loop: true,
            autoplay: true,
            spaceBetween: 140,
            speed: 3000,
            autoplay: {
                delay: 1,
            },
        });
    }

</script>

</body>
</html>
