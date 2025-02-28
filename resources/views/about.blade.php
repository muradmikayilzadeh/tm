@php
    use Illuminate\Support\Str;
    $locale = app()->getLocale();
@endphp
@extends('layouts.header_footer')
@section('content')
    <!-- Main -->
    <main>
        <!-- Banner -->
        <div class="section position-relative"
            style="background-image: url('https://prositus.rometheme.pro/html/demos/probiz/image/image-1920x1280-16.jpg'); height: 40vh;">
            <div class="bg-overlay"></div>
            <div class="r-container h-100 position-relative" style="z-index: 2;">
                <div class="d-flex flex-column w-100 h-100 justify-content-center text-white gap-3"
                    style="max-width: 895px;">
                    <h3 class="font-1 m-0 text-white fw-semibold">{{ __('About Us') }}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home', app()->getLocale()) }}">{{ __('HomePage') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('About Us') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Section About Us -->
        <div class="section">
            <div class="r-container">
                <div class="row row-cols-xl-2 row-cols-1 align-items-center">
                    <div class="col col-xl-12 px-4 text-center">
                        <div class="d-flex flex-column">
                            <div class="linear-gradient" style="margin:0 auto">
                                <span class="font-2 accent-color-3">{{ __('About Us') }}</span>
                            </div>
                            <h3 class="font-1 fw-bold">{{ __('Taking Your Business To The Next Level') }}</h3>
                            <div>
                                <p class="text-color-2">
                                    {{ __('About page p1') }}
                                </p>

                                <p class="text-color-2">
                                    {{ __('About page p2') }}

                                </p>

                                <p class="text-color-2">
                                    {{ __('About page p3') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-xl-2">
                    <div class="col mb-5" style="margin:0 auto">
                        <div class="position-relative mb-5">
                            <img src="{{ asset('image/tural.jpeg') }}" alt="image" class="img-fluid rounded-3 w-100">
                            <div class="position-absolute w-75" style="margin-top: -5rem; margin-left: 12%;">
                                <div
                                    class="bg-accent-color d-flex flex-column text-white p-4 align-items-center text-center rounded-3">
                                    <div class="mb-2">
                                        <h4>{{ __('Tural Mammadov') }}</h4>
                                        <span class="font-2">{{ __('Expert') }}</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Counter -->
        <div class="section bg-accent-color">
            <div class="r-container">
                <div class="row row-cols-xl-4 row-cols-1 text-center">
                    <div class="col mb-3">
                        <h1 class="text-white">15<sup>+</sup></h1>
                        <h5 class="text-white">{{ __('Years Experience') }}</h5>
                    </div>
                    <div class="col mb-3">
                        <h1 class="text-white">2k</h1>
                        <h5 class="text-white">{{ __('Happy Customers') }}</h5>
                    </div>
                    <div class="col mb-3">
                        <h1 class="text-white">182<sup>+</sup></h1>
                        <h5 class="text-white">{{ __('Countries') }}</h5>
                    </div>
                    <div class="col mb-3">
                        <h1 class="text-white">90<sup>%</sup></h1>
                        <h5 class="text-white">{{ __('Problem Solved') }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section CTA -->
        <div class="section position-relative bg-attach-fixed"
            style="background-image: url(https://prositus.rometheme.pro/html/demos/probiz/image/image-1920x1280-4.jpg);">
            <div class="bg-overlay"></div>
            <div class="r-container position-relative py-5" style="z-index: 2;">
                <div class="d-flex flex-column mx-auto text-center align-items-center text-white gap-4"
                    style="max-width: 767px;">
                    <h3 class="font-1 text-white">{{ __('Optimize Operations for Maximum Efficiency') }}</h3>
                    <p style="max-width: 667px;">
                        {{ __('Optimize text') }}
                    </p>
                    <div class="w-max-content">
                        <a href="{{ route('contactUs', app()->getLocale()) }}" class="btn btn-accent rounded-pill d-flex flex-row gap-2 px-5 py-3">
                            <span>{{ __('Get In Touch') }}</span>
                            <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-semibold"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection