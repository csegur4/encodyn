@extends('layouts.app')
@section('title', 'SEO Optimization Services | Boost Your Rankings | Encodyn')
@section('description', 'Improve your search visibility and drive qualified traffic with our data-driven SEO services.
Technical optimization, content strategy, and measurable results.')
@section('keywords','SEO optimization, search engine optimization, technical SEO, content strategy, keyword research, local SEO, analytics')
@section('meta_tags')
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="SEO Optimization Services | Encodyn">
    <meta property="og:description" content="Boost your online visibility with data-driven SEO strategies that increase rankings, drive qualified traffic, and deliver measurable returns.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('imgs/services/seo-optimization-services.webp') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SEO Optimization Services | Encodyn">
    <meta name="twitter:description" content="Boost your online visibility with data-driven SEO strategies that increase rankings, drive qualified traffic, and deliver measurable returns.">
    <meta name="twitter:image" content="{{ asset('imgs/services/seo-optimization-services.webp') }}">

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
            <img src="{{ asset('imgs/services/seo-optimization-services.webp')}}" class="has_fade_anim" data-delay="0.30"
                 data-fade-offset="0"
                 alt="SEO optimization services showing search rankings and analytics dashboard with performance metrics">
            @include('components.social-media')
        </div>
        <div class="section-title-box">
            <div class="section-title-wrapper">
                <div class="title-wrapper">
                    <h1 class="section-title has_fade_anim" data-on-scroll="0">Search Engine <br>
                        Optimization (SEO)</h1>
                </div>
            </div>
            <div class="feature-list has_fade_anim" data-on-scroll="0" data-delay="0.45">
                <ul>
                    <li>Technical SEO</li>
                    <li>On-Page Optimization</li>
                    <li>Content Strategy</li>
                </ul>
                <ul>
                    <li>Keyword Research</li>
                    <li>Local SEO</li>
                    <li>Analytics & Reporting</li>
                </ul>
            </div>
        </div>
        <div class="text-wrapper has_fade_anim">
            <p class="text">At Encodyn, we deliver data-driven SEO strategies that improve your search visibility and
                drive qualified traffic to your website.
                Our team of SEO specialists analyzes your digital presence, identifies opportunities for growth, and
                implements targeted optimizations
                that increase your rankings for searches that matter to your business.
                We believe that effective SEO is an essential investment that generates measurable returns through increased
                organic traffic and conversions.
            </p>
            <p class="text">From technical website audits and keyword research to content optimization and performance tracking,
                we handle every aspect of search engine optimization to ensure your business stands out in an increasingly
                competitive digital landscape. Our transparent approach keeps you informed of progress and results,
                demonstrating the clear value of our SEO services.</p>
        </div>
    </div>
    <div class="steps-wrapper-box has_fade_anim">
        <div class="container">
            <div class="working-steps-box">
                <div class="working-steps">
                    <div class="working-step">
                        <h2 class="title">Analysis &<br>
                            Research</h2>
                        <p class="text">We begin with comprehensive website audits, competitor analysis, and in-depth keyword research to identify opportunities and establish a strategic foundation for your SEO campaign.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Strategy &<br>
                            Planning</h2>
                        <p class="text">Our team develops a customized SEO roadmap that prioritizes high-impact optimizations based on your business goals, target audience, and competitive landscape.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Implementation &<br>
                            Optimization</h2>
                        <p class="text">We execute technical fixes, content optimizations, and off-page strategies using industry best practices to improve your search visibility and user experience.</p>
                    </div>
                    <div class="working-step">
                        <h2 class="title">Monitoring &<br>
                            Refinement</h2>
                        <p class="text">Through continuous performance tracking and data analysis, we measure results, identify new opportunities, and refine your SEO strategy to adapt to algorithm changes and market shifts.</p>
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
                        <h2 class="section-title has_fade_anim"> We transform your online visibility with data-driven SEO
                            strategies that drive qualified traffic and conversions.</h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="shape has_fade_anim">
                    <img class="show-light" src="{{ asset('imgs/shape/img-s-84.webp')}}"
                         alt="Decorative geometric element enhancing the SEO services section">
                </div>
                <div class="content-last">
                    <div class="thumb has_fade_anim">
                        <img class="main-image" src="{{ asset('imgs/services/seo-search-engine-optimization-services.webp')}}"
                             alt="Search engine optimization strategy visualization with keyword targeting and organic traffic growth charts">
                    </div>
                    <div class="text-wrapper has_fade_anim">
                        <p class="text">Our expert SEO team employs the latest search engine optimization techniques to
                            improve your website's visibility in organic search results. We focus on sustainable,
                            white-hat strategies that work with search algorithms rather than against them, ensuring long-term
                            performance and protecting your brand from penalties associated with questionable SEO tactics.</p>
                        <p class="text">We believe in transparency and measurable results. Throughout our partnership,
                            we provide comprehensive reporting that tracks key performance indicators and demonstrates
                            the impact of our optimization efforts. Our team regularly analyzes this data to refine your
                            strategy, identifying new opportunities and adapting to changes in search algorithms or
                            market conditions to maintain and improve your search rankings.</p>
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
                    <img src="{{ asset('imgs/services/seo-analysis.webp')}}" class="has_fade_anim" data-fade-from="left"
                         alt="SEO analysis and keyword research tools showing website performance optimization data">
                </div>
                <div class="content-last has_fade_anim">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title">Strategies designed for search success</h2>
                        </div>
                    </div>
                    <div class="accordion-wrapper">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">Keyword Research & Strategy</button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Our in-depth keyword research identifies valuable search terms with the right balance of search volume, competition, and commercial intent for your business. We analyze user intent behind these searches to develop a strategic keyword targeting plan that maps relevant terms to your content, creating opportunities to connect with potential customers at every stage of their journey.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">Technical SEO</button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We perform comprehensive site audits to identify and fix technical issues that impact search engine crawling and indexing. Our technical SEO services include site speed optimization, mobile-friendliness improvements, structured data implementation, XML sitemap management, and resolving indexation issues to create a solid foundation for your SEO success.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">On-Page Optimization</button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We enhance your website's content and HTML elements to improve relevance and authority for targeted keywords. Our on-page optimization includes strategic placement of keywords in titles, headings, and content, meta description optimization, image optimization, internal linking improvements, and content enhancement to better satisfy user intent and engage visitors.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                                            aria-controls="flush-collapseFour">Local SEO</button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We help businesses dominate local search results with targeted optimization strategies for nearby customers. Our local SEO services include Google Business Profile optimization, local keyword targeting, citation building and management, review generation and monitoring, and local content development to increase your visibility in location-based searches.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                                            aria-controls="flush-collapseFive">Analytics & Conversion Optimization</button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We implement robust tracking systems and provide detailed reporting to measure your SEO performance and make data-driven decisions. Our analytics services include search ranking tracking, traffic analysis, conversion rate optimization, user behavior analysis, and competitive intelligence to continuously improve your strategy and maximize return on investment.
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
