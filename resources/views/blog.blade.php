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
            style="background-image: url('https://prositus.rometheme.pro/html/demos/probiz/image/image-1920x1280-15.jpg'); height: 40vh;">
            <div class="bg-overlay"></div>
            <div class="r-container h-100 position-relative" style="z-index: 2;">
                <div class="d-flex flex-column w-100 h-100 justify-content-center text-white gap-3"
                    style="max-width: 895px;">
                    <h3 class="font-1 m-0 text-white fw-semibold">{{ __('News') }}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home', app()->getLocale()) }}">{{ __('HomePage') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('News') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Section Last Article -->
        <div class="section">
            <div class="r-container d-flex flex-column gap-4">
                <div class="d-flex flex-column gap-3 text-center mx-auto justify-content-center align-items-center" style="max-width: 500px;">
                    <div class="linear-gradient">
                        <span class="font-2 accent-color-3">{{ __('News') }}</span>
                    </div>

                    <h3 class="fw-semibold">{{ __('Read Our Recent News & Insights') }}</h3>
                    <p class="text-color-2">{{ __('Recent News paragraph') }}
                    </p>
                </div>
                <div class="row row-cols-xl-3 row-cols-1">
                    @foreach($blogs as $blog)
                    <div class="col mb-3">
                        <div class="card d-flex flex-column gap-3">
                            <div class="position-relative overflow-hidden rounded-3">
                                <img src="{{ asset('storage/' . $blog->blog_thumbnail) }}" alt="image" class="img-fluid">
                                <div class="bg-overlay-2"></div>
                                <div class="position-absolute top-0 left-0 px-4 py-2 bg-accent-color-3 rounded-2"
                                    style="margin-top: 1rem; margin-left: 1rem;">
                                    <span class="text-white">
                                    @if(app()->getLocale() === 'az' || app()->getLocale() === 'ru' || app()->getLocale() === 'en')
                                        {{ $blog->created_at->translatedFormat('d F Y') }}
                                    @else
                                        {{ $blog->created_at->format('d F Y') }}
                                    @endif
                                    </span>
                                </div>
                                <div class="position-absolute bottom-0 left-0 text-white" style="margin: 1rem;">
                                    <h5>
                                        @if(app()->getLocale() === 'az')
                                            {{ $blog->blog_title_az }}
                                        @elseif(app()->getLocale() === 'ru')
                                            {{ $blog->blog_title_ru }}
                                        @else
                                            {{ $blog->blog_title }}
                                        @endif
                                    </h5>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-1 mb-3">
                                <p class="text-color-2" style="font-weight:bold">
                                    @if(app()->getLocale() === 'az')
                                        {!! Str::limit($blog->blog_content_az, 100) !!}
                                    @elseif(app()->getLocale() === 'ru')
                                        {!! Str::limit($blog->blog_content_ru, 100) !!}
                                    @else
                                        {!! Str::limit($blog->blog_content, 100) !!}
                                    @endif
                                </p>
                                <a href="{{ route('getNews', ['locale' => app()->getLocale(), 'slug' => $blog->blog_slug]) }}">{{ __('Read More') }} <i
                                        class="rtmicon rtmicon-arrow-up-right fw-bold fs-6"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>
@endsection