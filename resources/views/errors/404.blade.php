@extends('layouts.app')
@section('title', '404 Not Found')
@push('vite_assets')
    @vite([
        'resources/scss/master-common.scss',
        'resources/scss/master-error-404.scss',
        'resources/js/app.js'
    ])
@endpush
@section('content')
    <!-- error area start  -->
    <section class="error-area">
        <div class="container">
            <div class="error-area-inner section-spacing">
                <div class="section-content">
                    <div class="error-shape has_fade_anim">
                        <img class="show-light" src="{{ asset('imgs/404.webp')}}" alt="shape">
                    </div>
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title has_fade_anim" data-delay="0.30">Ooop! Error page!</h1>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text has_fade_anim" data-delay="0.45">The page you are looking for doesn't exist or has
                            been moved.</p>
                    </div>
                    <div class="btn-wrapper has_fade_anim" data-delay="0.60">
                        <a href="{{ route('home') }}" class="wc-btn wc-btn-primary btn-text-flip"> <span data-text="Back to home">Back to
                        home</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error area end  -->
@endsection
