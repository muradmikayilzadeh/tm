
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
            style="background-image: url('https://prositus.rometheme.pro/html/demos/probiz/image/image-1920x1280-17.jpg'); height: 40vh;">
            <div class="bg-overlay"></div>
            <div class="r-container h-100 position-relative" style="z-index: 2;">
                <div class="d-flex flex-column w-100 h-100 justify-content-center text-white gap-3"
                    style="max-width: 895px;">
                    <h3 class="font-1 m-0 text-white fw-semibold">
                        @if(app()->getLocale() === 'az')
                            {{ $blog->blog_title_az }}
                        @elseif(app()->getLocale() === 'ru')
                            {{ $blog->blog_title_ru }}
                        @else
                            {{ $blog->blog_title }}
                        @endif
                    </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home', app()->getLocale()) }}">{{ __('HomePage') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('News') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Section Single Blog -->
        <div class="section">
            <div class="r-container">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col col-xl-8">
                        <div class="d-flex flex-column gap-4">
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $blog->blog_single_photo) }}" alt="" class="img-fluid rounded-3">
                            </div>
                            <div class="mb-3">
                                <h3 class="font-1 fw-semibold">
                                @if(app()->getLocale() === 'az')
                                    {{ $blog->blog_title_az }}
                                @elseif(app()->getLocale() === 'ru')
                                    {{ $blog->blog_title_ru }}
                                @else
                                    {{ $blog->blog_title }}
                                @endif
                                </h3>
                            </div>
                            <div class="mb-3">
                                @if(app()->getLocale() === 'az')
                                    {!! $blog->blog_content_az !!}
                                @elseif(app()->getLocale() === 'ru')
                                    {!! $blog->blog_content_ru !!}
                                @else
                                    {!! $blog->blog_content !!}
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-4">
                        <div class="d-flex flex-column gap-4">
                            <div class="shadow rounded-5 px-4 py-5 d-flex flex-column gap-3">
                                <h5 class="font-1">{{ __('Archives') }}</h5>
                                <div class="d-flex flex-column gap-4">
                                    @foreach($blogs as $blog)
                                    <div class="row row-cols-2">
                                        <div class="col-5">
                                            <img src="{{ asset('storage/' . $blog->blog_single_photo) }}" alt="" class="img-fluid rounded-3 h-30">
                                        </div>
                                        <div class="col-7">
                                            <div class="d-flex flex-column h-100">
                                                <a href="" class="link">
                                                    <h6 class="font-1 fs-6">
                                                        @if(app()->getLocale() === 'az')
                                                            {{ $blog->blog_title_az }}
                                                        @elseif(app()->getLocale() === 'ru')
                                                            {{ $blog->blog_title_ru }}
                                                        @else
                                                            {{ $blog->blog_title }}
                                                        @endif
                                                    </h6>
                                                </a>
                                                <div class="px-3 py-1 bg-accent-color-3 rounded-2 w-max-content">
                                                    <span class="text-white">
                                                    @if(app()->getLocale() === 'az' || app()->getLocale() === 'ru' || app()->getLocale() === 'en')
                                                        {{ $blog->created_at->translatedFormat('d F Y') }}
                                                    @else
                                                        {{ $blog->created_at->format('d F Y') }}
                                                    @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="position-relative overflow-hidden rounded-3"
                                style="background-image: url('https://prositus.rometheme.pro/html/demos/probiz/image/image-1920x1280-4.jpg'); background-size: cover; background-position: center;">
                                <div class="bg-overlay"></div>
                                <div class="position-relative p-5" style="z-index: 2;">
                                    <div
                                        class="d-flex flex-column mx-auto text-center align-items-center text-white gap-3">
                                        <h4 class="font-1 text-white fw-semibold">{{ __('Optimize Operations for Maximum Efficiency') }}</h4>
                                        <p>{{ __('Optimize text') }}</p>
                                        <div class="w-max-content">
                                            <a href="{{ route('contactUs', app()->getLocale()) }}"
                                                class="btn btn-accent rounded-pill d-flex flex-row gap-2 px-5 py-3">
                                                <span>{{ __('Get In Touch') }}</span>
                                                <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-semibold"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection