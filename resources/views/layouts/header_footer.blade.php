@php
use App\Models\Blog;
$recentNews = Blog::orderBy('created_at', 'desc')->take(5)->get();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('image/tural.png')}}">
    <title>TuralMammadov - Business Consulting</title>

    <style>
        /* Loading Screen Styles */
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .loading-logo img {
            max-width: 250px;
            animation: fadeIn 2s infinite alternate;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0.5;
            }
            100% {
                opacity: 1;
            }
        }
    </style>

</head>

<body>

    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="loading-logo">
            <img src="{{ asset('image/tural2.png') }}" alt="Loading Logo">
        </div>
    </div>

    <!-- Header -->
    <div class="bg-accent-color py-3 d-none d-md-block">
        <div class="r-container">
            <div
                class="d-flex flex-xl-row flex-column justify-content-center justify-content-xl-between align-items-center font-2">
                <div
                    class="d-flex flex-xl-row flex-column flex-wrap align-items-center justify-content-center justify-content-xl-start text-white mb-3 mb-xl-0 gap-xl-5 gap-2">
                    <span class="d-flex flex-row align-items-center gap-2">
                        <i class="fa-solid fa-envelope text-white"></i>
                        contact@turalmammadov.com
                    </span>
                    <span class="d-flex flex-row align-items-center gap-2">
                        <i class="fa-solid fa-phone text-white"></i>
                        +994508863114
                    </span>
                    <span class="d-flex flex-row align-items-center gap-2">
                        <i class="fa-solid fa-location-dot text-white"></i>
                        Room 1421, Block B , Shuguang  Building, Futian Street, Yiwu City, China
                    </span>
                </div>
                <div class="social-container mb-xl-0 mb-3">
                    <a href="https://www.instagram.com/tural_talyan_" class="social-item">
                        <i class="fa-brands fa-xs fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/+994508863114" class="social-item">
                        <i class="fa-brands fa-xs fa-whatsapp"></i>
                    </a>
                    <a href="https://t.me/turalmammadov008" class="social-item">
                        <i class="fa-brands fa-xs fa-telegram"></i>
                    </a>
                    <a href="{{asset('image/wechat.jpeg')}}" class="social-item">
                        <i class="fa-brands fa-xs fa-weixin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <header class="sticky-top bg-accent-primary">
        <div class="r-container">
            <nav class="navbar navbar-expand-xl">
                <div class="container-fluid ps-3">
                    <div class="logo-container">
                        <a class="navbar-brand" href="{{ route('home', app()->getLocale()) }}"><img src="{{asset('image/tural2.png')}}" style="height:100px" alt="" class="img-fluid"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered accent-color"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto mb-2 mb-xl-0 gap-xl-4 gap-1">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('home', app()->getLocale()) }}">{{ __('HomePage') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('About Us') }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('about', app()->getLocale()) }}">{{ __('About Us') }}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('news', app()->getLocale()) }}">{{ __('News') }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('services', app()->getLocale()) }}">{{ __('Services') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('investmentOffers', app()->getLocale()) }}">{{ __('Investment Offers') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tenders', app()->getLocale()) }}">{{ __('Tenders') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contactUs', app()->getLocale()) }}">{{ __('Contact Us') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ strtoupper(app()->getLocale()) }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('language.switch', 'az') }}">AZ</a></li>
                                    <li><a class="dropdown-item" href="{{ route('language.switch', 'en') }}">EN</a></li>
                                    <li><a class="dropdown-item" href="{{ route('language.switch', 'ru') }}">RU</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="mb-xl-0 mb-3">
                            <a href="https://calendly.com/contact-turalmammadov/30min" target="_blank" class="btn btn-accent rounded-pill d-flex flex-row gap-2 px-4 py-2">
                                <span>{{ __('Consult Now') }}</span>
                                <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-semibold"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    @yield("content")

    <footer>
    <div class="section pb-0 position-relative" style="background-image: url('https://prositus.rometheme.pro/html/demos/probiz/image/image-1920x1280-3.jpg');">
        <div class="image-overlay"></div>
        <div class="r-container position-relative" style="z-index: 2;">
            <div class="d-flex flex-column gap-4">
                <div class="d-flex flex-column align-items-center justify-content-center mx-auto gap-3 text-center">
                    <a  href="{{ route('home', app()->getLocale()) }}">
                        <img src="{{asset('image/tural2.png')}}" alt="" class="img-fluid" width="180">
                    </a>
                    <p style="max-width: 667px;">
                        {{ __('Footer paragraph') }}
                    </p>
                </div>
                <div>
                    <div class="pb-xl-5 pb-0">
                        <div class="row row-cols-xl-3 row-cols-1">
                            <div class="col col-xl-5 mb-5">
                                <div class="d-flex flex-column gap-3">
                                    <div class="mb-2 w-max-content">
                                        <h4 class="font-1">{{ __('Quick Links') }}</h4>
                                    </div>
                                    <div class="row row-cols-xl-2 row-cols-1">
                                        <div class="col">
                                            <div class="d-flex flex-column gap-3">
                                                <ul class="list gap-2">
                                                    <li>
                                                        <a href="{{ route('home', app()->getLocale()) }}" class="link d-flex flex-row gap-3 align-items-center">
                                                            {{ __('HomePage') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('about', app()->getLocale()) }}" class="link d-flex flex-row gap-3 align-items-center">
                                                            {{ __('About Us') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('services', app()->getLocale()) }}" class="link d-flex flex-row gap-3 align-items-center">
                                                            {{ __('Services') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('investmentOffers', app()->getLocale()) }}" class="link d-flex flex-row gap-3 align-items-center">
                                                            {{ __('Investment Offers') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('tenders', app()->getLocale()) }}" class="link d-flex flex-row gap-3 align-items-center">
                                                            {{ __('Tenders') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column gap-3">
                                                <ul class="list gap-2">
                                                    <li>
                                                        <a href="{{ route('news', app()->getLocale()) }}" class="link d-flex flex-row gap-3 align-items-center">
                                                            {{ __('News') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('contactUs', app()->getLocale()) }}" class="link d-flex flex-row gap-3 align-items-center">
                                                            {{ __('Contact Us') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-7 mb-3">
                                <div class="row row-cols-xl-2 row-cols-1">
                                    <div class="col">
                                        <div class="d-flex flex-column gap-3">
                                            <div class="mb-2 w-max-content">
                                                <h4 class="font-1">
                                                    {{ __('Recent News') }}
                                                </h4>
                                            </div>
                                            <ul class="list gap-2">
                                                @foreach ($recentNews as $news)
                                                    <li>
                                                        <a href="{{ route('getNews', ['locale' => app()->getLocale(), 'slug' => $news->blog_slug]) }}"
                                                            class="link d-flex flex-row gap-3 align-items-center">
                                                            {{ Str::limit(app()->getLocale() === 'az' ? $news->blog_title_az : (app()->getLocale() === 'ru' ? $news->blog_title_ru : $news->blog_title), 30) }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col mb-3">
                                        <div class="d-flex flex-column gap-3">
                                            <div class="pb-2 w-max-content pe-3">
                                                <h4 class="font-1">
                                                {{ __('Contact Us') }}
                                                </h4>
                                            </div>
                                            <ul class="list gap-3">
                                                <li>
                                                    <div class="d-flex flex-row align-items-center gap-3">
                                                        <div class="contact-item">
                                                            <i class="rtmicon rtmicon-classic-phone fw-bold"></i>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <h5>
                                                             {{ __('Phone') }}
                                                            </h5>
                                                            <span>+994508863114</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex flex-row align-items-center gap-3">
                                                        <div class="contact-item">
                                                            <i class="rtmicon rtmicon-location fw-bold"></i>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <h5>
                                                             {{ __('Location') }}
                                                            </h5>
                                                            <span>Room 1421, Block B , Shuguang  Building, Futian Street, Yiwu City, China</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex flex-row align-items-center gap-3">
                                                        <div class="contact-item">
                                                            <i class="rtmicon rtmicon-envelope fw-bold"></i>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <h5>
                                                             {{ __('Email') }}
                                                            </h5>
                                                            <span>contact@turalmammadov.com</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="accent-color">
                        <div
                            class="d-flex flex-xl-row flex-column gap-3 justify-content-between align-items-center py-3">
                            <span class="text-xl-center text-color text-start fs-6 font-2">
                                Copyright © 2024 <a href="https://bgaitechstudio.com" target="_blank">Bgaitech</a>. All Rights Reserved.
                            </span>
                            <div class="social-container team mb-xl-0 mb-3 gap-2">
                                <a href="https://www.instagram.com/tural_talyan_" class="social-item-2">
                                    <i class="fa-brands fa-xs fa-instagram"></i>
                                </a>
                                <a href="https://wa.me/+994508863114" class="social-item-2">
                                    <i class="fa-brands fa-xs fa-whatsapp"></i>
                                </a>
                                <a href="https://t.me/turalmammadov008" class="social-item-2">
                                    <i class="fa-brands fa-xs fa-telegram"></i>
                                </a>
                                <a href="{{asset('image/wechat.jpeg')}}" class="social-item-2">
                                    <i class="fa-brands fa-xs fa-weixin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendor/fslightbox.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/swiper-script.js') }}"></script>
    <!-- <script src="{{ asset('js/submit-form.js') }}"></script> -->

    <script>
        window.addEventListener("load", function () {
            const loadingScreen = document.getElementById("loading-screen");
            const minLoadingTime = 1000; // Minimum loading time in milliseconds
            const startTime = performance.now(); // Get the current time when the script starts

            // Calculate the remaining time to reach the minimum loading time
            const elapsedTime = performance.now() - startTime;
            const remainingTime = Math.max(minLoadingTime - elapsedTime, 0);

            // Set a timeout to hide the loading screen after the remaining time
            setTimeout(() => {
                loadingScreen.style.display = "none";
            }, remainingTime);
        });
    </script>


</body>

</html>