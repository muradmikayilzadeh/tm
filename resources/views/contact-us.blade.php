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
            style="background-image: url('https://prositus.rometheme.pro/html/demos/probiz/image/image-1920x1280-13.jpg'); height: 40vh;">
            <div class="bg-overlay"></div>
            <div class="r-container h-100 position-relative" style="z-index: 2;">
                <div class="d-flex flex-column w-100 h-100 justify-content-center text-white gap-3"
                    style="max-width: 895px;">
                    <h3 class="font-1 m-0 text-white fw-semibold">{{ __('Contact Us') }}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home', app()->getLocale()) }}">{{ __('HomePage') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Contact Us') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Section Contact Us -->
        <div class="section">
            <div class="r-container">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col mb-3">
                        <div class="d-flex flex-column gap-3 h-100 justify-content-center pe-xl-5">
                            <div class="d-flex flex-column gap-3">
                                <div class="linear-gradient">
                                    <span class="font-2 accent-color-3">{{ __('Get In Touch') }}</span>
                                </div>
                                <h3 class="font-1 fw-bold">{{ __('Contact Support Team To Grow Your Business') }}</h3>
                                <p class="text-color-2">{{ __('Contact text') }}</p>
                            </div>
                            <h4>{{ __('Contact Detail') }}</h4>
                            <div class="row row-cols-xl-2">
                                <div class="col mb-3">
                                    <div
                                        class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="rtmicon rtmicon-classic-phone fs-1 accent-color"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>{{ __('Phone') }}</h5>
                                            <span style="font-size: 12px;">
                                                +994508863114
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div
                                        class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="rtmicon rtmicon-envelope fs-1 accent-color"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>{{ __('Email') }}</h5>
                                            <span style="font-size: 12px;">
                                                contact@turalmammadov.com
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-xl-2">
                                <div class="col mb-3">
                                    <div
                                        class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="rtmicon rtmicon-location fs-1 accent-color"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>{{ __('Location') }}</h5>
                                            <span style="font-size: 12px;">
                                                Room 1421, Block B , Shuguang  Building, Futian Street, Yiwu City, China
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div
                                        class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="rtmicon rtmicon-globe fs-1 accent-color"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>{{ __('Website') }}</h5>
                                            <span style="font-size: 12px;">
                                                www.turalmammadov.com
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column p-5 rounded-4 w-100 shadow">
                            <div class="success_msg toast align-items-center w-100 shadow-none mb-3 border border-success rounded-pill my-4"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-success">
                                        <i class="fa-solid fa-check f-36 text-success"></i>
                                        Your Message Successfully Send.
                                    </div>
                                    <button type="button"
                                        class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success"
                                        data-bs-dismiss="toast" aria-label="Close"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 my-4 border rounded-pill"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-danger">
                                        <i class="fa-solid fa-triangle-exclamation f-36 text-danger"></i>
                                        Something Wrong ! Send Form Failed.
                                    </div>
                                    <button type="button"
                                        class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger"
                                        data-bs-dismiss="toast" aria-label="Close"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <form
                                class="d-flex flex-column h-100 justify-content-center w-100 needs-validation form"
                                action="{{ route('contact.submit', ['locale' => app()->getLocale()]) }}"
                                method="POST"
                                novalidate>
                                @csrf
                                <div class="mb-3">
                                    <input type="text" class="form-control py-3 px-4" name="full_name" id="full_name"
                                        placeholder="{{ __('Name') }}" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                                <div class="row row-cols-xl-2 row-cols-1">
                                    <div class="col mb-3">
                                        <input type="email" class="form-control py-3 px-4" name="email" id="email"
                                            placeholder="{{ __('Email') }}" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                    <div class="col mb-3">
                                        <input type="tel" class="form-control py-3 px-4" name="phone" id="phone"
                                            placeholder="{{ __('Phone') }}" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control py-3 px-4" id="msg" name="msg" rows="5"
                                        placeholder="{{ __('Your Message') }}" required></textarea>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="btn btn-accent submit_form py-3 w-100 d-flex justify-content-center gap-2 rounded-pill">
                                        {{ __('Send Message') }}
                                        <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-semibold"></i>
                                    </button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section p-0">
        <iframe loading="lazy" class="maps overflow-hidden"
            src="https://maps.google.com/maps?q=Room%201421,%20Block%20B%20Shuguang%20Building,%20Futian%20Street,%20Yiwu%20City&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
            title="Room 1421, Block B, Shuguang Building, Futian Street, Yiwu City"
            aria-label="Room 1421, Block B, Shuguang Building, Futian Street, Yiwu City"></iframe>
        </div>
    </main>
@endsection