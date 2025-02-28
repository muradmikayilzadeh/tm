@php
    use Illuminate\Support\Str;
    $locale = app()->getLocale();
@endphp

@extends('layouts.header_footer')
@section('content')
    <!-- Main -->
    <main>
        <!-- Banner -->
        <div class="section pb-0 position-relative" style="background-image: url('https://prositus.rometheme.pro/html/demos/probiz/image/image-1920x1280-14.jpg');">
            <div class="image-overlay"></div>
            <div class="r-container position-relative" style="z-index: 2;">
                <div class="row g-4 align-items-center">
                    <!-- Left Content -->
                    <div class="col-12 col-md-6 d-flex flex-column gap-4 px-4 mt-4">
                        <div class="linear-gradient">
                            <span class="font-2 accent-color-3">{{ __('Business Consulting') }}</span>
                        </div>
                        <h1 class="fw-semibold text-center text-md-start">{{ __('Empowering Your Businesses With Us') }}</h1>
                        <p class="text-center text-md-start">{{ __('First Banner Paragraph') }}</p>
                        <div class="d-flex flex-wrap gap-4 justify-content-center justify-content-md-start">
                            <a href="{{ route('about', app()->getLocale()) }}"
                                class="btn btn-accent rounded-pill d-flex flex-row gap-2 px-5 py-3">
                                <span>{{ __('Learn More') }}</span>
                                <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-semibold"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="col-12 col-md-6 mt-5 mb-3">
                        <div class="position-relative">
                            <!-- Background Image -->
                            <div class="d-flex justify-content-center position-relative w-100 align-items-end">
                                <img src="https://prositus.rometheme.pro/html/demos/probiz/image/bg.png" class="img-fluid" style="opacity:0" alt="">
                                <!-- Foreground Image -->
                                <img src="{{ asset('image/tural.jpeg') }}" alt="" class="img-fluid position-absolute w-75"
                                    style="object-fit: cover; z-index: 3;">
                            </div>
                            <!-- Floating Box -->
                            <div class="floating-bottom-1" style="z-index: 4;">
                                <div class="d-flex align-items-center flex-column px-4 py-3 rounded-2 bg-white shadow-lg">
                                    <h2 class="accent-color-3 fw-semibold">15+</h2>
                                    <h5 class="accent-color-3">{{ __('Years Experience') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Section Partner -->
        <div class="section">
            <div class="r-container">
                <div class="swiper swiperImage">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-0">
                            <div class="d-flex justify-content-center">
                                <img src="https://prositus.rometheme.pro/html/demos/probiz/image/Logo%201.png" class="img-fluid" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide p-0">
                            <div class="d-flex justify-content-center">
                                <img src="https://prositus.rometheme.pro/html/demos/probiz/image/Logo%202.png" class="img-fluid " alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide p-0">
                            <div class="d-flex justify-content-center">
                                <img src="https://prositus.rometheme.pro/html/demos/probiz/image/Logo%203.png" class="img-fluid" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide p-0">
                            <div class="d-flex justify-content-center">
                                <img src="https://prositus.rometheme.pro/html/demos/probiz/image/Logo%204.png" class="img-fluid" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide p-0">
                            <div class="d-flex justify-content-center">
                                <img src="https://prositus.rometheme.pro/html/demos/probiz/image/Logo%205.png" class="img-fluid" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide p-0">
                            <div class="d-flex justify-content-center">
                                <img src="https://prositus.rometheme.pro/html/demos/probiz/image/Logo%206.png" class="img-fluid" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide p-0">
                            <div class="d-flex justify-content-center">
                                <img src="https://prositus.rometheme.pro/html/demos/probiz/image/Logo%207.png" class="img-fluid" alt="image">
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <!-- Section About Us -->
        <div class="section pt-0">
            <div class="r-container">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col col-xl-6 mb-3">
                        <div class="d-flex position-relative w-100 bottom-0 pe-0 h-60">
                            <div class="position-relative px-xl-5 px-4 pt-xl-5 pt-4 h-60 start-0"
                                style="z-index: 2; object-fit: cover;">
                                <img src="{{ asset('image/tural_emin2.jpeg') }}" class="img-fluid rounded-3" alt="">
                            </div>
                            <!-- <img src="https://prositus.rometheme.pro/html/demos/probiz/image/Ellipse.png" alt="" class="img-fluid position-absolute top-0 start-0 w-xl-100 w-50"> -->
                            <div class="d-flex flex-row position-absolute end-0 bottom-0 gap-3 mt-3 align-items-center px-4 py-3 mb-xl-5 mb-3 rounded-3 bg-accent-color" style="z-index: 2;">
                                <div class="icon-box">
                                    <i class="fs-3 fa-solid fa-phone text-white"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h4 class="text-white">{{ __('Consult? Call us') }}</h4>
                                    <h6 class="text-white">
                                        +994508863114
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-6 px-4 mb-3">
                        <div class="d-flex flex-column gap-4 pe-xl-5 pb-5">
                            <div class="linear-gradient">
                                <span class="font-2 accent-color-3">{{ __('About Us') }}</span>
                            </div>
                            <h3 class="font-1 fw-bold">{{ __('Taking Your Business To The Next Level') }}</h3>
                            <p class="text-color-2">{{ __('About Us Section Paragraph') }}</p>
                            <div
                                class="d-flex flex-xl-row flex-column gap-3 px-4 align-items-start align-items-xl-center">
                                <div class="icon-box">
                                    <i class="rtmicon rtmicon-light-bulb accent-color" style="font-size: 60px;"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h4>{{ __('Our Vision') }}</h4>
                                    <span>{{ __('Our Vision Text') }}</span>
                                </div>
                            </div>
                            <div
                                class="d-flex flex-xl-row flex-column gap-3 px-4 align-items-start align-items-xl-center">
                                <div class="icon-box">
                                    <i class="rtmicon rtmicon-file accent-color" style="font-size: 60px;"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h4>{{ __('Our Mission') }}</h4>
                                    <span>{{ __('Our Mission Text') }}</span>
                                </div>
                            </div>
                            <div class="w-max-content mt-3">
                                <a href="{{ route('about', app()->getLocale()) }}"
                                    class="btn btn-accent rounded-pill d-flex flex-row gap-2 px-5 py-3">
                                    <span>{{ __('Learn More') }}</span>
                                    <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-semibold"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Services -->
        <!-- <div class="section bg-accent-color-4" style="background-image: url(image/Background.png);">
            <div class="r-container">
                <div class="d-flex flex-column gap-4 align-items-center">
                    <div class="d-flex flex-column gap-3 text-center align-items-center" style="max-width: 667px;">
                        <div class="linear-gradient">
                            <span class="font-2 accent-color-3">Services</span>
                        </div>
                        <h3>See What Your Business Needs</h3>
                        <p class="text-color-2">We are specialize in transforming businesses and fostering growth
                            through strategic insights and unparalleled expertise.</p>
                    </div>
                    <div class="row row-cols-xl-3 row-cols-1">
                        <div class="col mb-3">
                            <div class="card card-service img-hover h-100" style="--url-image:url(../image/BGOverlay.png)">
                                <div class=" d-flex flex-column gap-3 justify-content-between align-items-center text-center p-5 position-relative"
                                    style="z-index: 2;">
                                    <div class="icon-box">
                                        <i class="rtmicon rtmicon-profit accent-color" style="font-size: 60px;"></i>
                                    </div>
                                    <h4>Financial Analysis</h4>
                                    <p>Conduct financial health checks and profitability analysis. Develop financial
                                        forecasting models and budgeting strategies.</p>
                                    <a href="service_detail.html" class="read-more">
                                        <div class="d-flex flex-row gap-3 align-items-center">
                                            <span class="fw-semibold">Learn More</span>
                                            <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-bold"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card card-service img-hover h-100" style="--url-image:url(../image/BGOverlay.png)">
                                <div class=" d-flex flex-column gap-3 justify-content-between align-items-center text-center p-5 position-relative"
                                    style="z-index: 2;">
                                    <div class="icon-box">
                                        <i class="rtmicon rtmicon-global-economy accent-color"
                                            style="font-size: 60px;"></i>
                                    </div>
                                    <h4>Strategic Planning</h4>
                                    <p>Develop long-term and short-term strategies aligned with business goals. Conduct
                                        SWOT analysis and market research.</p>
                                    <a href="service_detail.html" class="read-more">
                                        <div class="d-flex flex-row gap-3 align-items-center">
                                            <span class="fw-semibold">Learn More</span>
                                            <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-bold"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card card-service img-hover h-100" style="--url-image:url(../image/BGOverlay.png)">
                                <div class=" d-flex flex-column gap-3 justify-content-between align-items-center text-center p-5 position-relative"
                                    style="z-index: 2;">
                                    <div class="icon-box">
                                        <i class="rtmicon rtmicon-budget-planning accent-color"
                                            style="font-size: 60px;"></i>
                                    </div>
                                    <h4>Market Research</h4>
                                    <p>Perform market segmentation and competitive analysis. Identify emerging trends
                                        and customer preferences.</p>
                                    <a href="service_detail.html" class="read-more">
                                        <div class="d-flex flex-row gap-3 align-items-center">
                                            <span class="fw-semibold">Learn More</span>
                                            <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-bold"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="services.html" class="btn btn-accent rounded-pill d-flex flex-row gap-2 px-5 py-3">
                        <span>All Services</span>
                        <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-semibold"></i>
                    </a>
                </div>
            </div>
        </div> -->

        <!-- Section Why Choose Us -->
        <div class="section">
            <div class="r-container">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col col-xl-5 ps-0 mt-5 mb-3">
                        <div class="col position-relative">
                            <div class="d-flex position-relative w-100 bottom-0 pe-0 align-items-end">
                                <img src="https://prositus.rometheme.pro/html/demos/probiz/image/bg2.png" class="img-fluid position-relative" style="z-index: 1;" alt="">
                                <img src="{{ asset('image/tural_klubda.png') }}" alt="" class="img-fluid w-100 position-absolute"
                                    style="object-fit: cover; z-index: 3;">
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-7 px-4 mt-4 mb-3">
                        <div class="d-flex flex-column gap-4 pe-xl-5">
                            <div class="linear-gradient">
                                <span class="font-2 accent-color-3">{{ __('Why Choose Us') }}</span>
                            </div>
                            <h2 class="fw-semibold">{{ __('Right Reason for Why You Choose Us') }}</h2>
                            <p>
                                {{ __('Why Choose Us paragraph') }}
                            </p>
                            <div class="position-relative d-flex flex-xl-row flex-column gap-3 px-4">
                                <div class="floating-top">
                                    <h3 class="accent-color-2 fw-semibold">01</h3>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5>{{ __('Big Connections') }}</h5>
                                    <span>{{ __('Big Connections Text') }}</span>
                                </div>
                            </div>
                            <div class="position-relative d-flex flex-xl-row flex-column gap-3 px-4">
                                <div class="floating-top-1">
                                    <h3 class="accent-color-2 fw-semibold">02</h3>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5>{{ __('High Experience') }}</h5>
                                    <span>{{ __('High Experience Text') }}</span>
                                </div>
                            </div>
                            <div class="position-relative d-flex flex-xl-row flex-column gap-3 px-4">
                                <div class="floating-top-1">
                                    <h3 class="accent-color-2 fw-semibold">03</h3>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5>{{ __('Better Market Research') }}</h5>
                                    <span>{{ __('Better Market Research Text') }}</span>
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

        <!-- Team -->
        <div class="section">
            <div class="r-container">
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

        <!-- Testimonials -->
        <div class="section">
            <div class="r-container d-flex flex-column gap-4">
                <div class="d-flex flex-column gap-3 text-center mx-auto align-items-center" style="max-width: 567px;">
                    <div class="linear-gradient">
                        <span class="font-2 accent-color-3">{{ __('Testimonials') }}</span>
                    </div>
                    <h3 class="fw-semibold">{{ __('Success Business Stories That Inspire') }}</h3>
                    <p class="text-color-2">{{ __('Testimonials paragraph') }}.</p>
                </div>
                <div class="overflow-hidden">
                    <div class="swiper swiperTestimonials">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div
                                        class="testimonial-container px-5 py-5 border border-1 border-accent-color rounded-3 justify-content-between">
                                        <div class="d-flex flex-column gap-3">
                                            <div class="d-flex flex-row align-items-center gap-3">
                                                <div class="d-flex flex-column">
                                                    <!-- Testimonial Name -->
                                                    <h5>
                                                        {{ app()->getLocale() === 'az' ? $testimonial->testimonial_name_az : 
                                                        (app()->getLocale() === 'ru' ? $testimonial->testimonial_name_ru : 
                                                        $testimonial->testimonial_name) }}
                                                    </h5>
                                                    <!-- Testimonial Company -->
                                                    <span class="font-2">
                                                        {{ $testimonial->testimonial_company ?? 'Company' }}
                                                    </span>
                                                    <!-- Star Rating -->
                                                    <div class="flex-row">
                                                        @for($i = 0; $i < 5; $i++)
                                                            <i class="fa-solid fa-star" style="color: {{ $i < ($testimonial->testimonial_stars ?? 0) ? '#FFD43B' : 'var(--text-color-1)' }};"></i>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Testimonial Description -->
                                            <span class="font-2 fst-italic text-color-2">
                                                "{{ app()->getLocale() === 'az' ? $testimonial->testimonial_description_az : 
                                                    (app()->getLocale() === 'ru' ? $testimonial->testimonial_description_ru : 
                                                    $testimonial->testimonial_description) }}"
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section FAQs -->
        <div class="section" style="background-image: url(image/BG3.png);">
            <div class="r-container">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col col-xl-6 px-4 mb-3">
                        <div class="d-flex flex-column gap-4 pe-xl-5 pb-5">
                            <div class="linear-gradient">
                                <span class="font-2 accent-color-3">{{ __('FAQs') }}</span>
                            </div>
                            <h3 class="font-1 fw-bold">{{ __('Let’s Ask Anything About Business') }}</h3>
                            <p class="text-color-2">{{ __('FAQs paragraph') }}</p>

                            <div class="accordion mt-3 d-flex flex-column gap-4" id="faqAccordion">
                                @foreach($faqs as $index => $faq)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $index }}">
                                            <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button" 
                                                    data-bs-toggle="collapse" 
                                                    data-bs-target="#collapse{{ $index }}" 
                                                    aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                                                    aria-controls="collapse{{ $index }}">
                                                @if(app()->getLocale() === 'az')
                                                    {{ $faq->faq_question_az }}
                                                @elseif(app()->getLocale() === 'ru')
                                                    {{ $faq->faq_question_ru }}
                                                @else
                                                    {{ $faq->faq_question }}
                                                @endif
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $index }}" 
                                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                                            aria-labelledby="heading{{ $index }}" 
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                @if(app()->getLocale() === 'az')
                                                    {{ $faq->faq_response_az }}
                                                @elseif(app()->getLocale() === 'ru')
                                                    {{ $faq->faq_response_ru }}
                                                @else
                                                    {{ $faq->faq_response }}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="col col-xl-6 mb-3">
                        <div class="d-flex position-relative w-100 bottom-0 pe-0">
                            <div class="position-relative start-0"
                                style=" z-index: 2;">
                                <img src="{{ asset('image/tural_emin1.jpeg') }}" class="img-fluid rounded-3" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog -->
        <div class="section">
            <div class="r-container d-flex flex-column gap-4">
                <div class="d-flex flex-xl-row flex-column-reverse gap-3">

                    @foreach($blogs as $blog)
                    <div class="col mb-3">
                        <div class="card d-flex flex-column gap-3">
                            <div class="position-relative overflow-hidden rounded-3">
                                <img src="{{ asset('storage/' . $blog->blog_thumbnail) }}" alt="image" class="img-fluid">
                                <div class="bg-overlay-2"></div>
                                <div class="position-absolute top-0 left-0 px-4 py-2 bg-accent-color-3 rounded-2"
                                    style="margin-top: 1rem; margin-left: 1rem;">
                                    <span class="text-white">{{ $blog->created_at->format('d F Y') }}</span>
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
                                <p class="text-color-2">
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

                    <div class="col mb-3">
                        <div class="d-flex flex-column gap-4 mx-auto" style="max-width: 867px;">
                            <div class="linear-gradient">
                                <span class="font-2 accent-color-3">{{ __('Recent News') }}</span>
                            </div>

                            <h3 class="fw-semibold">{{ __('Read Our Recent News & Insights') }}</h3>
                            <p class="text-color-2">{{ __('Recent News paragraph') }}
                            </p>
                            <div class="w-max-content">
                                <a href="{{ route('news', app()->getLocale()) }}" class="btn btn-accent rounded-pill d-flex flex-row gap-2 px-5 py-3">
                                    <span>{{ __('View More') }}</span>
                                    <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-semibold"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection