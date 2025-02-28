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
                    <h3 class="font-1 m-0 text-white fw-semibold">{{ __('Services') }}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home', app()->getLocale()) }}">{{ __('HomePage') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Services') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Section Pricing Plan -->
        <div class="section">
            <div class="r-container">
                <div class="d-flex flex-column gap-4 mx-auto mb-4 text-center justify-content-center align-items-center"
                    style="max-width: 667px;">
                    <span class="accent-color">{{ __('PRICING PLAN') }}</span>

                    <h3 class="fw-semibold">{{ __('Cost Effective') }}</h3>
                </div>

                <div class="text-center">
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

                <div class="row row-cols-xl-3 row-cols-1">
                    @foreach($services as $service)
                    <div class="col mb-3">
                        <div class="card card-outline-hover p-5">
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex flex-column gap-3">
                                    <h5 class="accent-color-3 fw-semibold">
                                        @if(app()->getLocale() === 'az')
                                            {{ $service->service_name_az }}
                                        @elseif(app()->getLocale() === 'ru')
                                            {{ $service->service_name_ru }}
                                        @else
                                            {{ $service->service_name }}
                                        @endif
                                    </h5>
                                    <div class="d-flex flex-row align-items-end heading accent-color mb-3">
                                        <h2 class="m-0 fw-semibold">${{$service->service_price}}</h2>
                                    </div>
                                    <span class="text-color-2">
                                        @if(app()->getLocale() === 'az')
                                            {!! $service->service_description_az !!}
                                        @elseif(app()->getLocale() === 'ru')
                                            {!! $service->service_description_ru !!}
                                        @else
                                            {!! $service->service_description !!}
                                        @endif
                                    </span>
                                </div>
                                <div class="w-100">
                                    <a href="https://wa.me/+994508863114" target="_blank" class="btn btn-accent rounded-pill d-flex flex-row gap-2 px-5 py-3">
                                        <span>{{ __('Contact Us') }}</span>
                                        <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-semibold"></i>
                                    </a>
                                </div>
                                <div class="d-flex flex-column gap-2">

                                    @php
                                        $locale = app()->getLocale();

                                        if ($locale === 'az') {
                                            $services_list = explode('/', $service->service_list_az);
                                        } elseif ($locale === 'ru') {
                                            $services_list = explode('/', $service->service_list_ru);
                                        } else {
                                            $services_list = explode('/', $service->service_list);
                                        }

                                        // Remove the last empty item if the list ends with a slash
                                        array_pop($services_list);
                                    @endphp
                                    

                                    @foreach ($services_list as $list_item)
                                        <div class="d-flex flex-row gap-3 align-items-center text-color-2">
                                            <i class="fa-solid fa-circle-check accent-color"></i>
                                            <span>{{$list_item}}</span>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>
@endsection