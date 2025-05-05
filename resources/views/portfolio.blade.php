@extends('layouts.app')
@section('title', 'Encodyn | Portfolio of Custom Software & Web Design Projects')
@section('description', 'Explore Encodyn\'s portfolio of custom software development, responsive websites,
and brand design projects that have driven measurable results for forward-thinking businesses.')
@section('keywords','custom software portfolio, web design projects, responsive website examples,
branding case studies, business growth case studies, development portfolio, digital transformation examples, software engineering work, website designs, encodyn projects')
@section('meta_tags')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Encodyn | Portfolio of Custom Software & Web Design Projects">
    <meta property="og:description" content="Explore Encodyn's portfolio of custom software development, responsive websites, and brand design projects that have driven measurable results for forward-thinking businesses.">
    <meta property="og:image" content="{{ asset('imgs/encodyn-social-media.webp') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Encodyn | Portfolio of Custom Software & Web Design Projects">
    <meta property="twitter:description" content="Explore Encodyn's portfolio of custom software development, responsive websites, and brand design projects that have driven measurable results for forward-thinking businesses.">
    <meta property="twitter:image" content="{{ asset('imgs/encodyn-social-media.webp') }}">

    <!-- WhatsApp / SMS Preview -->
    <meta property="og:site_name" content="Encodyn">
    <meta property="og:locale" content="en_US">
@endsection
@push('vite_assets')
    @vite([
        'resources/scss/master-common.scss',
        'resources/scss/master-works.scss',
        'resources/js/app.js'
    ])
@endpush
@section('content')
    <!-- work area start  -->
    <section class="work-area">
        <div class="container">
            <div class="work-area-inner section-spacing-bottom">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title large has_text_move_anim">Our Portfolio</h1>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text has_fade_anim"> Discover our collection of custom software solutions, responsive websites,
                            and brand designs that solve real business problems and drive measurable growth for our clients.</p>
                    </div>
                    <div class="icon has_fade_anim">
                        <img class="show-light" src="{{ asset('imgs/shape/img-s-82.webp')}}" alt="Decorative portfolio section divider">
                    </div>
                </div>
                <div class="works-wrapper-box">
                    <div class="works-wrapper">
                        <div class="has_fade_anim">
                            <a href="#">
                                <div class="work-box">
                                    <div class="thumb">
                                        <img src="{{ asset('imgs/works/mycarwheel.webp')}}"
                                             alt="My Car Wheel responsive website design showcasing retail services">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">My Car Wheel</h3>
                                        <div class="meta">
                                            <span class="tag">ReDesign</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="has_fade_anim">
                            <a href="#">
                                <div class="work-box">
                                    <div class="thumb">
                                        <img src="{{ asset('imgs/works/los-vecinos-bakery.webp')}}"
                                             alt="My Car Wheel responsive website design showcasing retail services">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Los Vecinos Bakery</h3>
                                        <div class="meta">
                                            <span class="tag">Web Design</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="has_fade_anim">
                            <a href="#">
                                <div class="work-box">
                                    <div class="thumb">
                                        <img src="{{ asset('imgs/works/airq.webp')}}"
                                             alt="Air Q Contractors website design and Stripe integration project by Encodyn">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Air Q Contractors</h3>
                                        <div class="meta">
                                            <span class="tag">Web Development | Payment Integration</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="has_fade_anim">
                            <a href="#">
                                <div class="work-box">
                                    <div class="thumb">
                                        <img src="{{ asset('imgs/works/consultoriomedico.webp')}}"
                                             alt="Consultorio Medico Bellaire healthcare website with appointment scheduling integration">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Medical Clinic Bellaire</h3>
                                        <div class="meta">
                                            <span class="tag">Web Design | Appointment and Forms Integration</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="has_fade_anim">
                            <a class="large" href="#">
                                <div class="work-box">
                                    <div class="thumb">
                                        <img src="{{ asset('imgs/works/elitepharmacy.webp')}}"
                                             alt="Elite Pharmacy responsive website design showcasing healthcare services">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Elite Pharmacy</h3>
                                        <div class="meta">
                                            <span class="tag">Web Design | Google Analytics</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="has_fade_anim">
                            <a href="#">
                                <div class="work-box">
                                    <div class="thumb">
                                        <img src="{{ asset('imgs/works/sanasana.webp')}}"
                                             alt="Sana Sana brand identity design project by Encodyn">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Sana Sana</h3>
                                        <div class="meta">
                                            <span class="tag">Branding | Logo</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work area end  -->
@endsection
