@extends('layouts.app')
@section('title', 'Encodyn | Custom Software & Web Design Solutions')
@section('description', 'Encodyn creates custom software solutions, responsive websites, and SEO strategies that solve
problems and drive growth for forward-thinking businesses. Transform your digital presence with our expertise.')
@section('keywords','custom software development, web design solutions, responsive websites, SEO strategies,
digital transformation, business growth, technology solutions, software engineering, digital services, encodyn')

@section('meta_tags')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Encodyn | Custom Software & Web Design Solutions">
    <meta property="og:description" content="Encodyn creates custom software solutions, responsive websites,
                    and SEO strategies that solve problems and drive growth for forward-thinking businesses.">
    <meta property="og:image" content="{{ asset('imgs/encodyn-social-media.webp') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Encodyn | Custom Software & Web Design Solutions">
    <meta property="twitter:description" content="Encodyn creates custom software solutions, responsive websites,
                        and SEO strategies that solve problems and drive growth for forward-thinking businesses.">
    <meta property="twitter:image" content="{{ asset('imgs/encodyn-social-media.webp') }}">

    <!-- WhatsApp / SMS Preview -->
    <meta property="og:site_name" content="Encodyn">
    <meta property="og:locale" content="en_US">
@endsection

@push('vite_assets')
    @vite([
        'resources/scss/master-common.scss',
        'resources/scss/master-branding-agency.scss',
        'resources/js/app.js'
    ])
@endpush

@section('content')
<!-- hero area start  -->
<section class="hero-area section-item">
    <div class="area-bg">
        <img src="{{ asset('imgs/encodyn-main-header.webp')}}" alt="Encodyn digital solutions showcase featuring custom software development and web design services">
    </div>
    <div class="container large">
        <div class="hero-area-inner">
            <div class="section-content">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h1 class="section-title has_char_anim" data-delay="0.15" data-translateX="50">Code, <br>
                            Design,
                            Rank
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-area">
            <div class="about-area-inner section-spacing-bottom">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle">Who we are</span>
                        </div>
                    </div>
                    <div class="content-last">
                        <div class="text-wrapper">
                            <p class="text has_text_move_anim">Encodyn builds powerful custom software solutions for forward-thinking businesses, solving problems, creating value, and driving growth.</p>
                        </div>
                        <div class="btn-wrapper has_fade_anim" data-fade-from="left">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero area end  -->

<!-- service area start  -->
<section class="service-area section-style section-item">
    <div class="container large">
        <div class="service-area-inner section-spacing">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h2 class="section-title has_fade_anim">Engineering Innovative Software Solutions for Your Business</h2>
                    </div>
                </div>
            </div>
            <div class="services-wrapper-box">
                <div class="services-wrapper">
                    <div class="has_fade_anim" data-delay="0.15">
                        <a href="{{ route('services.software-development') }}">
                            <div class="service-box">
                                <div class="icon">
                                    <img src="{{ asset('imgs/services/software-development-api-icon.svg')}}"
                                         alt="Custom software development and API integration services icon">
                                </div>
                                <div class="content">
                                    <h3 class="title">Software Development <i class="fa-solid fa-arrow-right"></i></h3>
                                    <p class="text">We develop custom software solutions with seamless API integration
                                        capabilities to maximize your business efficiency and scalability.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="has_fade_anim" data-delay="0.30">
                        <a href="{{ route('services.web-design') }}">
                            <div class="service-box">
                                <div class="icon">
                                    <img src="{{ asset('imgs/services/web-design-icon.svg')}}"
                                         alt="Responsive web design and development services icon">
                                </div>
                                <div class="content">
                                    <h3 class="title">Web Design <i class="fa-solid fa-arrow-right"></i></h3>
                                    <p class="text">We create responsive, user-centered websites that effectively
                                        showcase your brand and convert visitors into customers. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="has_fade_anim" data-delay="0.45">
                        <a href="{{ route('services.seo-optimization') }}">
                            <div class="service-box">
                                <div class="icon">
                                    <img src="{{ asset('imgs/services/seo-optimization-icon.svg')}}"
                                         alt="SEO optimization and search ranking improvement services icon">
                                </div>
                                <div class="content">
                                    <h3 class="title">SEO Optimization <i class="fa-solid fa-arrow-right"></i></h3>
                                    <p class="text">We implement data-driven SEO strategies to boost your search rankings,
                                        increase organic traffic, and maximize online visibility.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="has_fade_anim" data-delay="0.60">
                        <a href="{{ route('services.brand-design') }}">
                            <div class="service-box">
                                <div class="icon">
                                    <img src="{{ asset('imgs/services/branding-icon.svg')}}"
                                         alt="Brand identity design and visual communication services icon">
                                </div>
                                <div class="content">
                                    <h3 class="title">Brand Design <i class="fa-solid fa-arrow-right"></i></h3>
                                    <p class="text">We craft distinctive visual identities that communicate your brand
                                        values and create meaningful connections with your target audience.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="info-text has_fade_anim" data-fade-from="left">
                <p class="text">Save valuable time by trusting experts to find the right solution. <br>
                    <a class="wc-btn wc-btn-underline" href="{{ route('services') }}">Explore our services</a>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- service area end  -->

<!-- work area start  -->
<section class="work-area section-style section-item">
    <div class="container large">
        <div class="work-area-inner section-spacing">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h2 class="section-title has_fade_anim">Selected
                            work</h2>
                    </div>
                </div>
            </div>
            <div class="works-wrapper-box">
                <div class="works-wrapper">
                    <div class="work-box">
                        <div class="thumb">
                                <img src="{{ asset('imgs/works/airq.webp')}}"
                                     alt="Air Q Contractors website design and Stripe integration project by Encodyn">
                        </div>
                        <div class="content">
                            <h3 class="title">Air Q <br>Contractors</h3>
                            <div class="tags">
                                <div class="tag">Web Design</div>
                                <div class="tag">Stripe Integration</div>
                            </div>
                        </div>
                    </div>
                    <div class="work-box">
                        <div class="thumb">
                                <img src="{{ asset('imgs/works/consultoriomedico.webp')}}"
                                     alt="Consultorio Medico Bellaire healthcare website with appointment scheduling integration">
                        </div>
                        <div class="content">
                            <h3 class="title">Consultorio Medico <br>
                                Bellaire</h3>
                            <div class="tags">
                                <div class="tag">Web Design</div>
                                <div class="tag">Appt Integration</div>
                            </div>
                        </div>
                    </div>
                    <div class="work-box">
                        <div class="thumb">
                                <img src="{{ asset('imgs/works/elitepharmacy.webp')}}"
                                     alt="Elite Pharmacy responsive website design showcasing healthcare services">
                        </div>
                        <div class="content">
                            <h3 class="title">Elite <br>
                                Pharmacy</h3>
                            <div class="tags">
                                <div class="tag">Web Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="work-box">
                        <div class="thumb">
                                <img src="{{ asset('imgs/works/sanasana.webp')}}"
                                     alt="Sana Sana brand identity design project by Encodyn">
                        </div>
                        <div class="content">
                            <h3 class="title">Sana <br>
                                Sana</h3>
                            <div class="tags">
                                <div class="tag">Branding</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content section-spacing-top">
                <div class=""></div>
                <div class="content-last">
                    <div class="text-wrapper">
                        <p class="text has_text_move_anim">We are delivering powerful, custom-built software solutions that drive measurable impact for businesses aiming high.
                            Discover what we can build for you.</p>
                    </div>
                    <div class="btn-wrapper has_fade_anim" data-fade-from="left">
                        <div class="wc-btn-group">
                            <a class="wc-btn wc-btn-circle" href="{{ route('services') }}">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a class="wc-btn wc-btn-primary" href="{{ route('services') }}">View all services</a>
                            <a class="wc-btn wc-btn-circle" href="{{ route('services') }}">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work area end  -->

<div class="image-wrapper pb-0 section-style overflow-hidden">
    <video class="custom-video" src="{{ asset('imgs/software.mp4')}}"
           autoplay loop muted playsinline
           aria-label="Software development process visualization by Encodyn">
    </video>
</div>
<section class="cta-area section-style section-item">
    <div class="container">
        @include('components.clients')
    </div>
</section>
<!-- testimonial area start  -->
<div class="dark">
<div class="testimonial-area section-style section-item">
    <div class="container large">
        <div class="testimonial-area-inner section-spacing">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h2 class="section-title has_fade_anim">What they say
                            about us</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-wrapper-box">
                <div class="info-box">
                    <h3 class="rating">5</h3>
                    <div class="rating-icons">
                        <img src="{{ asset('imgs/icon/star.webp')}}" alt="Five-star client satisfaction rating">
                        <img src="{{ asset('imgs/icon/star.webp')}}" alt="Five-star client satisfaction rating">
                        <img src="{{ asset('imgs/icon/star.webp')}}" alt="Five-star client satisfaction rating">
                        <img src="{{ asset('imgs/icon/star.webp')}}" alt="Five-star client satisfaction rating">
                        <img src="{{ asset('imgs/icon/star.webp')}}" alt="Five-star client satisfaction rating">
                    </div>
                    <p class="reviews">(5+ reviews)</p>
                    <p class="text pb-3">Empowering
                        businesses through custom
                        solutions.</p>
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6813793448b69db550e1c9e6" data-style-height="52px" data-style-width="100%">
                        <a href="https://www.trustpilot.com/review/encodyn.com" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
                <div class="testimonial-wrapper">
                    <div class="swiper testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="content">
                                        <div class="content-top">
                                            <div class="icon">
                                                <img class="quote-icon" src="{{ asset('imgs/icon/quote-6.webp')}}"
                                                     alt="Testimonial quote icon for client feedback">
                                            </div>
                                            <div class="text-wrapper">
                                                <p class="text">They built a fully <span>custom solution</span> tailored specifically to our <span>contracting business</span>.
                                                    It was not a generic platform; it was made just for us and fit our needs perfectly.
                                                    Highly recommend them to any business looking for a unique, made-to-measure <span>software solution.</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <div class="meta">
                                                <h3 class="name">
                                                    <a href="https://www.trustpilot.com/reviews/6816df13a7365817f5e34f10">
                                                        Air Q Contractors
                                                        <i class="fas fa-external-link-alt ml-5"></i>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="content">
                                        <div class="content-top">
                                            <div class="icon">
                                                <img class="quote-icon" src="{{ asset('imgs/icon/quote-6.webp')}}" alt="Quote Icon">
                                            </div>
                                            <div class="text-wrapper">
                                                <p class="text">As a small family business, we trusted <span>Encodyn</span> to boost our online <span>presence</span> a year ago,
                                                    and they delivered! The <span>rebranded</span> website, community-building tools,
                                                    and <span>user-friendly</span> designs have been game-changers.
                                                    We're excited to continue working with them to take our business to the <span>next level.</span> (...)</p>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <div class="meta">
                                                <h3 class="name">
                                                    <a href="https://www.trustpilot.com/reviews/6815392f0911bb951b278ca3">
                                                        M E Auto Accessories
                                                        <i class="fas fa-external-link-alt ml-5"></i>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="content">
                                        <div class="content-top">
                                            <div class="icon">
                                                <img class="quote-icon" src="{{ asset('imgs/icon/quote-6.webp')}}" alt="Quote Icon">
                                            </div>
                                            <div class="text-wrapper">
                                                <p class="text">As the owner of Los Vecinos Bakery I am completely <span>satisfied</span> with the <span>design and implementation</span> of our new website.
                                                    The design perfectly captures the authentic essence of our <span>family-owned business</span> while offering intuitive navigation (...)
                                            </div>
                                        </div>
                                        <div class="author">
                                            <div class="meta">
                                                <h3 class="name">
                                                    <a href="https://www.trustpilot.com/reviews/681778b8f59e60ab86a36891">
                                                        Los Vecinos Bakery
                                                        <i class="fas fa-external-link-alt ml-5"></i>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav">
                    <div class="testimonial-button-prev nav-icon">
                        <i class="fa-solid fa-arrow-left" aria-label="Previous testimonial"></i>
                    </div>
                    <div class="testimonial-button-next nav-icon">
                        <i class="fa-solid fa-arrow-right" aria-label="Next testimonial"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end  -->
</div>

<!-- cta area start  -->
<section class="cta-area section-style section-item">
    <div class="container large">
        <div class="cta-area-inner section-spacing">
            <div class="section-content">
                <div class="section-title-wrapper">
                    <div class="subtitle-wrapper">
                        <span class="section-subtitle has_fade_anim">Have a project in mind?</span>
                    </div>
                    <div class="title-wrapper">
                        <h2 class="section-title has_fade_anim">Let’s work
                            together</h2>
                    </div>
                </div>
                <div class="btn-wrapper has_fade_anim">
                    <div class="wc-btn-group">
                        <a class="wc-btn wc-btn-circle" href="{{ route('contact') }}">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a class="wc-btn wc-btn-primary" href="{{ route('contact') }}">contact us</a>
                        <a class="wc-btn wc-btn-circle" href="{{ route('contact') }}">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta area end  -->
@endsection
