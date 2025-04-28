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
        <img src="{{ asset('imgs/encodyn-main-header.webp')}}" alt="image">
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
                {{--<div class="video-wrapper has_fade_anim" data-ease="power3.out">
                    <div class="thumb p-relative">
                        <img src="{{ asset('imgs/gallery/img-s-32.webp')}}" alt="image">
                        <a href="https://crowdytheme.com/assets/wp-content/uploads/2024/06/arolux-branding-agency-video.mp4"
                           class="wc-btn wc-btn-circle video-popup pos-center"><i class="fa-solid fa-play"></i></a>
                    </div>
                </div>--}}
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
                                         alt="Software development icon depicting custom software solutions">
                                </div>
                                <div class="content">
                                    <h3 class="title">Software Development </h3>
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
                                         alt="Web design icon representing modern website creation">
                                </div>
                                <div class="content">
                                    <h3 class="title">Web Design</h3>
                                    <p class="text">We create responsive, user-centered websites that effectively
                                        showcase your brand and convert visitors into customers.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="has_fade_anim" data-delay="0.45">
                        <a href="{{ route('services.seo-optimization') }}">
                            <div class="service-box">
                                <div class="icon">
                                    <img src="{{ asset('imgs/services/seo-optimization-icon.svg')}}"
                                         alt="SEO optimization icon illustrating search engine ranking improvement">
                                </div>
                                <div class="content">
                                    <h3 class="title">SEO Optimization</h3>
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
                                         alt="Design icon showing brand identity creation">
                                </div>
                                <div class="content">
                                    <h3 class="title">Brand Design</h3>
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
                    <a class="wc-btn wc-btn-underline" href="{{ route('contact') }}">Contact us now</a>
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
                <div class="content-last">
                    <div class="link-meta has_fade_anim" data-fade-from="left">
                        <div class="profile-item">
                            <div class="icon"><i class="fa-brands fa-linkedin-in"></i></div>
                            <div class="">
                                <span class="meta-title">Follow</span>
                                <h2 class="name">LinkedIn</h2>
                            </div>
                        </div>
                        <div class="profile-item">
                            <div class="icon"><i class="fa-brands fa-instagram"></i></div>
                            <div class="">
                                <span class="meta-title">Follow</span>
                                <h2 class="name">Instagram</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="works-wrapper-box">
                <div class="works-wrapper">
                    <div class="work-box">
                        <div class="thumb">
                            <a href="work-details.html">
                                <img src="{{ asset('imgs/works/airq.webp')}}" alt="image">
                            </a>
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
                            <a href="work-details.html">
                                <img src="{{ asset('imgs/works/consultoriomedico.webp')}}" alt="image">
                            </a>
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
                            <a href="work-details.html">
                                <img src="{{ asset('imgs/works/elitepharmacy.webp')}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3 class="title">Elite <br>
                                Pharmacy</h3>
                            <div class="tags">
                                <div class="tag">Web Design</div>
{{--                                <div class="tag">Business</div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="work-box">
                        <div class="thumb">
                            <a href="work-details.html">
                                <img src="{{ asset('imgs/works/sanasana.webp')}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3 class="title">Sana <br>
                                Sana</h3>
                            <div class="tags">
                                <div class="tag">Branding</div>
{{--                                <div class="tag">Business</div>--}}
                            </div>
                        </div>
                    </div>
{{--                    <div class="work-box">--}}
{{--                        <div class="thumb">--}}
{{--                            <a href="work-details.html">--}}
{{--                                <img src="{{ asset('imgs/works/img-s-35.webp')}}" alt="image">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h3 class="title">Colyfate Font <br>--}}
{{--                                Design</h3>--}}
{{--                            <div class="tags">--}}
{{--                                <div class="tag">Branding</div>--}}
{{--                                <div class="tag">Business</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="work-box">--}}
{{--                        <div class="thumb">--}}
{{--                            <a href="work-details.html">--}}
{{--                                <img src="{{ asset('imgs/works/img-s-36.webp')}}" alt="image">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h3 class="title">Watch Mockup <br>--}}
{{--                                Design</h3>--}}
{{--                            <div class="tags">--}}
{{--                                <div class="tag">Branding</div>--}}
{{--                                <div class="tag">Business</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
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

<!-- fun-fact area start  -->
{{--<section class="fun-fact-area section-style section-item">
    <div class="container large">
        <div class="fun-fact-area-inner section-spacing">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h2 class="section-title has_fade_anim">Designing great products
                            is so hard. But we've done
                            more than 150 of them in
                            this year.</h2>
                    </div>
                </div>
            </div>
            <div class="counter-wrapper-box">
                <div class="counter-box overflow-hidden">
                    <img class="shape-1 show-light img_anim_reveal" src="{{ asset('imgs/shape/img-s-47.webp')}}" alt="image">
                    <img class="shape-1 show-dark img_anim_reveal" src="{{ asset('imgs/shape/img-s-47-light.webp')}}"
                         alt="image">
                    <h3 class="number wc-counter has_fade_anim" data-fade-from="left">150</h3>
                </div>
            </div>
        </div>
    </div>
</section>--}}
<!-- fun-fact area end  -->

<!-- process area start  -->
{{--<section class="process-area section-style section-item">--}}
{{--    <div class="container large">--}}
{{--        <div class="process-area-inner section-spacing">--}}
{{--            <div class="shape-1">--}}

{{--                <img class="show-light" src="{{ asset('imgs/shape/img-s-48.webp')}}" alt="image">--}}
{{--                <img class="show-dark" src="{{ asset('imgs/shape/img-s-48-light.webp')}}" alt="image">--}}
{{--            </div>--}}
{{--            <div class="section-header">--}}
{{--                <div class="section-title-wrapper">--}}
{{--                    <div class="title-wrapper">--}}
{{--                        <h2 class="section-title has_fade_anim">Our standard--}}
{{--                            design thinking--}}
{{--                            process</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="process-wrapper-box">--}}
{{--                <div class="process-wrapper">--}}
{{--                    <div class="swiper process-slider">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide has_fade_anim" data-ease="bounce" data-delay="0.15">--}}
{{--                                <div class="process-box">--}}
{{--                                    <span class="number">Step - 01</span>--}}
{{--                                    <div class="icon">--}}
{{--                                        <img class="show-light" src="{{ asset('imgs/icon/icon-s-16-light.webp')}}" alt="process icon">--}}
{{--                                        <img class="show-dark" src="{{ asset('assets/imgs/icon/icon-s-16.webp')}}"  alt="process icon">--}}
{{--                                    </div>--}}
{{--                                    <div class="content">--}}
{{--                                        <h3 class="title">User <br>--}}
{{--                                            Research</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide has_fade_anim" data-ease="bounce" data-delay="0.30">--}}
{{--                                <div class="process-box">--}}
{{--                                    <span class="number">Step - 02</span>--}}
{{--                                    <div class="icon">--}}
{{--                                        <img class="show-light" src="{{ asset('imgs/icon/icon-s-17-light.webp')}}" alt="process icon">--}}
{{--                                        <img class="show-dark" src="{{ asset('imgs/icon/icon-s-17.webp')}}" alt="process icon">--}}
{{--                                    </div>--}}
{{--                                    <div class="content">--}}
{{--                                        <h3 class="title">Define <br>--}}
{{--                                            Problems</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide has_fade_anim" data-ease="bounce" data-delay="0.45">--}}
{{--                                <div class="process-box">--}}
{{--                                    <span class="number">Step - 03</span>--}}
{{--                                    <div class="icon">--}}
{{--                                        <img class="show-light" src="{{ asset('imgs/icon/icon-s-18-light.webp')}}" alt="process icon">--}}
{{--                                        <img class="show-dark" src="{{ asset('imgs/icon/icon-s-18.webp')}}" alt="process icon">--}}
{{--                                    </div>--}}
{{--                                    <div class="content">--}}
{{--                                        <h3 class="title">Design and <br>--}}
{{--                                            Prototype </h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide has_fade_anim" data-ease="bounce" data-delay="0.60">--}}
{{--                                <div class="process-box">--}}
{{--                                    <span class="number">Step - 04</span>--}}
{{--                                    <div class="icon">--}}
{{--                                        <img class="show-light" src="{{ asset('imgs/icon/icon-s-19-light.webp')}}" alt="process icon">--}}
{{--                                        <img class="show-dark" src="{{ asset('imgs/icon/icon-s-19.webp')}}" alt="process icon">--}}
{{--                                    </div>--}}
{{--                                    <div class="content">--}}
{{--                                        <h3 class="title">Evaluation & <br>--}}
{{--                                            Testing</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            --}}{{--<div class="swiper-slide has_fade_anim" data-ease="bounce" data-delay="0.75">--}}
{{--                                <div class="process-box">--}}
{{--                                    <span class="number">Step - 05</span>--}}
{{--                                    <div class="icon">--}}
{{--                                        <img class="show-light" src="assets/imgs/icon/icon-s-17-light.webp" alt="process icon">--}}
{{--                                        <img class="show-dark" src="assets/imgs/icon/icon-s-17.webp" alt="process icon">--}}
{{--                                    </div>--}}
{{--                                    <div class="content">--}}
{{--                                        <h3 class="title">Define <br>--}}
{{--                                            Problems</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide has_fade_anim" data-ease="bounce" data-delay="0.90">--}}
{{--                                <div class="process-box">--}}
{{--                                    <span class="number">Step - 06</span>--}}
{{--                                    <div class="icon">--}}
{{--                                        <img class="show-light" src="assets/imgs/icon/icon-s-18-light.webp" alt="process icon">--}}
{{--                                        <img class="show-dark" src="assets/imgs/icon/icon-s-18.webp" alt="process icon">--}}
{{--                                    </div>--}}
{{--                                    <div class="content">--}}
{{--                                        <h3 class="title">Design and <br>--}}
{{--                                            Prototype </h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- process area end  -->

<div class="image-wrapper section-style pb-0 overflow-hidden">
{{--    <img class="w-100" src="{{ asset('imgs/gallery/img-s-34.webp')}}" data-speed=".8" alt="image">--}}
    <video class="w-100" src="{{ asset('imgs/software.mp4')}}" autoplay loop muted></video>
</div>

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
                        <img src="{{ asset('imgs/icon/star.webp')}}" alt="icon">
                        <img src="{{ asset('imgs/icon/star.webp')}}" alt="icon">
                        <img src="{{ asset('imgs/icon/star.webp')}}" alt="icon">
                        <img src="{{ asset('imgs/icon/star.webp')}}" alt="icon">
                        <img src="{{ asset('imgs/icon/star.webp')}}" alt="icon">
                    </div>
                    <p class="reviews">(5+ reviews)</p>
                    <p class="text">Helping world-class
                        company by creative
                        design.</p>
                </div>
                <div class="testimonial-wrapper">
                    <div class="swiper testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="content">
                                        <div class="content-top">
                                            <div class="icon">
                                                <img class="quote-icon" src="{{ asset('imgs/icon/quote-6.webp')}}" alt="Quote Icon">
                                            </div>
                                            <div class="text-wrapper">
                                                <p class="text">As a startup that moves quickly and often, they have been able to roll
                                                    with the <span>punches</span> at a high standard. Whether for our
                                                    <span>marketing</span> or product design needs
                                                </p>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <div class="meta">
                                                <h3 class="name">Jaiser Martinez</h3>
                                                <span class="post">Designer, Air Q Contractors</span>
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
                                                <p class="text">The team delivers <span>high-quality</span> and thoughtful work.
                                                    They've
                                                    been a <span>great
                                      partner</span> through out the process. They simply go the extra mile!</p>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <div class="meta">
                                                <h3 class="name">Yosvany Diaz</h3>
                                                <span class="post">CEO, Consultorio Medico Bellaire</span>
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
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div class="testimonial-button-next nav-icon">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end  -->
</div>
<!-- team area start  -->
{{--<section class="team-area section-style section-item">--}}
{{--    <div class="container large">--}}
{{--        <div class="team-area-inner section-spacing">--}}
{{--            <div class="section-header">--}}
{{--                <div class="section-title-wrapper">--}}
{{--                    <div class="title-wrapper">--}}
{{--                        <h2 class="section-title has_fade_anim">The talented team--}}
{{--                            behind the creative--}}
{{--                            design</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="text-wrapper">--}}
{{--                    <p class="text has_fade_anim">Our dedication and commitment to excellence ensure that your business--}}
{{--                        thrives in the--}}
{{--                        ever-evolving digital realm.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="team-wrapper-box">--}}
{{--                <div class="team-wrapper">--}}
{{--                    <div class="team-box">--}}
{{--                        <div class="thumb">--}}
{{--                            <a href="team-details.html"><img src="assets/imgs/team/img-s-15.webp" alt="team image"></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <div class="top">--}}
{{--                                <h3 class="name"><a href="team-details.html">Kamal Abraham</a></h3>--}}
{{--                                <p class="post">CEO, Alaska</p>--}}
{{--                            </div>--}}
{{--                            <div class="wc-btn-group">--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-linkedin-in"></i>--}}
{{--                                </a>--}}
{{--                                <a class="wc-btn wc-btn-primary" href="#">LinkedIn</a>--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-linkedin-in"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="team-box">--}}
{{--                        <div class="thumb">--}}
{{--                            <a href="team-details.html"><img src="assets/imgs/team/img-s-16.webp" alt="team image"></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <div class="top">--}}
{{--                                <h3 class="name"><a href="team-details.html">Selina Gomaze</a></h3>--}}
{{--                                <p class="post">Jr. Executive</p>--}}
{{--                            </div>--}}
{{--                            <div class="wc-btn-group">--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-twitter"></i>--}}
{{--                                </a>--}}
{{--                                <a class="wc-btn wc-btn-primary" href="#">Twitter</a>--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-twitter"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="team-box">--}}
{{--                        <div class="thumb">--}}
{{--                            <a href="team-details.html"><img src="assets/imgs/team/img-s-17.webp" alt="team image"></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <div class="top">--}}
{{--                                <h3 class="name"><a href="team-details.html">Pedrik Vadra</a></h3>--}}
{{--                                <p class="post">Logo Designer</p>--}}
{{--                            </div>--}}
{{--                            <div class="wc-btn-group">--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-linkedin-in"></i>--}}
{{--                                </a>--}}
{{--                                <a class="wc-btn wc-btn-primary" href="#">LinkedIn</a>--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-linkedin-in"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="team-box">--}}
{{--                        <div class="thumb">--}}
{{--                            <a href="team-details.html"><img src="assets/imgs/team/img-s-18.webp" alt="team image"></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <div class="top">--}}
{{--                                <h3 class="name"><a href="team-details.html">Thomas Ribbon</a></h3>--}}
{{--                                <p class="post">Sr. Designer</p>--}}
{{--                            </div>--}}
{{--                            <div class="wc-btn-group">--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-twitter"></i>--}}
{{--                                </a>--}}
{{--                                <a class="wc-btn wc-btn-primary" href="#">Twitter</a>--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-twitter"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="team-box">--}}
{{--                        <div class="thumb">--}}
{{--                            <a href="team-details.html"><img src="assets/imgs/team/img-s-19.webp" alt="team image"></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <div class="top">--}}
{{--                                <h3 class="name"><a href="team-details.html">Jonathon Deo</a></h3>--}}
{{--                                <p class="post">Designer</p>--}}
{{--                            </div>--}}
{{--                            <div class="wc-btn-group">--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-linkedin-in"></i>--}}
{{--                                </a>--}}
{{--                                <a class="wc-btn wc-btn-primary" href="#">LinkedIn</a>--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-linkedin-in"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="team-box">--}}
{{--                        <div class="thumb">--}}
{{--                            <a href="team-details.html"><img src="assets/imgs/team/img-s-20.webp" alt="team image"></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <div class="top">--}}
{{--                                <h3 class="name"><a href="team-details.html">Angel D. Mariya</a></h3>--}}
{{--                                <p class="post">Jr. Designer</p>--}}
{{--                            </div>--}}
{{--                            <div class="wc-btn-group">--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-twitter"></i>--}}
{{--                                </a>--}}
{{--                                <a class="wc-btn wc-btn-primary" href="#">Twitter</a>--}}
{{--                                <a class="wc-btn wc-btn-circle" href="#">--}}
{{--                                    <i class="fa-brands fa-twitter"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- team area end  -->

<!-- blog area start  -->
{{--<section class="blog-area section-style section-item">
    <div class="container large">
        <div class="blog-area-inner section-spacing">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h2 class="section-title has_fade_anim">Journal from
                            arolax</h2>
                    </div>
                </div>
                <div class="btn-wrapper has_fade_anim" data-fade-from="right">
                    <div class="wc-btn-group">
                        <a class="wc-btn wc-btn-circle" href="blog.html">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a class="wc-btn wc-btn-primary" href="blog.html">read all posts</a>
                        <a class="wc-btn wc-btn-circle" href="blog.html">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="blogs-wrapper-box">
                <div class="blogs-wrapper">
                    <article class="blog has_fade_anim" data-fade-from="right" data-delay="0.15">
                        <div class="thumb">
                            <a href="blog-details.html">
                                <img src="assets/imgs/blog/img-s-8.webp" alt="blog image">
                            </a>
                        </div>
                        <div class="content">
                            <h2 class="title"><a href="blog-details.html">A simple guide to retrieval auto generated read
                                    content models</a></h2>
                            <div class="meta-list">
                                <a href="#"><span class="meta tag">Branding</span></a>
                                <span class="meta date">14 Jan 2024</span>
                            </div>
                        </div>
                    </article>
                    <article class="blog has_fade_anim" data-fade-from="right" data-delay="0.30">
                        <div class="thumb">
                            <a href="blog-details.html">
                                <img src="assets/imgs/blog/img-s-9.webp" alt="blog image">
                            </a>
                        </div>
                        <div class="content">
                            <h2 class="title"><a href="blog-details.html">The complex but awesome CSS border-image property
                                    for web design</a></h2>
                            <div class="meta-list">
                                <a href="#"><span class="meta tag">Branding</span></a>
                                <span class="meta date">14 Jan 2024</span>
                            </div>
                        </div>
                    </article>
                    <article class="blog has_fade_anim" data-fade-from="left" data-delay="0.45">
                        <div class="thumb">
                            <a href="blog-details.html">
                                <img src="assets/imgs/blog/img-s-10.webp" alt="blog image">
                            </a>
                        </div>
                        <div class="content">
                            <h2 class="title"><a href="blog-details.html">Refining your mobile on boarding experience using
                                    visual analytics</a></h2>
                            <div class="meta-list">
                                <a href="#"><span class="meta tag">Branding</span></a>
                                <span class="meta date">14 Jan 2024</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>--}}
<!-- blog area end  -->

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
