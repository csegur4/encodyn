@extends('layouts.app')
@section('title', 'Contact Us')
@push('vite_assets')
    @vite([
        'resources/scss/master-common.scss',
        'resources/scss/master-about.scss',
        'resources/js/app.js'
    ])
@endpush
@section('content')
    <!-- hero area start  -->
    <section class="hero-area">
        <div class="container large">
            <div class="hero-area-inner">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title large has_fade_anim">We are ”Arolax” - product and
                                branding and creative agency
                                based in California</h1>
                        </div>
                    </div>
                    <div class="content-last">
                        <div class="subtitle-wrapper has_fade_anim" data-fade-from="right">
                            <span class="section-subtitle has-right-line">01. about us</span>
                        </div>
                        <div class="text-wrapper">
                            <p class="text has_fade_anim" data-fade-from="left">Unlocking creative horizons: the story behind
                                “Arolax” a global digital agency
                                crafting experiences, building dreams, and shaping success.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- hero area end  -->

    <!-- counter area start  -->
    <div class="counter-area">
        <div class="counter-area-inner">
            <div class="thumb">
                <img src="assets/imgs/gallery/img-s-27.webp" alt="image">
            </div>
            <div class="counter-wrapper-box">
                <div class="counter-wrapper">
                    <div class="thumb overflow-hidden">
                        <img src="assets/imgs/gallery/img-s-28.webp" data-speed="0.9" alt="image">
                    </div>
                    <div class="counter-box">
                        <h2 class="text has_fade_anim">We have 100+ <br>
                            satisfied clients</h2>
                        <h2 class="number wc-counter has_fade_anim">100+</h2>
                    </div>
                    <div class="counter-box dark">
                        <h2 class="text has_fade_anim">We helped to get <br>
                            companies with $25M+ <br>
                            funding</h2>
                        <h2 class="number wc-counter has_fade_anim">25M+</h2>
                    </div>
                    <div class="thumb overflow-hidden">
                        <img src="assets/imgs/gallery/img-s-29.webp" data-speed="0.9" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end  -->

    <!-- awards area start  -->
    <section class="awards-area">
        <div class="container">
            <div class="awards-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle has-left-line">02. Who we are</span>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title has_fade_anim">We make storable strategy growth your company with arolax
                                agency!</h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="text-wrapper">
                        <p class="text has_fade_anim" data-fade-from="left">We deploy world-class creative design, team on
                            demand. that can design surest
                            measure's of success is when a client partner with more than once
                            build, ship scale your vision most efficient.
                        </p>
                    </div>
                    <div class="awards-list has_fade_anim">
                        <ul>
                            <li>
                                <div class="meta">
                                    <div class="icon">
                                        <img class="show-light" src="assets/imgs/icon/icon-s-40.webp" alt="icon">
                                        <img class="show-dark" src="assets/imgs/icon/icon-s-40-light.webp" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h3 class="number wc-counter">50+</h3>
                                        <p class="text">projects success
                                            rate 99% </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="meta">
                                    <div class="icon">
                                        <img class="show-light" src="assets/imgs/icon/icon-s-41.webp" alt="icon">
                                        <img class="show-dark" src="assets/imgs/icon/icon-s-41-light.webp" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h3 class="number wc-counter">12+</h3>
                                        <p class="text">award for digital
                                            innovation</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="about-thumbs">
                    <div class="thumb-first">
                        <img src="assets/imgs/gallery/img-s-3.webp" class="has_fade_anim" data-fade-from="right"
                             alt="image">
                    </div>
                    <div class="thumb-second">
                        <img src="assets/imgs/gallery/img-s-4.webp" class="has_fade_anim" data-fade-from="left" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awards area end  -->

    <!-- about area start  -->
    <section class="about-area container-hd">
        <div class="about-area-inner">
            <div class="thumb">
                <img src="assets/imgs/gallery/img-s-30.webp" alt="gallery image">
            </div>
            <div class="section-content">
                <div class="bg">
                    <img src="assets/imgs/gallery/img-s-31.webp" alt="image">
                </div>
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h2 class="section-title has_fade_anim">We’re simple
                            but pro-level
                            agency</h2>
                    </div>
                </div>
                <div class="text-wrapper">
                    <p class="text has_fade_anim" data-fade-from="left">Theme Builder, you have complete control over the
                        <span>static elements</span> of your
                        website
                    </p>
                </div>
                <div class="btn-wrapper has_fade_anim" data-ease="bounce">
                    <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span data-text="Learn More">Learn
                      More</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end  -->

    <!-- testimonial area start  -->
    <div class="testimonial-area has_fade_anim">
        <div class="container">
            <div class="testimonial-area-inner section-spacing">
                <div class="testimonial-wrapper-box">
                    <div class="testimonial-wrapper">
                        <div class="swiper testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="content">
                                            <div class="icon">
                                                <img class="quote-icon show-light" src="assets/imgs/icon/quote-5.webp" alt="Quote Icon">
                                                <img class="quote-icon show-dark" src="assets/imgs/icon/quote-5-light.webp"
                                                     alt="Quote Icon">
                                            </div>
                                            <div class="text-wrapper">
                                                <p class="text">When we talk about Alts, we do not mean a typical business partner, but
                                                    rather a team that collaborates with us daily, always there for us when we encounter
                                                    difficulties and celebrate achievements. We see in Alts our best ally for success!</p>
                                            </div>
                                            <div class="author">
                                                <div class="meta">
                                                    <span class="name">Mike David, </span>
                                                    <span class="post">Developer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="content">
                                            <div class="icon">
                                                <img class="quote-icon show-light" src="assets/imgs/icon/quote-5.webp" alt="Quote Icon">
                                                <img class="quote-icon show-dark" src="assets/imgs/icon/quote-5-light.webp"
                                                     alt="Quote Icon">
                                            </div>
                                            <div class="text-wrapper">
                                                <p class="text">When we talk about Alts, we do not mean a typical business partner, but
                                                    rather a team that collaborates with us daily, always there for us when we encounter
                                                    difficulties and celebrate achievements. We see in Alts our best ally for success!</p>
                                            </div>
                                            <div class="author">
                                                <div class="meta">
                                                    <span class="name">Mike David, </span>
                                                    <span class="post">Developer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="content">
                                            <div class="icon">
                                                <img class="quote-icon show-light" src="assets/imgs/icon/quote-5.webp" alt="Quote Icon">
                                                <img class="quote-icon show-dark" src="assets/imgs/icon/quote-5-light.webp"
                                                     alt="Quote Icon">
                                            </div>
                                            <div class="text-wrapper">
                                                <p class="text">When we talk about Alts, we do not mean a typical business partner, but
                                                    rather a team that collaborates with us daily, always there for us when we encounter
                                                    difficulties and celebrate achievements. We see in Alts our best ally for success!</p>
                                            </div>
                                            <div class="author">
                                                <div class="meta">
                                                    <span class="name">Mike David, </span>
                                                    <span class="post">Developer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="content">
                                            <div class="icon">
                                                <img class="quote-icon show-light" src="assets/imgs/icon/quote-5.webp" alt="Quote Icon">
                                                <img class="quote-icon show-dark" src="assets/imgs/icon/quote-5-light.webp"
                                                     alt="Quote Icon">
                                            </div>
                                            <div class="text-wrapper">
                                                <p class="text">When we talk about Alts, we do not mean a typical business partner, but
                                                    rather a team that collaborates with us daily, always there for us when we encounter
                                                    difficulties and celebrate achievements. We see in Alts our best ally for success!</p>
                                            </div>
                                            <div class="author">
                                                <div class="meta">
                                                    <span class="name">Mike David, </span>
                                                    <span class="post">Developer</span>
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
                            <img class="show-light" src="assets/imgs/icon/angle-left.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/angle-left-light.webp" alt="icon">
                        </div>
                        <div class="testimonial-button-next nav-icon">
                            <img class="show-light" src="assets/imgs/icon/angle-right.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/angle-right-light.webp" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end  -->

    <!-- faq area start  -->
    <section class="faq-area">
        <div class="container">
            <div class="faq-area-inner section-spacing-bottom">
                <div class="section-content">
                    <div class="thumb">
                        <img src="assets/imgs/gallery/img-s-85.webp" alt="image">
                        <a href="https://www.youtube.com/watch?v=AzwC6umvd1s"
                           class="wc-btn wc-btn-circle video-popup pos-center"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="content-last">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper">
                                <h2 class="section-title has_fade_anim">Working in the
                                    fields of UI/UX
                                    design and art
                                    direction.</h2>
                            </div>
                        </div>
                        <div class="accordion-wrapper has_fade_anim">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                aria-controls="flush-collapseOne">Website & mobile design</button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                         aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">We deploy world-class creative design, team on demand. that can
                                            design surest measure’s of success is when a client partner with more than once build ship
                                            scale.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                aria-controls="flush-collapseTwo">Motion graphic & animation</button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                                         aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">We deploy world-class creative design, team on demand. that can
                                            design surest measure’s of success is when a client partner with more than once build ship
                                            scale.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                aria-controls="flush-collapseThree">User experience</button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">We deploy world-class creative design, team on demand. that can
                                            design surest measure’s of success is when a client partner with more than once build ship
                                            scale.
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

    <!-- team area start  -->
    <section class="team-area">
        <div class="container">
            <div class="team-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_fade_anim">Quality team</h2>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text has_fade_anim">We deploy world-class creative design, team on demand. that can design
                            surest
                            measure's of success is when a client partner with more than once
                            build, ship scale your vision most efficient.
                        </p>
                    </div>
                </div>
                <div class="team-wrapper-box">
                    <div class="team-wrapper">
                        <div class="team-box has_fade_anim" data-fade-from="left" data-delay="0.15">
                            <a href="team-details.html">
                                <div class="thumb">
                                    <img src="assets/imgs/team/img-s-1.webp" alt="team icon">
                                </div>
                                <div class="content">
                                    <h3 class="title">Kamal Abraham</h3>
                                    <p class="text">CEO, Wealcoder</p>
                                </div>
                            </a>
                        </div>
                        <div class="team-box has_fade_anim" data-fade-from="left" data-delay="0.30">
                            <a href="team-details.html">
                                <div class="thumb">
                                    <img src="assets/imgs/team/img-s-2.webp" alt="team icon">
                                </div>
                                <div class="content">
                                    <h3 class="title">Selina Gomaze</h3>
                                    <p class="text">Junior Executive</p>
                                </div>
                            </a>
                        </div>
                        <div class="team-box has_fade_anim" data-fade-from="left" data-delay="0.45">
                            <a href="team-details.html">
                                <div class="thumb">
                                    <img src="assets/imgs/team/img-s-3.webp" alt="team icon">
                                </div>
                                <div class="content">
                                    <h3 class="title">Pedrik Vadra</h3>
                                    <p class="text">Sr. Developer</p>
                                </div>
                            </a>
                        </div>
                        <div class="team-box has_fade_anim" data-fade-from="left" data-delay="0.60">
                            <a href="team-details.html">
                                <div class="thumb">
                                    <img src="assets/imgs/team/img-s-4.webp" alt="team icon">
                                </div>
                                <div class="content">
                                    <h3 class="title">Thomas Ribbon</h3>
                                    <p class="text">UX Designer</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team area end  -->

    <!-- pricing area start  -->
    <section class="pricing-area">
        <div class="container">
            <div class="pricing-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_fade_anim">Special offer! choose
                                your pack today</h2>
                        </div>
                    </div>
                </div>
                <div class="pricing-wrapper-box">
                    <div class="pricing-wrapper">
                        <div class="pricing-box has_fade_anim" data-fade-from="left" data-delay="0.60">
                            <span class="tag">Basic</span>
                            <h3 class="price">$9.00</h3>
                            <div class="feature-list">
                                <ul>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Unlimited cards
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Automated management
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        SOX compliance
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Enterprise ERP integrations
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Limited tools
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Local video issuance
                                    </li>
                                </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip bordered"> <span
                                    data-text="Learn More">Learn More</span></a>
                        </div>
                        <div class="pricing-box has_fade_anim" data-fade-from="left" data-delay="0.60">
                            <span class="tag">Standard</span>
                            <h3 class="price">$29.00</h3>
                            <div class="feature-list">
                                <ul>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Unlimited cards
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Automated management
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        SOX compliance
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Enterprise ERP integrations
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Limited tools
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Local video issuance
                                    </li>
                                </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip bordered"> <span
                                    data-text="Learn More">Learn More</span></a>
                        </div>
                        <div class="pricing-box has_fade_anim" data-fade-from="left" data-delay="0.60">
                            <span class="tag">Premium</span>
                            <h3 class="price">$69.00</h3>
                            <div class="feature-list">
                                <ul>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Unlimited cards
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Automated management
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        SOX compliance
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Enterprise ERP integrations
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Unlimited tools
                                    </li>
                                    <li>
                                        <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                                        <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                                        Local video issuance
                                    </li>
                                </ul>
                            </div>
                            <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip bordered"> <span
                                    data-text="Learn More">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing area end  -->

    <!-- contact area start  -->
    <section class="contact-area">
        <div class="container">
            <div class="contact-area-inner section-spacing">
                <div class="shape-1">
                    <img src="assets/imgs/shape/img-s-73.webp" alt="shape">
                </div>
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_fade_anim">Start your experience
                                with Arolax</h2>
                        </div>
                    </div>
                    <div class="btn-wrapper has_fade_anim">
                        <a href="contact.html" class="wc-btn wc-btn-underline btn-text-flip"> <span
                                data-text="Let’s get in touch">Let’s get in touch</span> <img
                                src="assets/imgs/icon/arrow-right-half-light.webp" alt="icon image"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end  -->

    <!-- client area start  -->
    <div class="client-area">
        <div class="container">
            <div class="client-area-inner section-spacing">
                <div class="client-area-text">
                    <h2 class="text has_fade_anim">We worked with largest
                        global brands</h2>
                </div>
                <div class="clients-wrapper-box has_fade_anim">
                    <div class="clients-wrapper">
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-1.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-1-light.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-2.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-2-light.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-3.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-3-light.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-4.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-4-light.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-5.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-5-light.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-6.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-6-light.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-7.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-7-light.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-8.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-8-light.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-9.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-9-light.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-10.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-10-light.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-11.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-11-light.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="assets/imgs/brand/img-s-12.webp" alt="client image">
                            <img class="show-dark" src="assets/imgs/brand/img-s-12-light.webp" alt="client image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client area end  -->
@endsection
