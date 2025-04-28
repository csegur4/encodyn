@extends('layouts.app')
@section('title', 'Custom Software Development Services | Encodyn')
@section('description', 'Transform your business with our custom software development services.
From API integration to CRM solutions, we build powerful software that delivers measurable ROI.')
@section('keywords','custom software development, API development, CRM solutions, database management, cloud integration,
mobile applications, full-stack development, software engineering, enterprise software, business efficiency')
@section('meta_tags')
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Custom Software Development Services | Encodyn">
    <meta property="og:description" content="Transform your business operations with custom software solutions that drive efficiency, productivity, and profitability.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('imgs/services/software-development-services.webp') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Custom Software Development Services | Encodyn">
    <meta name="twitter:description" content="Transform your business operations with custom software solutions that drive efficiency, productivity, and profitability.">
    <meta name="twitter:image" content="{{ asset('imgs/services/software-development-services.webp') }}">

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
            <img src="{{ asset('imgs/services/software-development-services.webp')}}" class="has_fade_anim" data-delay="0.30"
                 data-fade-offset="0" alt="image">
            <div class="hero-social">
                <p class="title">Follow</p>
                <div class="hero-social-links">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-dribbble"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="section-title-box">
            <div class="section-title-wrapper">
                <div class="title-wrapper">
                    <h1 class="section-title has_fade_anim" data-on-scroll="0">Software <br>
                        Development</h1>
                </div>
            </div>
            <div class="feature-list has_fade_anim" data-on-scroll="0" data-delay="0.45">
                <ul>
                    <li>API Development</li>
                    <li>Custom CRM Solutions</li>
                    <li>Cloud Integration</li>
                </ul>
                <ul>
                    <li>Full-Stack Development</li>
                    <li>Database Management</li>
                    <li>Mobile Applications</li>
                </ul>
            </div>
        </div>
        <div class="text-wrapper has_fade_anim">
            <p class="text">At Encodyn, we deliver powerful custom software solutions that transform your business operations.
                Our team of skilled developers turns your business challenges into technological opportunities,
                creating software that increases efficiency, productivity, and profitability.
                We believe that software should be an asset that generates measurable value for your business, not just another expense.
            </p>
            <p class="text">From API development and database management to custom CRM solutions and mobile
                applications, we handle the complexity of modern software development so you can focus on running your business.
                Our collaborative approach ensures that we understand your needs and deliver solutions that exceed your expectations.</p>
    </div>
    <div class="steps-wrapper-box has_fade_anim">
        <div class="container">
            <div class="working-steps-box">
                <div class="working-steps">
                    <div class="working-step">
                        <h2 class="title">Discovery &<br>
                            Planning</h2>
                        <p class="text">We begin with a thorough analysis of your business requirements, identifying pain points and opportunities where custom software can create the most value.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Design &<br>
                            Architecture</h2>
                        <p class="text">Our team designs intuitive interfaces and robust system architecture that balances performance, scalability, and maintainability for long-term success.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Development &<br>
                            Testing</h2>
                        <p class="text">Using agile methodology, we build your solution incrementally with regular quality assurance testing to ensure reliability and optimal performance.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Deployment &<br>
                            Support</h2>
                        <p class="text">We handle seamless implementation and provide ongoing maintenance and support to keep your software running smoothly and adapting to your evolving needs.</p>
                    </div>
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
                        <h2 class="section-title has_fade_anim"> We transform business challenges into custom software
                            solutions that drive growth and efficiency.</h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="shape has_fade_anim">
                    <img class="show-light" src="{{ asset('imgs/shape/img-s-84.webp')}}" alt="shape">
                </div>
                <div class="content-last">
                    <div class="thumb has_fade_anim">
                        <img class="main-image" src="{{ asset('imgs/services/connecting-lines.webp')}}" alt="image">
                    </div>
                    <div class="text-wrapper has_fade_anim">
                        <p class="text">Our expert development team creates tailored software solutions that integrate
                            seamlessly with your existing systems while providing the flexibility to scale with your business.
                            We specialize in custom CRM development, API integrations, database management,
                            and full-stack applications designed to optimize your workflows and deliver measurable ROI.</p>
                        <p class="text">We don't just build software; we build partnerships. Throughout the development process,
                            we maintain transparent communication and provide regular updates, ensuring the final product aligns
                            perfectly with your vision and business objectives. Our agile approach allows us to adapt quickly to
                            changing requirements while maintaining quality and efficiency.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- features area end  -->

<!-- faq area start  -->
<section class="faq-area pb-70">
    <div class="container">
        <div class="faq-area-inner section-spacing-top">
            <div class="section-content">
                <div class="thumb">
                    <img src="{{ asset('imgs/services/command-line.webp')}}" class="has_fade_anim" data-fade-from="left"
                         alt="image">
                </div>
                <div class="content-last has_fade_anim">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title">Solutions crafted for business success</h2>
                        </div>
                    </div>
                    <div class="accordion-wrapper">
                        <div class="accordion accordion-flush" id="accordionFlushExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">Custom CRM Development</button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We build tailored CRM solutions that align perfectly with your sales process, customer service workflows, and reporting needs. Our custom CRMs eliminate the limitations of off-the-shelf solutions, providing exactly the features you need without unnecessary complexity.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">API Development & Integration</button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Our API development services enable seamless communication between different software systems, breaking down data silos and creating a unified technology ecosystem. We design RESTful APIs with robust security protocols, comprehensive documentation, and scalable architecture.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">Database Management & Optimization</button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We design, implement, and optimize database solutions that form the backbone of your business applications. Our expertise spans SQL and NoSQL databases, with a focus on performance optimization, data integrity, and secure access controls tailored to your specific requirements.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                                            aria-controls="flush-collapseFour">Mobile App Development</button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Extend your digital presence with custom mobile applications for iOS and Android platforms. We create responsive, intuitive apps that provide exceptional user experiences while integrating seamlessly with your existing systems and business processes.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                                            aria-controls="flush-collapseFive">Cloud Solutions & Migration</button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We help businesses leverage the power of cloud computing with custom cloud applications, migration services, and optimization strategies. Our solutions are designed for reliability, scalability, and cost-efficiency across AWS, Azure, and Google Cloud platforms.
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

<!-- contact area start  -->
<section class="contact-area">
    <div class="container">
        <div class="contact-area-inner section-spacing">
            <div class="shape-1">
                <img src="{{ asset('imgs/shape/img-s-73.webp')}}" alt="shape">
            </div>
            <div class="section-content">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h2 class="section-title has_fade_anim">Start your digital transformation with Encodyn</h2>
                    </div>
                </div>
                <div class="btn-wrapper has_fade_anim">
                    <a href="{{ route('contact') }}" class="wc-btn wc-btn-underline btn-text-flip"> <span
                            data-text="Let's discuss your project">Let's discuss your project</span>
                        <img src="{{ asset('imgs/icon/arrow-right-half-light.webp')}}" alt="icon image"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact area end  -->

<!-- client area start  -->
<div class="client-area has_fade_anim">
    <div class="container">
        <div class="client-area-inner section-spacing">
            <div class="client-area-text">
                <h2 class="text">Trusted by innovative businesses</h2>
            </div>
            <div class="clients-wrapper-box">
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
