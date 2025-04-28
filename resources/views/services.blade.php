@extends('layouts.app')
@section('title', 'Professional Digital Services | Encodyn Solutions')
@section('description', 'Explore our specialized software development, web design, SEO and branding services.
Custom digital solutions for businesses seeking measurable growth and ROI.')

@section('meta_tags')
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Professional Digital Services | Encodyn">
    <meta property="og:description" content="Transform your business with Encodyn's custom digital solutions - from software development and web design to SEO and brand identity.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('imgs/og-services.webp') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Professional Digital Services | Encodyn">
    <meta name="twitter:description" content="Transform your business with Encodyn's custom digital solutions - from software development and web design to SEO and brand identity.">
    <meta name="twitter:image" content="{{ asset('imgs/og-services.webp') }}">

    <!-- WhatsApp -->
    <meta property="og:site_name" content="Encodyn">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

@endsection

@push('vite_assets')
    @vite([
        'resources/scss/master-common.scss',
        'resources/scss/master-services.scss',
        'resources/js/app.js'
    ])
@endpush

@section('content')
    <!-- hero area start  -->
    <section class="hero-area">
        <div class="container">
            <div class="hero-area-inner">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title large has_text_move_anim">We build transformative solutions.</h1>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text has_fade_anim">We combine technical expertise and creative design to deliver
                            digital solutions that drive business growth and user satisfaction.</p>
                    </div>
                    <div class="icon has_fade_anim" data-on-scroll="0">
                        <img class="show-light" src="{{ asset('imgs/shape/img-s-82.webp')}}" alt="image">
                    </div>
                </div>
                <div class="thumb">
                    <img src="{{ asset('imgs/services/services.webp')}}" class="has_fade_anim" data-fade-offset="0"
                         data-delay="0.45" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end  -->

    <!-- service area start  -->
    <section class="service-area section-spacing">
        <div class="container">
            <div class="service-top-wrapper">
                <div class="section-heading">
                    <h2 class="section-title has_text_move_anim">Our specialized <br>
                        services</h2>
                </div>
                <div class="content">
                    <p class="text has_fade_anim">We deliver tailored solutions for forward-thinking businesses
                        that want to leverage technology to solve problems, create value, and drive sustainable growth.</p>
                </div>
            </div>
            <div class="services-wrapper-box">
                <div class="services-grid">

                    <!-- Service Item 1 -->
                    <div class="service-item has_fade_anim" data-delay="0.15">
                        <div class="icon">
                            <img src="{{ asset('imgs/services/software-development-api-black-icon.svg')}}"
                                 alt="Software development icon depicting custom software solutions">
                        </div>
                        <h2 class="title">Software <br> Development</h2>
                        <ul class="service-features">
                            <li>Custom CRM Solutions</li>
                            <li>API Development</li>
                            <li>Database Management</li>
                            <li>Cloud Integration</li>
                            <li>Mobile Applications</li>
                            <li>Full-Stack Development</li>
                            <li>Maintenance & Support</li>
                        </ul>
                    </div>

                    <!-- Service Item 2 -->
                    <div class="service-item has_fade_anim" data-delay="0.30">
                        <div class="icon">
                            <img src="{{ asset('imgs/services/web-design-black-icon.svg')}}"
                                 alt="Web design icon representing modern website creation">
                        </div>
                        <h2 class="title">Web <br> Design</h2>
                        <ul class="service-features">
                            <li>Responsive Websites</li>
                            <li>User Experience (UX)</li>
                            <li>User Interface (UI)</li>
                            <li>Wireframing</li>
                            <li>Prototyping</li>
                            <li>WordPress Development</li>
                            <li>E-commerce Solutions</li>
                        </ul>
                    </div>

                    <!-- Service Item 3 -->
                    <div class="service-item has_fade_anim" data-delay="0.45">
                        <div class="icon">
                            <img src="{{ asset('imgs/services/seo-optimization-black-icon.svg')}}"
                                 alt="SEO optimization icon illustrating search engine ranking improvement">
                        </div>
                        <h2 class="title">SEO <br> Optimization</h2>
                        <ul class="service-features">
                            <li>Technical SEO</li>
                            <li>On-Page Optimization</li>
                            <li>Content Strategy</li>
                            <li>Keyword Research</li>
                            <li>Local SEO</li>
                            <li>Analytics & Reporting</li>
                            <li>Conversion Optimization</li>
                        </ul>
                    </div>

                    <!-- Service Item 4 -->
                    <div class="service-item has_fade_anim" data-delay="0.60">
                        <div class="icon">
                            <img src="{{ asset('imgs/services/branding-black-icon.svg')}}"
                                 alt="Design icon showing brand identity creation">
                        </div>
                        <h2 class="title">Brand <br> Design</h2>
                        <ul class="service-features">
                            <li>Visual Identity</li>
                            <li>Logo Design</li>
                            <li>Brand Guidelines</li>
                            <li>Typography</li>
                            <li>Color Systems</li>
                            <li>Marketing Materials</li>
                            <li>Digital Assets</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end  -->

    <!-- about area start  -->
    <section class="about-area container-hd">
        <div class="about-area-inner">
            <div class="thumb">
                <img src="{{ asset('imgs/services/services-bg.webp')}}" alt="gallery image">
            </div>
            <div class="section-content">
                <div class="bg">
                    <img src="{{ asset('imgs/services/pro-level-agency.webp')}}" alt="image">
                </div>
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h2 class="section-title has_text_move_anim">We're strategic
                            and results-
                            driven</h2>
                    </div>
                </div>
                <div class="text-wrapper">
                    <p class="text has_fade_anim">Through our proven development methodology, we create
                        <span>powerful solutions</span>
                        that solve real business challenges and deliver measurable ROI</p>
                </div>
                <div class="btn-wrapper has_fade_anim" data-ease="bounce">
                    <a href="{{ route('contact') }}" class="wc-btn wc-btn-primary btn-text-flip"> <span data-text="Get Started">Get Started</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end  -->

    <!-- pricing area start  -->
    <section class="pricing-area">
        <div class="container">
            <div class="pricing-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_text_move_anim">Flexible packages designed
                                for your business needs</h2>
                        </div>
                    </div>
                </div>
                <div class="pricing-wrapper-box">
                    <div class="pricing-wrapper">
                        <!-- Pricing Box 1 -->
                        <div class="pricing-box has_fade_anim" data-delay="0.15">
                            <span class="tag">Starter</span>
                            <h3 class="price">$6,500</h3>
                            <div class="feature-list pb-4">
                                <ul>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Single service focus
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Standard implementation
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Basic optimizations
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        3 months support
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Standard reporting
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Email support
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('contact') }}" class="wc-btn wc-btn-primary btn-text-flip bordered"> <span
                                    data-text="Get Started">Get Started</span></a>
                        </div>

                        <!-- Pricing Box 2 -->
                        <div class="pricing-box has_fade_anim" data-delay="0.30">
                            <span class="tag">Growth</span>
                            <h3 class="price">Custom</h3>
                            <div class="feature-list pb-4">
                                <ul>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Multiple service integration
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Advanced implementation
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Performance optimization
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        6 months priority support
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Detailed analytics
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Phone & email support
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('contact') }}" class="wc-btn wc-btn-primary btn-text-flip bordered"> <span
                                    data-text="Get Started">Get Started</span></a>
                        </div>

                        <!-- Pricing Box 3 -->
                        <div class="pricing-box has_fade_anim" data-delay="0.45">
                            <span class="tag">Enterprise</span>
                            <h3 class="price">Custom</h3>
                            <div class="feature-list pb-4">
                                <ul>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Full-service solution
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Custom implementation
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Enterprise-grade security
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        12 months dedicated support
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Executive reporting
                                    </li>
                                    <li>
                                        <img class="show-light" src="{{ asset('imgs/icon/check-2.webp')}}" alt="icon image">
                                        Dedicated account manager
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('contact') }}" class="wc-btn wc-btn-primary btn-text-flip bordered"> <span
                                    data-text="Contact Us">Contact Us</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing area end  -->

    @include('components.contact')

    @include('components.clients')

@endsection
