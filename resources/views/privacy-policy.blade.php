@extends('layouts.app')
@section('title', 'Privacy Policy')

@section('meta')
    <meta name="robots" content="noindex, nofollow">
@endsection

@push('vite_assets')
    @vite([
        'resources/scss/master-common.scss',
        'resources/scss/master-blog-details.scss',
        'resources/js/app.js'
    ])
@endpush

@section('content')
    <section class="blog-details-area">
        <div class="container">
            <div class="blog-details-area-inner pb-5">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title large has_fade_anim">Privacy Policy</h1>
                        </div>
                    </div>
                </div>
                <div class="blogdetails__wrapper">
                    <div class="blogdetails-contentleft">
                        <ul class="blogdetails-overview dark-overview has_fade_anim" data-fade-from="left">
                            <li>
                                <i class="fa-solid fa-chart-simple"></i>
                                <span>247 <br>
                          Views </span>
                            </li>
                            <li>
                                <i class="fa-solid fa-share-nodes"></i>
                                <span>14 <br>
                          Shares</span>
                            </li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                    <div class="blogdetails-contentright">
                        <article class="blog-details-fullBody">
                            <div class="text-wrapper">
                                <p class="text has_fade_anim">This Privacy Policy describes how your personal information is collected, used, and shared when you visit or make a purchase from {{ env('APP_COMPANY_NAME') }} (the "Site").</p>
                            </div>

                            <div class="content-block">
                                <h2 class="content-title has_fade_anim">Personal Information We Collect</h2>
                                <div class="text-wrapper">
                                    <p class="text has_fade_anim">When you visit the Site, we automatically collect certain information about your device, including information about your web browser, IP address, time zone, and some of the cookies that are installed on your device. Additionally, as you browse the Site, we collect information about the individual web pages or products that you view, what websites or search terms referred you to the Site, and information about how you interact with the Site. We refer to this automatically-collected information as "Device Information."</p>

                                    <h3 class="content-title has_fade_anim">We collect Device Information using the following technologies:</h3>

                                    <ul class="details-service has_fade_anim">
                                        <li><span>+</span>"Cookies" are data files that are placed on your device or computer and often include an anonymous unique identifier. For more information about cookies, and how to disable cookies, visit http://www.allaboutcookies.org</li>
                                        <li><span>+</span>"Log files" track actions occurring on the Site, and collect data including your IP address, browser type, Internet service provider, referring/exit pages, and date/time stamps.</li>
                                        <li><span>+</span>"Web beacons," "tags," and "pixels" are electronic files used to record information about how you browse the Site. Additionally when you make a purchase or attempt to make a purchase through the Site, we might collect certain information from you, including your name, email address, and phone number. We refer to this information as "Order Information." When we talk about "Personal Information" in this Privacy Policy, we are talking both about Device Information and Order Information.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="content-block">
                                <h2 class="content-title has_fade_anim">How Do We Use Your Personal Information?</h2>
                                <div class="text-wrapper">
                                    <p class="text has_fade_anim">We use your email address and/or phone number for authentication and account recovery purposes only. Additionally, we use the preferences you have shared with us, to provide you with the most relevant information or advertising relating to our products or services. We use the Device Information that we collect to help us screen for potential risk and fraud (in particular, your IP address), and more generally to improve and optimize our Site (for example, by generating analytics about how our customers browse and interact with the Site, and to assess the success of our marketing and advertising campaigns). We share your Personal Information with third parties to help us use your Personal Information, as described above. For example, we use Google Analytics to help us understand how our customers use the Site--you can read more about how Google uses your Personal Information here. You can also opt-out of Google Analytics here. Finally, we may also share your Personal Information to comply with applicable laws and regulations, to respond to a subpoena, search warrant or other lawful request for information we receive, or to otherwise protect our rights. Finally, we may also share your Personal Information to comply with applicable laws and regulations, to respond to a subpoena, search warrant or other lawful request for information we receive, or to otherwise protect our rights. As described above, we use your Personal Information to provide you with targeted advertisements or marketing communications we believe may be of interest to you. For more information about how targeted advertising works, you can visit the Network Advertising Initiative's ("NAI") educational page at here.</p>

                                    <h3 class="content-title has_fade_anim pt-4">You can opt out of targeted advertising by:</h3>

                                    <ul class="details-service has_fade_anim">
                                        <li><span>+</span>FACEBOOK</li>
                                        <li><span>+</span>GOOGLE</li>
                                        <li><span>+</span>BING</li>
                                    </ul>

                                    <p class="text has_fade_anim">Additionally, you can opt out of some of these services by visiting the Digital Advertising Alliance's opt-out portal at here.</p>
                                </div>
                            </div>

                            <div class="content-block">
                                <h2 class="content-title has_fade_anim">Do Not Track</h2>
                                <div class="text-wrapper">
                                    <p class="text has_fade_anim">Please note that we do not alter our Site's data collection and use practices when we see a Do Not Track signal from your browser.</p>
                                </div>
                            </div>

                            <div class="content-block">
                                <h2 class="content-title has_fade_anim">Your Rights</h2>
                                <div class="text-wrapper">
                                    <p class="text has_fade_anim">If you are a European resident, you have the right to access personal information we hold about you and to ask that your personal information be corrected, updated, or deleted. If you would like to exercise this right, please contact us through the contact information below. Additionally, if you are a European resident we note that we are processing your information in order to fulfill contracts we might have with you (for example if you make an order through the Site), or otherwise to pursue our legitimate business interests listed above. Additionally, please note that your information will be transferred outside of Europe, including to Canada and the United States.</p>
                                </div>
                            </div>

                            <div class="content-block">
                                <h2 class="content-title has_fade_anim">Data Retention</h2>
                                <div class="text-wrapper">
                                    <p class="text has_fade_anim">When you place an order through the Site, we will maintain your Order Information for our records unless and until you ask us to delete this information.</p>
                                </div>
                            </div>

                            <div class="content-block">
                                <h2 class="content-title has_fade_anim">Minors</h2>
                                <div class="text-wrapper">
                                    <p class="text has_fade_anim">The Site is not intended for individuals under the age of 18.</p>
                                </div>
                            </div>

                            <div class="content-block">
                                <h2 class="content-title has_fade_anim">Changes</h2>
                                <div class="text-wrapper">
                                    <p class="text has_fade_anim">We may update this privacy policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal or regulatory reasons.</p>
                                </div>
                            </div>

                            <div class="content-block">
                                <h2 class="content-title has_fade_anim">Contact Us</h2>
                                <div class="text-wrapper">
                                    <p class="text has_fade_anim">For more information about our privacy practices, if you have questions, or if you would like to make a complaint, please contact us by e-mail at <a href="{{ env('APP_COMPANY_NAME') }}">{{ env('APP_COMPANY_EMAIL') }}</a></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
