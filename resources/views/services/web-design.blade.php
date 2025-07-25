@extends('layouts.app')
@section('title', 'Professional Web Design Services | Encodyn')
@section('description', 'Create a stunning website that converts visitors into customers. Our responsive web design
services deliver user-focused, visually compelling digital experiences.')
@section('keywords','web design, UI/UX design, responsive design, frontend development, e-commerce design, website optimization')
@section('meta_tags')
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Professional Web Design Services | Encodyn">
    <meta property="og:description" content="Transform your digital presence with visually stunning, strategically crafted websites that engage visitors and drive measurable business results.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ img_optimized('imgs/services/web-design-services.webp') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Professional Web Design Services | Encodyn">
    <meta name="twitter:description" content="Transform your digital presence with visually stunning, strategically crafted websites that engage visitors and drive measurable business results.">
    <meta name="twitter:image" content="{{ img_optimized('imgs/services/web-design-services.webp') }}">

    <!-- WhatsApp -->
    <meta property="og:site_name" content="Encodyn">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

@endsection

@push('vite_assets')
    @vite([
        'resources/scss/master-common.scss',
        'resources/scss/master-service-details.scss',
        'resources/js/app.js'
    ])
@endpush
@section('content')
<!-- service details area start  -->
<section class="service-details-area">
    <div class="container">
        <div class="thumb-main">
            <img src="{{ img_optimized('imgs/services/web-design-services.webp')}}" class="has_fade_anim" data-delay="0.30"
                 data-fade-offset="0"
                 alt="Professional web design services showcasing responsive website layouts on multiple devices">
            @include('components.social-media')
        </div>
        <div class="section-title-box">
            <div class="section-title-wrapper">
                <div class="title-wrapper">
                    <h1 class="section-title has_fade_anim" data-on-scroll="0">Web <br>
                        design</h1>
                </div>
            </div>
            <div class="feature-list has_fade_anim" data-on-scroll="0" data-delay="0.45">
                <ul>
                    <li>UI/UX Design</li>
                    <li>Responsive Layouts</li>
                    <li>Brand Integration</li>
                </ul>
                <ul>
                    <li>Frontend Development</li>
                    <li>E-commerce Design</li>
                    <li>Website Optimization</li>
                </ul>
            </div>
        </div>
        <div class="text-wrapper has_fade_anim">
            <p class="text">At Encodyn, we create stunning, user-focused web designs that captivate your audience and drive results.
                Our team of skilled designers blends aesthetic excellence with strategic functionality,
                crafting websites that not only look impressive but also convert visitors into customers.
                We believe that exceptional web design serves as the foundation of your digital presence and directly
                impacts your business success.
            </p>
            <p class="text">From responsive layouts and intuitive user experiences to seamless brand integration and e-commerce solutions,
                we handle every aspect of web design to ensure your site stands out in today's competitive digital landscape.
                Our collaborative approach ensures that we understand your brand identity and business goals to deliver
                a website that truly represents your vision.</p>
        </div>
    </div>
    <div class="steps-wrapper-box has_fade_anim">
        <div class="container">
            <div class="working-steps-box">
                <div class="working-steps">
                    <div class="working-step">
                        <h2 class="title">Discovery &<br>
                            Strategy</h2>
                        <p class="text">We begin by understanding your business objectives, target audience, and brand identity to develop a strategic direction for your website design that aligns with your goals.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Wireframing &<br>
                            Prototyping</h2>
                        <p class="text">Our designers create detailed wireframes and interactive prototypes that map out user flows and interface elements to ensure intuitive navigation and optimal user experience.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Visual Design &<br>
                            Development</h2>
                        <p class="text">We craft visually compelling designs with attention to color theory, typography, and imagery, then develop responsive, cross-browser compatible code that brings your design to life.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Testing &<br>
                            Optimization</h2>
                        <p class="text">We rigorously test your website across devices and browsers, optimizing for performance, accessibility, and search engines to ensure a flawless user experience and maximum visibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service details area end  -->

<!-- features area start  -->
<div class="features-area">
    <div class="container">
        <div class="features-area-inner section-spacing-top">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h2 class="section-title has_fade_anim"> We transform your digital presence into a compelling
                            visual story that engages visitors and drives conversions.</h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="shape has_fade_anim">
                    <img class="show-light" src="{{ img_optimized('imgs/shape/img-s-84.webp')}}"
                         alt="Decorative design element enhancing the web design services section">
                </div>
                <div class="content-last">
                    <div class="thumb has_fade_anim">
                        <img class="main-image" src="{{ img_optimized('imgs/services/web-design-digital-presence.webp')}}"
                             alt="Digital presence transformation through strategic web design showing website mockups and UI elements">
                    </div>
                    <div class="text-wrapper has_fade_anim">
                        <p class="text">Our design team creates visually stunning, strategically crafted websites that
                            reflect your brand identity while providing an exceptional user experience.
                            By balancing aesthetic appeal with functional design, we ensure your website not only
                            attracts visitors but also guides them toward conversion points with intuitive navigation and
                            clear calls to action.</p>
                        <p class="text">We take a data-driven approach to web design, incorporating analytics,
                            user testing, and industry best practices to create websites that perform.
                            From responsive layouts that adapt perfectly to any device to optimized page load speeds and
                            accessibility compliance, every aspect of our design process is focused on maximizing your website's
                            effectiveness and return on investment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- features area end  -->



<!-- faq area start  -->
<section class="faq-area">
    <div class="container">
        <div class="faq-area-inner section-spacing-top">
            <div class="section-content">
                <div class="thumb">
                    <img src="{{ img_optimized('imgs/services/web-design-layers.webp')}}" class="has_fade_anim" data-fade-from="left"
                         alt="Web design process layers illustrating UI/UX principles and development stages">
                </div>
                <div class="content-last has_fade_anim">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title">Designs crafted for digital success</h2>
                        </div>
                    </div>
                    <div class="accordion-wrapper">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">UI/UX Design</button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Our user interface and experience design focuses on creating intuitive, engaging digital experiences that balance aesthetic appeal with functional usability. We conduct user research, develop information architecture, and design interaction patterns that guide visitors effortlessly through your website while delivering an enjoyable, memorable experience.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">Responsive Web Design</button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We create websites that provide optimal viewing and interaction experiences across all devices, from desktops to smartphones. Our responsive designs automatically adjust layout, content, and functionality based on screen size, ensuring your website looks and performs perfectly regardless of how users access it.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">E-commerce Design</button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We design online stores that convert browsers into buyers with strategic product displays, streamlined checkout processes, and trust-building elements. Our e-commerce designs focus on showcasing your products effectively while providing intuitive navigation and search functionality to help customers find exactly what they're looking for.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                                            aria-controls="flush-collapseFour">Website Redesign</button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We transform outdated websites into modern, high-performing digital assets that reflect your current brand identity and business objectives. Our redesign process preserves what works while improving visual appeal, functionality, and technical performance to deliver a website that meets today's standards and user expectations.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                                            aria-controls="flush-collapseFive">Performance Optimization</button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We design with performance in mind, optimizing images, code, and server responses to create websites that load quickly and run smoothly. Our performance-focused approach ensures your site provides a frustration-free experience while also improving search engine rankings through better core web vitals and technical performance metrics.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq area end  -->

@include('components.contact')

@include('components.clients')

@endsection
