@extends('layouts.app')
@section('title', 'Strategic Brand Design Services | Identity | Encodyn')
@section('description', 'Craft a distinctive brand identity that resonates with your audience.
Our brand design services create visual systems that build recognition and customer loyalty.')
@section('keywords','brand design, visual identity, logo design, brand guidelines, typography, color systems, marketing materials')
@section('meta_tags')
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Brand Design Services | Encodyn">
    <meta property="og:description" content="Craft a distinctive brand identity that creates recognition, builds trust, and establishes emotional connections with your customers.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ img_optimized('imgs/services/brand-design-services.webp') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Brand Design Services | Encodyn">
    <meta name="twitter:description" content="Craft a distinctive brand identity that creates recognition, builds trust, and establishes emotional connections with your customers.">
    <meta name="twitter:image" content="{{ img_optimized('imgs/services/brand-design-services.webp') }}">

    <!-- WhatsApp -->
    <meta property="og:site_name" content="Encodyn">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <link rel="canonical" href="{{ url()->current() }}">
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
            <img src="{{ img_optimized('imgs/services/brand-design-services.webp')}}" class="has_fade_anim" data-delay="0.30"
                 data-fade-offset="0"
                 alt="Strategic brand design process showcasing visual identity elements and creative brand development">
            @include('components.social-media')
        </div>
        <div class="section-title-box">
            <div class="section-title-wrapper">
                <div class="title-wrapper">
                    <h1 class="section-title has_fade_anim" data-on-scroll="0">Brand <br>
                        design</h1>
                </div>
            </div>
            <div class="feature-list has_fade_anim" data-on-scroll="0" data-delay="0.45">
                <ul>
                    <li>Visual Identity</li>
                    <li>Logo Design</li>
                    <li>Brand Guidelines</li>
                </ul>
                <ul>
                    <li>Typography</li>
                    <li>Color Systems</li>
                    <li>Marketing Materials</li>
                </ul>
            </div>
        </div>
        <div class="text-wrapper has_fade_anim">
            <p class="text">At Encodyn, we craft distinctive brand identities that capture your company's essence and resonate with your target audience.
                Our team of creative designers translates your brand's values, personality, and vision into compelling visual elements that create
                recognition, build trust, and establish emotional connections with your customers.
                We believe that a well-designed brand is more than just aesthetics—it's a strategic asset that drives business growth and customer loyalty.
            </p>
            <p class="text">From logo design and color systems to typography selection and brand guidelines, we develop comprehensive
                brand identities that maintain consistency across all touchpoints while providing the flexibility to evolve with your business.
                Our collaborative approach ensures that we fully understand your brand story and business objectives to create designs that truly represent your unique vision.</p>
        </div>
    </div>
    <div class="steps-wrapper-box has_fade_anim">
        <div class="container">
            <div class="working-steps-box">
                <div class="working-steps">
                    <div class="working-step">
                        <h2 class="title">Discovery &<br>
                            Research</h2>
                        <p class="text">We begin by understanding your business values, audience, competitors, and goals through in-depth interviews and market research to establish a solid foundation for your brand identity.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Concept &<br>
                            Development</h2>
                        <p class="text">Our designers explore creative directions and develop initial concepts for your visual identity, iterating based on your feedback to refine the designs that best express your brand's personality.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Design &<br>
                            Refinement</h2>
                        <p class="text">We craft polished brand elements—from logos and color palettes to typography and graphics—creating a cohesive system that communicates your brand story across all platforms.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Implementation &<br>
                            Guidelines</h2>
                        <p class="text">We deliver comprehensive brand guidelines and assets in multiple formats, ensuring consistent application across all touchpoints and providing the tools needed for successful brand management.</p>
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
                        <h2 class="section-title has_fade_anim"> We transform business visions into memorable brand
                            identities that create recognition and build lasting connections.</h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="shape has_fade_anim">
                    <img class="show-light" src="{{ img_optimized('imgs/shape/img-s-84.webp')}}"
                         alt="Decorative design element enhancing the brand design services section">
                </div>
                <div class="content-last">
                    <div class="thumb has_fade_anim">
                        <img class="main-image" src="{{ img_optimized('imgs/services/brand-design-keywords.webp')}}"
                             alt="Brand identity development visualization with typography, color systems, and logo design elements">
                    </div>
                    <div class="text-wrapper has_fade_anim">
                        <p class="text">Our brand design team creates distinctive visual identities that communicate
                            your company's values and personality at a glance. We develop thoughtful, research-based
                            designs that stand out in crowded markets while maintaining relevance to your target audience.
                            Every element—from your logo and typography to color systems and imagery—works together to tell a
                            cohesive brand story that resonates with customers.</p>
                        <p class="text">We don't just deliver beautiful designs; we provide strategic brand systems that
                            solve business challenges. Our comprehensive approach ensures your brand identity works across
                            all applications, from digital platforms to physical environments. We equip your team with detailed
                            guidelines and assets that maintain consistency while allowing your brand to evolve and grow with
                            your business over time.</p>
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
                    <img src="{{ img_optimized('imgs/services/table-work-logo-design.webp')}}" class="has_fade_anim" data-fade-from="left"
                         alt="Designer's workspace showing brand identity development process with logo sketches and brand guidelines">
                </div>
                <div class="content-last has_fade_anim">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title">Identities crafted for brand impact</h2>
                        </div>
                    </div>
                    <div class="accordion-wrapper">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">Visual Identity Systems</button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We develop comprehensive visual systems that extend beyond your logo to create a cohesive brand experience. Our visual identity packages include primary and secondary logo variations, color palettes, typography hierarchies, image styles, graphic elements, and patterns that work together to create a distinctive and recognizable brand presence across all touchpoints.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">Logo Design</button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We create distinctive, versatile logos that embody your brand essence and stand the test of time. Our logo design process includes extensive research, concept development, and refinement to deliver marks that work effectively across all applications, from business cards to building signage, while conveying your brand's personality at a glance.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">Brand Guidelines</button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We create comprehensive brand style guides that document the rules and best practices for implementing your visual identity. These guidelines include detailed specifications for logo usage, color applications, typography implementation, photography direction, and voice/tone guidelines to ensure consistent brand expression across teams, partners, and channels.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                                            aria-controls="flush-collapseFour">Marketing Materials</button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We design impactful marketing collateral that brings your brand to life across customer touchpoints. From business cards and brochures to presentation templates and packaging, we create materials that communicate your key messages while reinforcing your brand identity, ensuring a consistent experience that builds recognition and trust with your audience.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                                            aria-controls="flush-collapseFive">Digital Asset Creation</button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We produce the complete range of digital brand assets needed for today's multi-channel environment. From social media graphics and email templates to web design components and digital advertising materials, we create assets optimized for each platform while maintaining brand consistency, enabling your team to communicate effectively across all digital touchpoints.
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
