@extends('layouts.app')
@section('title', 'Contact Encodyn | Custom Digital Solutions')
@section('description', 'Get in touch with our expert team to discuss your digital project needs.
We are ready to answer your questions and create custom solutions for your business.')
@section('keywords','contact Encodyn, digital services consultation, project inquiry, get in touch')
@section('meta_tags')
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Contact Encodyn | Get Started Today">
    <meta property="og:description" content="Ready to transform your business? Contact our team today to discuss your project needs and discover how our digital solutions can help you succeed.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('imgs/contact-og.webp') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Encodyn | Get Started Today">
    <meta name="twitter:description" content="Ready to transform your business? Contact our team today to discuss your project needs and discover how our digital solutions can help you succeed.">
    <meta name="twitter:image" content="{{ asset('imgs/contact-og.webp') }}">

    <!-- WhatsApp -->
    <meta property="og:site_name" content="Encodyn">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <link rel="canonical" href="{{ url()->current() }}">
@endsection
@push('vite_assets')
    @vite([
        'resources/scss/master-common.scss',
        'resources/scss/master-contact.scss',
        'resources/js/app.js'
    ])
@endpush
@section('content')

    <!-- contact area start  -->
    <section class="contact-area">
        <div class="container">
            <div class="contact-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title large has_fade_anim">We’ve been
                                waiting for you!</h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="info-box has_fade_anim">
                        <div class="text-wrapper">
                            <p class="text">We want to hear from you. let’s
                                us know how we can help!</p>
                        </div>
                        <ul class="contact-list">
                            <li><a href="tel:+8130000000">+813 000 0000</a></li>
                            <li><a href="#">services@encodyn.com</a></li>
                            <li>Clifton St <br>
                                Tampa, FL, US 33603</li>
                        </ul>
                    </div>
                    <div class="contact-wrap has_fade_anim" data-delay="0.30">
                        <form name="contactForm" method="post" action="{{ route('contactAction') }}">
                            @csrf
                            <div class="contact-formwrap">
                                <div class="contact-formfield">
                                    <input type="text" name="Name" id="name" placeholder="Name*">
                                </div>
                                <div class="contact-formfield">
                                    <input type="text" name="Email" id="email" placeholder="Email*">
                                </div>
                                <div class="contact-formfield">
                                    <input type="text" name="Phone" id="phone" placeholder="Phone">
                                </div>
                                <div class="contact-formfield">
                                    <input type="text" name="Subject" id="subject" placeholder="Subject*">
                                </div>
                                <div class="contact-formfield messages">
                                    <input type="text" name="Messages" id="message" placeholder="Message*">
                                </div>
                            </div>
                            <div class="g-recaptcha pt" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" data-callback="enableSubmitButtonContact"></div>
                            <div class="submit-btn">
                                <button type="submit" id='submitButton' class="wc-btn wc-btn-primary btn-text-flip" disabled><span
                                        data-text="Send Message">Send Message</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end  -->
    <script>
        function enableSubmitButtonContact() {
            document.getElementById('submitButton').disabled = false;
            document.getElementById('submitButton').setAttribute('class', 'btn-main');
        }
    </script>
@endsection
