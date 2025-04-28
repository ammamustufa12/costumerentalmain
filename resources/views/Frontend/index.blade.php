<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

@include('Frontend_layouts.heade')

<body class="font-2 bg-surface-5">

    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="icon icon-arrow-right"></span>
    </button>

    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <!-- Top Bar-->
        <div class="tf-topbar bg-light-purple-2 topbar-bg">
            <div class="container">
                <div class="topbar-wraper">
                    <div class="d-none d-xl-block flex-shrink-0">
                        <ul class="tf-social-icon topbar-left">
                            <li><a href="https://www.facebook.com/" class="social-item social-facebook"><i
                                        class="icon icon-fb"></i></a></li>
                            <li><a href="https://www.instagram.com/" class="social-item social-instagram"><i
                                        class="icon icon-instagram"></i></a>
                            </li>
                            <li><a href="https://x.com/" class="social-item social-x"><i class="icon icon-x"></i></a>
                            </li>
                            <li><a href="https://www.snapchat.com/" class="social-item social-snapchat"><i
                                        class="icon icon-snapchat"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="overflow-hidden">
                        <div class="topbar-center marquee-wrapper">
                            <div class="initial-child-container">
                                <div class="marquee-child-item">
                                    <p>🎉 Free Demo Classes Available</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                
                                <div class="marquee-child-item">
                                    <p>💃 Costume Rentals for All Dance Styles</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                
                                <div class="marquee-child-item">
                                    <p>🕺 Join Our Zumba, Hip-Hop & Bharatanatyam Classes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                
                                <div class="marquee-child-item">
                                    <p>🎶 Learn Guitar, Keyboard, Drums & Vocals</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                
                                <div class="marquee-child-item">
                                    <p>📅 Personal Choreography Available</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                
                                <!-- Repeat for smooth scrolling -->
                                <div class="marquee-child-item">
                                    <p>🎉 Free Demo Classes Available</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                
                                <div class="marquee-child-item">
                                    <p>💃 Costume Rentals for All Dance Styles</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                
                                <div class="marquee-child-item">
                                    <p>🕺 Join Our Zumba, Hip-Hop & Bharatanatyam Classes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                
                                <div class="marquee-child-item">
                                    <p>🎶 Learn Guitar, Keyboard, Drums & Vocals</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                
                                <div class="marquee-child-item">
                                    <p>📅 Personal Choreography Available</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-none d-xl-block flex-shrink-0">
                        <div class="topbar-right">
                            <div class="tf-languages">
                                <select class="image-select center style-default type-languages">
                                    <option>English</option>
                                    <option>العربية</option>
                                    <option>简体中文</option>
                                    <option>اردو</option>
                                </select>
                            </div>
                            <div class="tf-currencies">
                                <select class="image-select center style-default type-currencies">
                                    <option selected data-thumbnail="images/country/us.png">United States (USD $)
                                    </option>
                                    <option data-thumbnail="images/country/fr.png">France (EUR €)</option>
                                    <option data-thumbnail="images/country/ger.png">Germany (EUR €)</option>
                                    <option data-thumbnail="images/country/vn.png">Vietnam (VND ₫)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Top Bar -->
        <!-- Header -->
        @include('Frontend_layouts.navbar')
        <!-- /Header -->

        <!-- Slider -->
        <section class="tf-slideshow slider-skincare slider-default">
            <div class="swiper tf-sw-slideshow slider-effect-fade" data-preview="1" data-tablet="1" data-mobile="1"
                data-space="0" data-space-mb="0" data-loop="true" data-auto-play="true">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-wrap">
                            <div class="image">
                                <img src="{{ asset('frontend_assets/images/slider/slider1.jpg')}}"
                                    data-src="{{ asset('frontend_assets/images/slider/slider1.jpg')}}" alt="" class="lazyload">
                            </div>
                            <div class="box-content">
                                <div class="container">
                                    <div class="content-slider text-center ">
                                        <div class="box-title-slider">
                                            <h2 class="heading display-xl-2 text-white fw-medium fade-item fade-item-1">
                                                Dress to Impress
                                            </h2>
                                            <p class="sub text-xl-2 text-white fade-item fade-item-2 ">
                                                Find the perfect costume for every occasion

                                            </p>
                                        </div>
                                        <div class="box-btn-slider fade-item fade-item-3">
                                            <a href="shop-default.html"
                                                class="tf-btn btn-white animate-btn animate-dark ">
                                                Costume Collection
                                                <i class="icon icon-arr-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-wrap">
                            <div class="image">
                                <img src="{{ asset('frontend_assets/images/slider/slider2.jpg')}}"
                                    data-src="{{ asset('frontend_assets/images/slider/slider2.jpg')}}" alt="" class="lazyload">
                            </div>
                            <div class="box-content">
                                <div class="container">
                                    <div class="content-slider text-center ">
                                        <div class="box-title-slider">
                                            <h2
                                                class="heading display-xl-2 text-white fw-medium fade-item fade-item-1 ">
                                                Be Whoever You Want to Be

                                            </h2>
                                            <p class="sub text-xl-2 text-white fade-item fade-item-2 ">
                                                Rent costumes for parties, Halloween, and more!
                                            </p>
                                        </div>
                                        <div class="box-btn-slider fade-item fade-item-3">
                                            <a href="shop-default.html"
                                                class="tf-btn btn-white animate-btn animate-dark ">
                                                Costume Collection
                                                <i class="icon icon-arr-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-wrap">
                            <div class="image">
                                <img src="{{ asset('frontend_assets/images/slider/slider3.jpg')}}"
                                    data-src="{{ asset('frontend_assets/images/slider/slider3.jpg')}}" alt="" class="lazyload">
                            </div>
                            <div class="box-content">
                                <div class="container">
                                    <div class="content-slider text-center ">
                                        <div class="box-title-slider">
                                            <h2
                                                class="heading display-xl-2 text-white fw-medium fade-item fade-item-1 ">
                                                Step Into Character
                                            </h2>
                                            <p class="sub text-xl-2 text-white fade-item fade-item-2 ">
                                                Premium costumes for stage, events, and fantasies
                                            </p>
                                        </div>
                                        <div class="box-btn-slider fade-item fade-item-3">
                                            <a href="shop-default.html"
                                                class="tf-btn btn-white animate-btn animate-dark ">
                                                Costume Collection
                                                <i class="icon icon-arr-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-pagination">
                    <div class="container">
                        <div class="sw-dots sw-pagination-slider justify-content-center"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Slider -->

        <!-- Marquee -->
    <div class="marquee-sale marquee-border font-main">
    
        <div class="marquee-wrapper">
        <div class="initial-child-container">
            <div class="marquee-child-item">
                <p class="text-md fw-medium">🎉 Free Demo Classes Available – Book Now!</p>
            </div>
            <div class="marquee-child-item"><i class="icon-flash-star"></i></div>

            <div class="marquee-child-item">
                <p class="text-md fw-medium">💃 Costume Rentals for All Dance Styles</p>
            </div>
            <div class="marquee-child-item"><i class="icon-flash-star"></i></div>

            <div class="marquee-child-item">
                <p class="text-md fw-medium">🕺 New Batches Starting Soon – Register Today!</p>
            </div>
            <div class="marquee-child-item"><i class="icon-flash-star"></i></div>

            <div class="marquee-child-item">
                <p class="text-md fw-medium">🎶 Music Classes – Guitar, Keyboard, Vocals & More</p>
            </div>
            <div class="marquee-child-item"><i class="icon-flash-star"></i></div>

            <div class="marquee-child-item">
                <p class="text-md fw-medium">📅 Personal Choreography Slots Available</p>
            </div>
            <div class="marquee-child-item"><i class="icon-flash-star"></i></div>
        </div>
        </div>
    
    </div>

        <!-- /Marquee -->

      <!-- Categories -->
<section class="flat-spacing-6">
    <div class="container">
        <div class="flat-title wow fadeInUp">
            <h4 class="title">Categories</h4>
        </div>
        <div dir="ltr" class="xl-px-26 swiper tf-swiper wow fadeInUp" data-swiper='{
            "slidesPerView": 2,
            "spaceBetween": 12,
            "speed": 800,
            "observer": true,
            "observeParents": true,
            "slidesPerGroup": 2,
            "navigation": {
                "clickable": true,
                "nextEl": ".nav-next-women",
                "prevEl": ".nav-prev-women"
            },
            "pagination": { "el": ".sw-pagination-women", "clickable": true },
            "breakpoints": {
                "575": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 2 },
                "768": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 3 },
                "1200": { "slidesPerView": 4, "spaceBetween": 64, "slidesPerGroup": 4 }
            }
        }'>
            <div class="swiper-wrapper">
                @foreach($CostumesCategory as $category)
                    <div class="swiper-slide">
                        <div class="wg-cls style-circle hover-img">
                            <a href="{{ route('frontend.costumes.bycategory', $category->slug) }}" class="image img-style d-block">
                                <img src="{{ asset('storage/' . $category->image) }}"
                                     alt="{{ $category->name }}" class="lazyload">
                            </a>
                            <div class="cls-content text-center">
                                <a href="#" class="link text-md fw-medium ">{{ $category->name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <span class="d-flex d-xl-none sw-dot-default sw-pagination-women justify-content-center"></span>
        </div>
    </div>
</section>
<!-- /Categories -->


        <!-- Best Seller -->
        <div class="flat-spacing-2 bg-light-orange-4">
            <div class="container">
                <div class="flat-animate-tab flat-controltab-nav">
                    <div class="flat-title">
                        <ul class="menu-tab-line style-lg style-lg2" role="tablist">
                            <li class="nav-tab-item" role="presentation">
                                <a href="#hot" class=" tab-link active" data-bs-toggle="tab">What’s Hot?</a>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="hot" role="tabpanel">
                            <div dir="ltr" class="swiper tf-swiper" data-swiper='{
                                    "slidesPerView": 2,
                                    "spaceBetween": 12,
                                    "speed": 800,
                                    "observer": true,
                                    "observeParents": true,
                                    "slidesPerGroup": 2,
                                    "navigation": {
                                        "clickable": true,
                                        "nextEl": ".nav-next-hot",
                                        "prevEl": ".nav-prev-hot"
                                    },
                                    "pagination": { "el": ".sw-pagination-hot", "clickable": true },
                                    "breakpoints": {
                                    "768": { "slidesPerView": 3, "spaceBetween": 24, "slidesPerGroup": 3 },
                                    "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4}
                                    }
                                }'>
                                <div class="swiper-wrapper">
                                    @foreach($costumes as $costume)
    <div class="swiper-slide">
        <div class="card-product style-5 text-center">
            <div class="card-product-wrapper asp-ratio-0">
                <a href="product-detail.html" class="product-img">
                    @php
                    $images = is_array($costume->images) ? $costume->images : json_decode($costume->images, true);
                    $firstImage = $images[0] ?? 'default.jpg';
                    $secondImage = $images[1] ?? $firstImage; // fallback to first if second not available
                @endphp
                    <img class="img-product lazyload"
                        data-src="{{ asset('storage/' . $firstImage) }}"
                        src="{{ asset('storage/' . $firstImage) }}"
                        alt="image-product">
                    <img class="img-hover lazyload"
                        data-src="{{ asset('storage/' . $secondImage) }}"
                        src="{{ asset('storage/' . $secondImage) }}"
                        alt="image-product">
                </a>
                <div class="on-sale-wrap"><span class="on-sale-item">{{ $costume->discount }}%</span></div>
                <ul class="list-product-btn">
                    <li class="wishlist">
                        <a href="javascript:void(0);"
                            class="box-icon bg-surface hover-tooltip tooltip-left">
                            <span class="icon icon-heart2"></span>
                            <span class="tooltip">Add to Wishlist</span>
                        </a>
                    </li>
                    <li>
                        <a href="#quickView" data-bs-toggle="modal"
                            class="box-icon bg-surface quickview hover-tooltip tooltip-left">
                            <span class="icon icon-view"></span>
                            <span class="tooltip">Quick View</span>
                        </a>
                    </li>
                    <li class="compare">
                        <a href="#compare" data-bs-toggle="modal"
                            class="box-icon bg-surface hover-tooltip tooltip-left">
                            <span class="icon icon-compare"></span>
                            <span class="tooltip">Add to Compare</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-product-info">
                <a href="{{ route('product.detail', $costume->id) }}" class="name-product link fw-medium body-text ">
                    {{ $costume->name }}
                </a>
                <p class="price-wrap fw-medium">
                    <span class="price-new text-primary">{{ 'AED ' . number_format($costume->price - ($costume->price * ($costume->discount / 100)), 2) }}</span>
                    <span class="price-old">{{ 'AED ' . number_format($costume->price, 2) }}</span>
                </p>
                <div class="btn-addcart">
                    {{-- <a href="{{ route('product.detail', $costume->id) }}" data-bs-toggle="offcanvas"
                        class="tf-btn btn-dark3 fw-normal hover-primary">View Details</a> --}}
                        
                        <a href="{{ route('product.detail', $costume->id) }}" class="name-product link fw-medium body-text ">
                            View Details </a> 
                </div>
                <div class="in-stock stock">
                    <span class="dot"></span>
                    In stock, ready to ship
                </div>
            </div>
        </div>
    </div>
@endforeach

                                </div>
                                <div class="d-flex d-xl-none sw-dot-default sw-pagination-hot justify-content-center">
                                </div>
                            </div>
                            <div class="box-nav-swiper style-2">
                                <div class="swiper-button-prev d-xl-flex nav-swiper nav-prev-hot relative"></div>
                                <div class="swiper-button-next d-xl-flex nav-swiper nav-next-hot relative"></div>
                            </div>
                        </div>

                               <!-- Best Sellers -->
             
                    </div>
                </div>
            </div>
        </div>
        <!-- /Best Seller -->

        <!-- Banner1 With Text -->
        <section class="flat-spacing-14 s-banner-with-text banner-text-skincare">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="hover-shine hover-img">
                            <div class="image-banner image shine-item img-style">
                                <img src="{{ asset('frontend_assets/images/banner/skincare-2.jpg')}}" data-src="{{ asset('frontend_assets/images/banner/dance_hiphop.jpg')}}" alt=""
                                    class="lazyload">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-banner wow fadeInRight">
                            <div class="box-title-banner">
                                <h4 class="letter-0">
                                    Unleash Your Inner Rhythm
                                </h4>
                                <p class="text-xl-2">
                                    Join our high-energy Hip-Hop dance classes and express <br> yourself through every beat.
                                </p>
                            </div>
                            <div class="box-btn-banner">
                                <a href="shop-default.html" class="tf-btn animate-btn btn-red btn-lg fw-normal">
                                    Enroll Now

                                    <i class="icon-arr-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner1 With Text -->
        <!-- Banner2 With Text -->
        <section class="flat-spacing-3 pt-0 s-banner-with-text banner-text-skincare">
            <div class="container">
                <div class="row flex-wrap-reverse">
                    <div class="col-md-6">
                        <div class="content-banner wow fadeInLeft">
                            <div class="box-title-banner">
                                <h4 class="letter-0">
                                    Grace in Every Step
                                </h4>
                                <p class="text-xl-2">
                                    Experience the elegance and tradition of Bharatanatyam <br> with our expert-led classes.
                                </p>
                            </div>
                            <div class="box-btn-banner">
                                <a href="shop-default.html" class="tf-btn animate-btn btn-red btn-lg fw-normal">
                                    Enroll Now

                                    <i class="icon-arr-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hover-shine hover-img">
                            <div class="image-banner image shine-item img-style">
                                <img src="{{ asset('frontend_assets/images/banner/skincare-1.jpg')}}" data-src="{{ asset('frontend_assets/images/banner/dance_bharat.jpg')}}" alt=""
                                    class="lazyload">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner2 With Text -->

<!-- Banner3 With Text -->
<section class="flat-spacing-14 s-banner-with-text banner-text-skincare">
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <div class="hover-shine hover-img">
                    <div class="image-banner image shine-item img-style">
                        <img src="{{ asset('frontend_assets/images/banner/skincare-2.jpg')}}" data-src="{{ asset('frontend_assets/images/banner/dance_bollywood.jpg')}}" alt=""
                            class="lazyload">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-banner wow fadeInRight">
                    <div class="box-title-banner">
                        <h4 class="letter-0">
                            Dance Like a Star
                        </h4>
                        <p class="text-xl-2">
                            Dive into the world of vibrant moves and energetic beats <br> with our Bollywood dance classes.
                        </p>
                    </div>
                    <div class="box-btn-banner">
                        <a href="shop-default.html" class="tf-btn animate-btn btn-red btn-lg fw-normal">
                            Enroll Now

                            <i class="icon-arr-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Banner3 With Text -->
        
        <!-- Inspired For You -->
        <section class="pb-5">
            <div class="container">
                <div class="flat-title wow fadeInUp">
                    <h4 class="title">Dance Classes</h4>
                </div>
                <div dir="ltr" class="swiper tf-swiper" data-swiper='{
                    "slidesPerView": 1,
                    "spaceBetween": 12,
                    "speed": 800,
                    "observer": true,
                    "observeParents": true,
                    "slidesPerGroup": 1,
                    "navigation": {
                        "clickable": true,
                        "nextEl": ".nav-next-video",
                        "prevEl": ".nav-prev-video"
                    },
                    "pagination": { "el": ".sw-pagination-video", "clickable": true },
                    "breakpoints": {
                        "576": { "slidesPerView": 1.5, "spaceBetween": 12, "slidesPerGroup": 1 },
                        "768": { "slidesPerView": 2, "spaceBetween": 24, "slidesPerGroup": 2 },
                        "1200": { "slidesPerView": 3, "spaceBetween": 24, "slidesPerGroup": 3}
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        @foreach($danceClasses as $dance)
    @php
        $images = is_array($dance->images) ? $dance->images : json_decode($dance->images, true);
        $mainImage = $images[0] ?? 'default.jpg';
        $video = $dance->video ?? 'frontend_assets/images/video/skincare-3.mp4';
    @endphp
    <div class="swiper-slide">
        <div class="cls-video">
            {{-- <video class="hover-video" width="464" height="649" muted playsinline loop autoplay>
                <source src="{{ asset('storage/' . $mainImage) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video> --}}
            <img src="{{ asset('storage/' . ($dance->images[0] ?? 'frontend_assets/images/default-class.jpg')) }}"
            alt="{{ $dance->name }}"
            class="poster"
            style="width: 100%; height: auto; object-fit: cover;">
            <div class="cls-content">
                <div class="box-product">
                    <div class="img-product">
                        <img src="{{ asset('storage/' . $mainImage) }}"
                             alt="{{ $dance->name }}">
                    </div>
                    <div class="info-product">
                        <a href="{{ route('danceclass.detail', $dance->id) }}"
                           class="name link fw-medium text-md text-white text-line-clamp-2">
                            {{ $dance->name }}
                        </a>
                        <p class="price-wrap fw-medium text-md text-white">
                            <span class="price-new">${{ $dance->price }}</span>
                            @if($dance->discount > 0)
                                <span class="price-old">
                                    ${{ number_format($dance->price / (1 - ($dance->discount / 100)), 2) }}
                                </span>
                            @endif
                        </p>
                    </div>
                </div>
                <a href="#quickView" data-bs-toggle="modal" class="icon hover-tooltip">
                    <i class="icon-view"></i>
                    <span class="tooltip">Quick view</span>
                </a>
            </div>
        </div>
    </div>
@endforeach


                    </div>
                    <div class="d-flex d-xl-none sw-dot-default sw-pagination-video justify-content-center"></div>
                </div>

            </div>
        </section>
        <!-- /Inspired For You -->


        <!-- Testimonial -->
        <div class="flat-spacing-2 bg-light-orange-4">
            <div class="container">
                
                <div class="wrapper-thumbs-tes-3 flat-thumbs-tes" data-effect="fade">
                    <div class="box-left wow fadeInUp">
                        <div dir="ltr" class="swiper tf-tes-main" data-space-lg="24" data-space="12">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="box-testimonial-main text-center">
                                        <span class="quote icon-quote3"></span>
                                        <div class="content">
                                            <div class="list-star-default justify-content-center">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <p class="text-review ">I’ve been using this skincare line for a
                                                month, and the results are amazing! My skin feels smoother, looks
                                                brighter, and has a healthy glow. The products are gentle yet effective,
                                                and I love the natural ingredients. I’m definitely a fan!</p>
                                            <div class="name text-md fw-semibold ">Smiles P</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-testimonial-main text-center">
                                        <span class="quote icon-quote3"></span>
                                        <div class="content">
                                            <div class="list-star-default justify-content-center">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <p class="text-review">
                                                I've been trying this haircare line for a month, and the results are
                                                incredible! My hair feels softer, looks shinier, and feels much
                                                healthier. The products are nourishing yet lightweight, and I love the
                                                natural ingredients.
                                            </p>
                                            <div class="name text-md fw-semibold ">Themesflat</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="sw-dot-default sw-pagination-tes justify-content-center"></span>
                        </div>
                    </div>
                    <div class="box-right">
                        <div dir="ltr" class="swiper tf-thumb-tes" data-space-lg="24" data-space="12">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide hover-shine hover-img">
                                    <div class="shine-item img-sw-thumb img-style">
                                        <img class="lazyload" data-src="{{ asset('frontend_assets/images/testimonial/tes-skincare.jpg')}}"
                                            src="{{ asset('frontend_assets/images/testimonial/tes-skincare.jpg')}}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide hover-img hover-shine">
                                    <div class="shine-item img-sw-thumb img-style">
                                        <img class="lazyload" data-src="{{ asset('frontend_assets/images/testimonial/tes-skincare2.jpg')}}"
                                            src="{{ asset('frontend_assets/images/testimonial/tes-skincare2.jpg')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Testimonial -->


        <!-- Shop Gram -->
        <section class="flat-spacing-2 bg-light-orange-4">
            <div class="container">
                <div class="flat-title wow fadeInUp">
                    <h4 class="title">Follow our gram @Smiles</h4>
                </div>
                <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-swiper='{
                        "slidesPerView": 2,
                        "spaceBetween": 10,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 2,
                        "pagination": { "el": ".sw-pagination-gallery", "clickable": true },
                        "breakpoints": {
                        "768": { "slidesPerView": 3},
                        "1200": { "slidesPerView": 5}
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img src="{{ asset('frontend_assets/images/gallery/skincare/gallery-1.jpg')}}"
                                        data-src="{{ asset('frontend_assets/images/gallery/skincare/gallery-1.jpg')}}" alt="" class="lazyload">
                                </div>
                                <a href="product-detail.html" class="box-icon hover-tooltip">
                                    <span class="icon icon-cart2"></span>
                                    <span class="tooltip">View Product</span>
                                </a>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img src="{{ asset('frontend_assets/images/gallery/skincare/gallery-2.jpg')}}"
                                        data-src="{{ asset('frontend_assets/images/gallery/skincare/gallery-2.jpg')}}" alt="" class="lazyload">
                                </div>
                                <a href="product-detail.html" class="box-icon hover-tooltip">
                                    <span class="icon icon-cart2"></span>
                                    <span class="tooltip">View Product</span>
                                </a>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img src="{{ asset('frontend_assets/images/gallery/skincare/gallery-3.jpg')}}"
                                        data-src="{{ asset('frontend_assets/images/gallery/skincare/gallery-3.jpg')}}" alt="" class="lazyload">
                                </div>
                                <a href="product-detail.html" class="box-icon hover-tooltip">
                                    <span class="icon icon-cart2"></span>
                                    <span class="tooltip">View Product</span>
                                </a>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img src="{{ asset('frontend_assets/images/gallery/skincare/gallery-4.jpg')}}"
                                        data-src="{{ asset('frontend_assets/images/gallery/skincare/gallery-4.jpg')}}" alt="" class="lazyload">
                                </div>
                                <a href="product-detail.html" class="box-icon hover-tooltip">
                                    <span class="icon icon-cart2"></span>
                                    <span class="tooltip">View Product</span>
                                </a>
                            </div>
                        </div>
                        <!-- item 5 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img src="{{ asset('frontend_assets/images/gallery/skincare/gallery-5.jpg')}}"
                                        data-src="{{ asset('frontend_assets/images/gallery/skincare/gallery-5.jpg')}}" alt="" class="lazyload">
                                </div>
                                <a href="product-detail.html" class="box-icon hover-tooltip">
                                    <span class="icon icon-cart2"></span>
                                    <span class="tooltip">View Product</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <span class="d-flex d-xl-none sw-dot-default sw-pagination-gallery justify-content-center"></span>
                </div>
            </div>
        </section>
        <!-- /Shop Gram -->


        <!-- Footer -->
 @include('Frontend_layouts.footer')
        <!-- /Footer -->
    </div>

    <!-- modal demo -->
    <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <h5 class="demo-title">Ultimate HTML Theme</h5>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/fashion-1.jpg"
                                    src="images/demo/fashion-1.jpg" alt="home-fashion">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="index.html" class="demo-name link">Fashion Style 1</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-02.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/fashion-2.jpg"
                                    src="images/demo/fashion-2.jpg" alt="home-fashion">
                            </a>
                            <a href="home-fashion-02.html" class="demo-name link">Fashion Style
                                2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/electronic.jpg"
                                    src="images/demo/electronic.jpg" alt="home-electronic">
                            </a>
                            <a href="home-electronic.html" class="demo-name link">Electronic</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/furniture.jpg"
                                    src="images/demo/furniture.jpg" alt="home-furniture">
                            </a>
                            <a href="home-furniture.html" class="demo-name link">Furniture</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-women.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/women-fashion.jpg"
                                    src="images/demo/women-fashion.jpg" alt="home-women-fashion">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="home-fashion-women.html" class="demo-name link">Women
                                Fashion</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skincare.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/comestic.jpg" src="images/demo/comestic.jpg"
                                    alt="home-comestic">
                            </a>
                            <a href="home-skincare.html" class="demo-name link">Skincare</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-bicycle.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/bicycle.jpg" src="images/demo/bicycle.jpg"
                                    alt="home-bicycle">
                                <div class="demo-label"><span>New</span></div>
                            </a>
                            <a href="home-bicycle.html" class="demo-name link">Bicycle</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-phonecase.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/phonecase.jpg"
                                    src="images/demo/phonecase.jpg" alt="home-phonecase">
                            </a>
                            <a href="home-phonecase.html" class="demo-name link">Phone Case</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pet-accessories.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/pet-accessories.jpg"
                                    src="images/demo/pet-accessories.jpg" alt="home-pet">
                            </a>
                            <a href="home-pet-accessories.html" class="demo-name link">Pet
                                Accessories</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sportwear.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/sportwear.jpg"
                                    src="images/demo/sportwear.jpg" alt="home-bicycle">
                            </a>
                            <a href="home-sportwear.html" class="demo-name link">Sportwear</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/jewelry.jpg" src="images/demo/jewelry.jpg"
                                    alt="home-jewelry">
                            </a>
                            <a href="home-jewelry.html" class="demo-name link">Jewelry</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electric-accessories.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/eletric-accessories.jpg"
                                    src="images/demo/eletric-accessories.jpg" alt="home-electric-accessories">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="home-electric-accessories.html" class="demo-name link">Electric Accessories</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-mega-electronic.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/mega-shop.jpg"
                                    src="images/demo/mega-shop.jpg" alt="home-mega-electronic">
                            </a>
                            <a href="home-mega-electronic.html" class="demo-name link">Mega Shop</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-vegetable.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/supermarket.jpg"
                                    src="images/demo/supermarket.jpg" alt="home-supermarket">
                            </a>
                            <a href="home-vegetable.html" class="demo-name link">Supermarket</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pod.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/pod.jpg" src="images/demo/pod.jpg"
                                    alt="home-pod">
                            </a>
                            <a href="home-pod.html" class="demo-name link">Print On Demand</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-baby.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/baby.jpg" src="images/demo/baby.jpg"
                                    alt="home-baby">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-baby.html" class="demo-name link">Baby</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-plant.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/plant.jpg" src="images/demo/plant.jpg"
                                    alt="home-plant">
                            </a>
                            <a href="home-plant.html" class="demo-name link">Plant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal demo -->

    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <div class="mb-content-top">
                    
                    <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                        <li class="nav-mb-item">
                            <a href="#dropdown-menu-home" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-home">
                                <span>Home</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-home" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li><a href="index.html" class="sub-nav-link">Fashion Style 1</a></li>
                                    <li><a href="home-fashion-02.html" class="sub-nav-link">Fashion Style 2</a></li>
                                    <li><a href="home-electronic.html" class="sub-nav-link">Electronic</a></li>
                                    <li><a href="home-furniture.html" class="sub-nav-link">Furniture</a></li>
                                    <li><a href="home-fashion-women.html" class="sub-nav-link">Women Fashion</a></li>
                                    <li><a href="home-skincare.html" class="sub-nav-link">Skincare</a></li>
                                    <li><a href="home-bicycle.html" class="sub-nav-link">Bicycle</a></li>
                                    <li><a href="home-phonecase.html" class="sub-nav-link">Phone Case</a></li>
                                    <li><a href="home-pet-accessories.html" class="sub-nav-link">Pet Accessories</a>
                                    </li>
                                    <li><a href="home-sportwear.html" class="sub-nav-link">Sportwear</a></li>
                                    <li><a href="home-jewelry.html" class="sub-nav-link">Jewelry</a></li>
                                    <li><a href="home-electric-accessories.html" class="sub-nav-link">Electronic
                                            Accessories</a></li>
                                    <li><a href="home-mega-electronic.html" class="sub-nav-link">Mega Shop</a></li>
                                    <li><a href="home-baby.html" class="sub-nav-link">Baby</a></li>
                                    <li><a href="home-vegetable.html" class="sub-nav-link">Supermarket</a></li>
                                    <li><a href="home-pod.html" class="sub-nav-link">POD</a></li>
                                    <li><a href="home-plant.html" class="sub-nav-link">Plant</a></li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-mb-item">
                            <a href="#dropdown-menu-shop" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-shop">
                                <span>Shop</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-shop" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li><a href="#sub-shop-layout" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-shop-layout">
                                            <span>Shop Layout</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-shop-layout" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="shop-default.html" class="sub-nav-link">Default</a></li>
                                                <li><a href="shop-left-sidebar.html" class="sub-nav-link">Filter
                                                        Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html" class="sub-nav-link">Filter
                                                        Right Sidebar</a></li>
                                                <li><a href="shop-horizontal-filter.html"
                                                        class="menu-link-text link">Horizontal Filter</a></li>
                                                <li><a href="shop-default.html" class="sub-nav-link">Filter
                                                        Drawer</a></li>
                                                <li><a href="shop-collection-list.html"
                                                        class="menu-link-text link">Collection List</a></li>
                                                <li><a href="shop-sub-collection.html" class="sub-nav-link">Sub
                                                        Collection 1</a></li>
                                                <li><a href="shop-sub-collection-02.html" class="sub-nav-link">Sub
                                                        Collection 2</a></li>
                                                <li><a href="shop-grid-3-columns.html" class="sub-nav-link">Grid
                                                        3 Columns </a></li>
                                                <li><a href="shop-default.html" class="sub-nav-link">Grid 4
                                                        Columns</a></li>
                                                <li><a href="shop-fullwidth.html" class="sub-nav-link">Full
                                                        Width</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#sub-shop-list" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-shop-list">
                                            <span>Shop List</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-shop-list" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="shop-default.html" class="sub-nav-link">Pagination
                                                        Links</a></li>
                                                <li><a href="shop-load-more-button.html" class="sub-nav-link">Load More
                                                        Button</a></li>
                                                <li><a href="shop-infinity-scroll.html" class="sub-nav-link">Infinity
                                                        Scroll <span class="demo-label">Hot</span></a></li>
                                                <li><a href="shop-filter-sidebar.html" class="sub-nav-link">Filter
                                                        Sidebar</a></li>
                                                <li><a href="shop-filter-hidden.html" class="sub-nav-link">Filter
                                                        Hidden</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#sub-shop-styles" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-shop-styles">
                                            <span>Product Styles</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-shop-styles" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="product-style-01.html" class="sub-nav-link">Product
                                                        Style 1</a></li>
                                                <li><a href="product-style-02.html" class="sub-nav-link">Product
                                                        Style 2</a></li>
                                                <li><a href="product-style-03.html" class="sub-nav-link">Product
                                                        Style 3</a></li>
                                                <li><a href="home-fashion-02.html" class="sub-nav-link">Product
                                                        Popup</a></li>
                                               
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-mb-item">
                            <a href="#dropdown-menu-product" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-product">
                                <span>Products</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-product" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li>
                                        <a href="#sub-product-layout" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-product-layout">
                                            <span>Product Layouts</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-product-layout" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="product-detail.html" class="sub-nav-link">Product
                                                        Single</a></li>
                                                <li><a href="product-right-thumbnail.html" class="sub-nav-link">Product
                                                        Right Thumbnail</a></li>
                                                <li><a href="product-detail.html" class="sub-nav-link">Product
                                                        Left Thumbnail</a></li>
                                                <li><a href="product-bottom-thumbnail.html" class="sub-nav-link">Product
                                                        Bottom Thumbnail</a>
                                                </li>
                                                <li><a href="product-grid.html" class="sub-nav-link">Product
                                                        Grid</a></li>
                                                <li><a href="product-grid-02.html" class="sub-nav-link">Product
                                                        Grid 2</a></li>
                                                <li><a href="product-stacked.html" class="sub-nav-link">Product
                                                        Stacked</a></li>
                                                <li><a href="product-drawer-sidebar.html" class="sub-nav-link">Product
                                                        Drawer Sidebar</a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#sub-product-detail" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-product-detail">
                                            <span>Product Details</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-product-detail" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="product-inner-zoom.html" class="sub-nav-link">Product Inner
                                                        Zoom</a></li>
                                                <li><a href="product-inner-circle-zoom.html"
                                                        class="sub-nav-link">Product Inner Circle Zoom</a>
                                                </li>
                                                <li><a href="product-no-zoom.html" class="sub-nav-link">Product
                                                        No Zoom <span class="demo-label">Hot</span></a></li>
                                                <li><a href="product-external-zoom.html" class="sub-nav-link">Product
                                                        External Zoom</a></li>
                                                <li><a href="product-open-lightbox.html" class="sub-nav-link">Product
                                                        Open Lightbox <span class="demo-label bg-primary">New</span></a>
                                                </li>
                                                <li><a href="product-video.html" class="sub-nav-link">Product
                                                        Video</a></li>
                                                <li><a href="product-3d.html" class="sub-nav-link">Product
                                                        3D/AR</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#sub-product-feature" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-product-feature">
                                            <span>Products Features</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-product-feature" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="product-together.html" class="sub-nav-link">Buy
                                                        Together</a></li>

                                                <li><a href="product-countdown-timer.html"
                                                        class="sub-nav-link">Countdown Timer</a></li>

                                                <li><a href="product-volume-discount.html" class="sub-nav-link">Volume
                                                        Discount</a></li>
                                                <li><a href="product-volume-discount-thumbnail.html"
                                                        class="sub-nav-link">Volume Discount Thumbnail</a>
                                                </li>
                                                <li><a href="product-swatch-dropdown.html" class="sub-nav-link">Swatch
                                                        Dropdown</a></li>
                                                <li><a href="product-swatch-dropdown-color.html"
                                                        class="sub-nav-link">Swatch Dropdown Color</a></li>
                                                <li><a href="product-swatch-image.html" class="sub-nav-link">Swatch
                                                        Image</a></li>
                                                <li><a href="product-swatch-image-square.html"
                                                        class="sub-nav-link">Swatch Image rectangle</a></li>
                                                <li><a href="product-pickup-available.html" class="sub-nav-link">Pickup
                                                        Available</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#sub-product-desc" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-product-desc">
                                            <span>Products Description</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-product-desc" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="product-description-vertical.html"
                                                        class="sub-nav-link">Product Description Vertical</a>
                                                </li>
                                                <li><a href="product-description-tab.html" class="sub-nav-link">Product
                                                        Description Tab</a></li>
                                                <li><a href="product-description-accordions.html"
                                                        class="sub-nav-link">Product Description
                                                        Accordions</a></li>
                                                <li><a href="product-description-side-accordions.html"
                                                        class="sub-nav-link">Product Description Side
                                                        Accordions</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-mb-item">
                            <a href="#dropdown-menu-pages" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-pages">
                                <span>Pages</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-pages" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li><a href="about-us.html" class="sub-nav-link">About</a></li>
                                    <li><a href="contact-us.html" class="sub-nav-link">Contact</a></li>
                                    <li><a href="store-location.html" class="sub-nav-link">Store
                                            location</a></li>
                                    <li><a href="account-page.html" class="sub-nav-link">My account</a></li>
                                    <li><a href="faq.html" class="sub-nav-link">FAQ</a></li>
                                    <li><a href="cart-empty.html" class="sub-nav-link">Cart drawer empty</a>
                                    </li>
                                    <li><a href="cart-drawer-v2.html" class="sub-nav-link">Cart drawer
                                            v2</a></li>
                                    <li><a href="view-cart.html" class="sub-nav-link">View cart</a></li>
                                    <li><a href="before-you-leave.html" class="sub-nav-link">Before you
                                            leave</a></li>
                                    <li><a href="cookies.html" class="sub-nav-link">Cookies</a></li>
                                    <li><a href="home-fashion-02.html" class="sub-nav-link">Sub navtab
                                            products</a></li>
                                    <li><a href="404.html" class="sub-nav-link">404</a></li>
                                    <li><a href="coming-soon.html" class="sub-nav-link">Coming Soon!</a>
                                    </li>
                                    <li><a href="index.html" class="sub-nav-link">Newsletter
                                        Popup 1</a></li>
                                    <li><a href="newsletter-popup-02.html" class="sub-nav-link">Newsletter
                                            Popup 2</a></li>
                                    <li><a href="newsletter-popup-03.html" class="sub-nav-link">Newsletter
                                            Popup 3</a></li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-mb-item">
                            <a href="#dropdown-menu-blog" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-blog">
                                <span>Blog</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-blog" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li><a href="blog-list-01.html" class="sub-nav-link">Blog List 1</a>
                                    </li>
                                    <li><a href="blog-list-02.html" class="sub-nav-link">Blog List 2</a>
                                    </li>
                                    <li><a href="blog-grid-01.html" class="sub-nav-link">Blog Grid 1</a>
                                    </li>
                                    <li><a href="blog-grid-02.html" class="sub-nav-link">Blog Grid 2</a>
                                    </li>
                                    <li><a href="blog-single.html" class="sub-nav-link">Single Blog </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-mb-item">
                            <a href="https://themeforest.net/item/vince-multipurpose-ecommerce-html5-template/57202368?s_rank=5" target="_blank" class="mb-menu-link">Buy Theme</a>
                        </li>
                    </ul>
                </div>
                <div class="mb-other-content">
                    <div class="group-icon">
                        <a href="wish-list.html" class="site-nav-icon">
                            <i class="icon icon-heart"></i>
                            Wishlist
                        </a>
                        <a href="#login" data-bs-toggle="offcanvas" class="site-nav-icon">
                            <i class="icon icon-user"></i>
                            Login
                        </a>
                    </div>
                    <div class="mb-notice">
                        <a href="contact-us.html" class="text-need">Need Help?</a>
                    </div>
                    <div class="mb-contact">
                        <p>Address: 123 Yarran st, Punchbowl, NSW 2196, Australia</p>
                    </div>
                    <ul class="mb-info">
                        <li>
                            Email:
                            <b class="fw-medium">clientcare@ecom.com</b>
                        </li>
                        <li>
                            Phone:
                            <b class="fw-medium">1.888.838.3022</b>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-bottom">
                <div class="bottom-bar-language">
                    <div class="tf-currencies">
                        <select class="image-select center style-default type-currencies">
                            <option selected data-thumbnail="images/country/us.png">USD</option>
                            <option data-thumbnail="images/country/fr.png">EUR</option>
                            <option data-thumbnail="images/country/ger.png">EUR</option>
                            <option data-thumbnail="images/country/vn.png">VND</option>
                        </select>
                    </div>
                    <div class="tf-languages">
                        <select class="image-select center style-default type-languages">
                            <option>English</option>
                            <option>العربية</option>
                            <option>简体中文</option>
                            <option>اردو</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /mobile menu -->

    <!-- toolbar -->
    <div class="tf-toolbar-bottom">
        <div class="toolbar-item">
            <a href="home-skincare.html">
                <div class="toolbar-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.21534 1H3.08153C1.93379 1 1 1.93379 1 3.08153V7.21534C1 8.36309 1.93379 9.29688 3.08153 9.29688H7.21534C8.36309 9.29688 9.29688 8.36309 9.29688 7.21534V3.08153C9.29688 1.93379 8.36309 1 7.21534 1ZM7.89062 7.21534C7.89062 7.58768 7.58768 7.89062 7.21534 7.89062H3.08153C2.70919 7.89062 2.40625 7.58768 2.40625 7.21534V3.08153C2.40625 2.70919 2.70919 2.40625 3.08153 2.40625H7.21534C7.58768 2.40625 7.89062 2.70919 7.89062 3.08153V7.21534Z"
                            fill="black" />
                        <path
                            d="M16.8906 1H12.8125C11.6494 1 10.7031 1.94627 10.7031 3.10938V7.1875C10.7031 8.35061 11.6494 9.29688 12.8125 9.29688H16.8906C18.0537 9.29688 19 8.35061 19 7.1875V3.10938C19 1.94627 18.0537 1 16.8906 1ZM17.5938 7.1875C17.5938 7.5752 17.2783 7.89062 16.8906 7.89062H12.8125C12.4248 7.89062 12.1094 7.5752 12.1094 7.1875V3.10938C12.1094 2.72167 12.4248 2.40625 12.8125 2.40625H16.8906C17.2783 2.40625 17.5938 2.72167 17.5938 3.10938V7.1875Z"
                            fill="black" />
                        <path
                            d="M7.21534 10.7031H3.08153C1.93379 10.7031 1 11.6369 1 12.7847V16.9185C1 18.0662 1.93379 19 3.08153 19H7.21534C8.36309 19 9.29688 18.0662 9.29688 16.9185V12.7847C9.29688 11.6369 8.36309 10.7031 7.21534 10.7031ZM7.89062 16.9185C7.89062 17.2908 7.58768 17.5938 7.21534 17.5938H3.08153C2.70919 17.5938 2.40625 17.2908 2.40625 16.9185V12.7847C2.40625 12.4123 2.70919 12.1094 3.08153 12.1094H7.21534C7.58768 12.1094 7.89062 12.4123 7.89062 12.7847V16.9185Z"
                            fill="black" />
                        <path
                            d="M16.8906 10.7031H12.8125C11.6494 10.7031 10.7031 11.6494 10.7031 12.8125V16.8906C10.7031 18.0537 11.6494 19 12.8125 19H16.8906C18.0537 19 19 18.0537 19 16.8906V12.8125C19 11.6494 18.0537 10.7031 16.8906 10.7031ZM17.5938 16.8906C17.5938 17.2783 17.2783 17.5938 16.8906 17.5938H12.8125C12.4248 17.5938 12.1094 17.2783 12.1094 16.8906V12.8125C12.1094 12.4248 12.4248 12.1094 12.8125 12.1094H16.8906C17.2783 12.1094 17.5938 12.4248 17.5938 12.8125V16.8906Z"
                            fill="black" />
                    </svg>
                </div>
                <div class="toolbar-label">Home</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#login" data-bs-toggle="offcanvas">
                <div class="toolbar-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.6849 6.28659C12.6849 7.00267 12.4004 7.68943 11.8941 8.19578C11.3877 8.70212 10.701 8.98659 9.98488 8.98659C9.2688 8.98659 8.58204 8.70212 8.07569 8.19578C7.56934 7.68943 7.28488 7.00267 7.28488 6.28659C7.28488 5.5705 7.56934 4.88375 8.07569 4.3774C8.58204 3.87105 9.2688 3.58659 9.98488 3.58659C10.701 3.58659 11.3877 3.87105 11.8941 4.3774C12.4004 4.88375 12.6849 5.5705 12.6849 6.28659ZM14.3515 6.28659C14.3515 6.86003 14.2386 7.42785 14.0192 7.95764C13.7997 8.48743 13.4781 8.96881 13.0726 9.37429C12.6671 9.77977 12.1857 10.1014 11.6559 10.3209C11.1261 10.5403 10.5583 10.6533 9.98488 10.6533C9.41144 10.6533 8.84362 10.5403 8.31383 10.3209C7.78404 10.1014 7.30266 9.77977 6.89718 9.37429C6.4917 8.96881 6.17005 8.48743 5.95061 7.95764C5.73116 7.42785 5.61821 6.86003 5.61821 6.28659C5.61821 5.12848 6.07827 4.0178 6.89718 3.19889C7.71609 2.37998 8.82677 1.91992 9.98488 1.91992C11.143 1.91992 12.2537 2.37998 13.0726 3.19889C13.8915 4.0178 14.3515 5.12848 14.3515 6.28659ZM3.83488 17.7049C3.83488 16.2183 4.48488 15.0616 5.55571 14.2524C6.64738 13.4283 8.20571 12.9491 9.98738 12.9491C11.7699 12.9491 13.3282 13.4283 14.419 14.2524C15.4907 15.0608 16.1407 16.2191 16.1407 17.7049C16.1407 17.9259 16.2285 18.1379 16.3848 18.2942C16.5411 18.4505 16.753 18.5383 16.974 18.5383C17.1951 18.5383 17.407 18.4505 17.5633 18.2942C17.7196 18.1379 17.8074 17.9259 17.8074 17.7049C17.8074 15.6633 16.8849 14.0258 15.424 12.9224C13.9824 11.8341 12.0474 11.2824 9.98738 11.2824C7.92738 11.2824 5.99238 11.8341 4.55155 12.9224C3.08988 14.0258 2.16821 15.6641 2.16821 17.7049C2.16821 17.9259 2.25601 18.1379 2.41229 18.2942C2.56857 18.4505 2.78053 18.5383 3.00155 18.5383C3.22256 18.5383 3.43452 18.4505 3.5908 18.2942C3.74708 18.1379 3.83488 17.9259 3.83488 17.7049Z"
                            fill="black" />
                    </svg>
                </div>
                <div class="toolbar-label">Account</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="shop-default.html">
                <div class="toolbar-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.875 8.479C1.875 8.134 2.155 7.854 2.5 7.854C2.845 7.854 3.125 8.134 3.125 8.479V15.5623C3.125 16.5982 3.96417 17.4373 5 17.4373H15C16.0358 17.4373 16.875 16.5982 16.875 15.5623V8.479C16.875 8.134 17.155 7.854 17.5 7.854C17.845 7.854 18.125 8.134 18.125 8.479V15.5623C18.125 17.2882 16.7258 18.6873 15 18.6873H5C3.27417 18.6873 1.875 17.2882 1.875 15.5623V8.479Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10 11.1875C10.8292 11.1875 11.6233 11.5167 12.21 12.1025C12.7958 12.6892 13.125 13.4833 13.125 14.3125V18.0625C13.125 18.4075 12.845 18.6875 12.5 18.6875C12.155 18.6875 11.875 18.4075 11.875 18.0625V14.3125C11.875 13.815 11.6775 13.3383 11.3258 12.9867C10.9742 12.635 10.4975 12.4375 10 12.4375C9.5025 12.4375 9.02583 12.635 8.67417 12.9867C8.3225 13.3383 8.125 13.815 8.125 14.3125V18.0625C8.125 18.4075 7.845 18.6875 7.5 18.6875C7.155 18.6875 6.875 18.4075 6.875 18.0625V14.3125C6.875 13.4833 7.20417 12.6892 7.79 12.1025C8.37667 11.5167 9.17083 11.1875 10 11.1875Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.45325 1.9375V6.625C7.45325 8.385 6.02492 9.8125 4.26492 9.8125C3.27242 9.8125 2.33492 9.355 1.72408 8.57333C1.11325 7.79083 0.897416 6.77167 1.13742 5.80833L1.79992 3.15917C2.07158 2.07333 3.04658 1.3125 4.16492 1.3125H6.82825C7.17325 1.3125 7.45325 1.5925 7.45325 1.9375ZM6.20325 2.5625H4.16492C3.61992 2.5625 3.14492 2.93333 3.01325 3.46167L2.35075 6.11167C2.20325 6.70083 2.33575 7.325 2.70908 7.80417C3.08325 8.2825 3.65742 8.5625 4.26492 8.5625C5.33492 8.5625 6.20325 7.695 6.20325 6.625V2.5625Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.1716 1.3125H15.835C16.9533 1.3125 17.9283 2.07333 18.2 3.15917L18.8625 5.80833C19.1025 6.77167 18.8866 7.79083 18.2758 8.57333C17.665 9.355 16.7275 9.8125 15.735 9.8125C13.975 9.8125 12.5466 8.385 12.5466 6.625V1.9375C12.5466 1.5925 12.8266 1.3125 13.1716 1.3125ZM13.7966 2.5625V6.625C13.7966 7.695 14.665 8.5625 15.735 8.5625C16.3425 8.5625 16.9166 8.2825 17.2908 7.80417C17.6641 7.325 17.7966 6.70083 17.6491 6.11167L16.9866 3.46167C16.855 2.93333 16.38 2.5625 15.835 2.5625H13.7966Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.82153 1.3125H13.1715C13.3374 1.3125 13.4965 1.37833 13.614 1.49583C13.7315 1.61333 13.7965 1.7725 13.7965 1.93833L13.7924 6.47167C13.7907 8.3175 12.294 9.8125 10.449 9.8125H9.5407C7.69403 9.8125 6.19653 8.31583 6.19653 6.46917V1.9375C6.19653 1.5925 6.47653 1.3125 6.82153 1.3125ZM7.44653 2.5625V6.46917C7.44653 7.625 8.38403 8.5625 9.5407 8.5625H10.449C11.6049 8.5625 12.5415 7.62667 12.5424 6.47083L12.5465 2.5625H7.44653Z"
                            fill="black" />
                    </svg>
                </div>
                <div class="toolbar-label">Shop</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="wish-list.html">
                <div class="toolbar-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4013_1872)">
                            <path
                                d="M18.3932 3.30791C16.218 1.13334 12.6795 1.13334 10.5049 3.30791L9.99983 3.8127L9.49504 3.30791C7.32046 1.13304 3.78163 1.13304 1.60706 3.30791C-0.523361 5.43833 -0.537195 8.81527 1.57498 11.1632C3.50142 13.3039 9.18304 17.9289 9.4241 18.1246C9.58775 18.2576 9.78467 18.3224 9.9804 18.3224C9.98688 18.3224 9.99335 18.3224 9.99953 18.3221C10.202 18.3315 10.406 18.2621 10.575 18.1246C10.816 17.9289 16.4982 13.3039 18.4253 11.1629C20.5371 8.81527 20.5233 5.43833 18.3932 3.30791ZM17.1125 9.98174C15.6105 11.6503 11.4818 15.0917 9.99953 16.313C8.51724 15.092 4.38944 11.6509 2.88773 9.98203C1.41427 8.34433 1.40044 6.01199 2.85564 4.55679C3.59885 3.81388 4.57488 3.44213 5.5509 3.44213C6.52693 3.44213 7.50295 3.81358 8.24616 4.55679L9.3564 5.66703C9.48856 5.79919 9.65516 5.87807 9.82999 5.90574C10.1137 5.96667 10.4216 5.88749 10.6424 5.66732L11.7532 4.55679C13.2399 3.07067 15.6582 3.07097 17.144 4.55679C18.5992 6.01199 18.5854 8.34433 17.1125 9.98174Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_4013_1872">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="toolbar-count">0</div>
                </div>
                <div class="toolbar-label">Wishlist</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#shoppingCart" data-bs-toggle="offcanvas">
                <div class="toolbar-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M4.70906 7.42985L4.0424 16.699H15.8641L15.1974 7.42985H4.70906ZM16.7491 5.76318H3.15823L2.38073 16.5798C2.36436 16.8082 2.39521 17.0374 2.47134 17.2533C2.54748 17.4692 2.66727 17.6671 2.82325 17.8347C2.97923 18.0022 3.16805 18.1358 3.37795 18.2272C3.58785 18.3186 3.81431 18.3657 4.04323 18.3657H15.8641C16.0931 18.3657 16.3196 18.3185 16.5296 18.2271C16.7395 18.1357 16.9284 18.002 17.0844 17.8344C17.2404 17.6667 17.3601 17.4687 17.4362 17.2527C17.5123 17.0368 17.5431 16.8074 17.5266 16.579L16.7491 5.76318Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.38996 3.86652C9.17153 3.86641 8.95523 3.90936 8.75342 3.99292C8.55162 4.07649 8.36826 4.19901 8.21385 4.3535C8.05944 4.50799 7.93701 4.6914 7.85355 4.89325C7.77009 5.0951 7.72724 5.31143 7.72746 5.52985V6.10068C7.72746 6.3217 7.63966 6.53366 7.48338 6.68994C7.3271 6.84622 7.11514 6.93402 6.89412 6.93402C6.67311 6.93402 6.46115 6.84622 6.30487 6.68994C6.14859 6.53366 6.06079 6.3217 6.06079 6.10068V5.52985C6.06068 5.09263 6.14672 4.65967 6.31399 4.2557C6.48125 3.85174 6.72647 3.48469 7.03564 3.17553C7.3448 2.86637 7.71185 2.62115 8.11581 2.45388C8.51977 2.28661 8.95273 2.20057 9.38996 2.20068H10.5275C11.412 2.2009 12.2603 2.55246 12.8857 3.17802C13.5111 3.80359 13.8625 4.65194 13.8625 5.53652V6.10068C13.8625 6.3217 13.7747 6.53366 13.6184 6.68994C13.4621 6.84622 13.2501 6.93402 13.0291 6.93402C12.8081 6.93402 12.5961 6.84622 12.4399 6.68994C12.2836 6.53366 12.1958 6.3217 12.1958 6.10068V5.53652C12.1958 5.09397 12.02 4.66954 11.7072 4.35653C11.3943 4.04353 10.97 3.86757 10.5275 3.86735"
                            fill="black" />
                    </svg>
                    <div class="toolbar-count">0</div>
                </div>
                <div class="toolbar-label">Cart</div>
            </a>
        </div>
    </div>
    <!-- /toolbar  -->

    <!-- login -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-login" id="login">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Log in</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="https://Smiles-html.vercel.app/account-page.html" accept-charset="utf-8" class="form-login">
                    <div>
                        <fieldset class="email mb_12">
                            <input type="email" class="" placeholder="Email*" required>
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" class="" placeholder="Password*" required>
                        </fieldset>
                    </div>
                    <div class="bot">
                        <a href="#resetPass" data-bs-toggle="offcanvas" class="text text-sm text-main-2">Forgot your
                            password?</a>
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                type="submit">Sign in</button>
                            <button type="button" data-bs-target="#register" data-bs-toggle="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Create an account</button>
                        </div>
                    </div>
                </form>
                <div class="other-login">
                    <p class="text-sm text-center text-main-2">Or sign in with:</p>
                    <a href="account-page.html" class="w-100 text-md mb_8">
                        <svg class="icon" width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="16" fill="#3B5998" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.155 10.656L18.649 10.657C17.468 10.657 17.239 11.218 17.239 12.041V13.857H20.056L19.689 16.702H17.239V24H14.302V16.702H11.846V13.857H14.302V11.76C14.302 9.325 15.789 8 17.96 8C19 8 19.894 8.077 20.155 8.112V10.656ZM16 0C7.164 0 0 7.163 0 16C0 24.836 7.164 32 16 32C24.837 32 32 24.836 32 16C32 7.163 24.837 0 16 0Z"
                                fill="white" />
                        </svg>
                        FACEBOOK
                    </a>
                    <a href="account-page.html" class="w-100 text-md bg-dark">
                        <svg class="icon" width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_235_18876)">
                                <path
                                    d="M30.7919 13.218L17.7394 13.2174C17.163 13.2174 16.6958 13.6845 16.6958 14.2609V18.4306C16.6958 19.0068 17.163 19.4741 17.7393 19.4741H25.0897C24.2848 21.5629 22.7825 23.3122 20.8659 24.4237L24.0001 29.8493C29.0277 26.9416 32.0001 21.8398 32.0001 16.1287C32.0001 15.3155 31.9402 14.7342 31.8203 14.0796C31.7292 13.5823 31.2974 13.218 30.7919 13.218Z"
                                    fill="#167EE6" />
                                <path
                                    d="M16.0002 25.7392C12.4031 25.7392 9.26282 23.7738 7.57625 20.8655L2.15088 23.9926C4.91182 28.7777 10.0839 32 16.0002 32C18.9025 32 21.6411 31.2186 24.0002 29.8568V29.8494L20.866 24.4237C19.4324 25.2552 17.7734 25.7392 16.0002 25.7392Z"
                                    fill="#12B347" />
                                <path
                                    d="M24 29.8568V29.8493L20.8658 24.4237C19.4322 25.2551 17.7733 25.7391 16 25.7391V32C18.9023 32 21.641 31.2186 24 29.8568Z"
                                    fill="#0F993E" />
                                <path
                                    d="M6.26088 16C6.26088 14.2269 6.74475 12.5681 7.57606 11.1346L2.15069 8.00745C0.781375 10.3591 0 13.0903 0 16C0 18.9098 0.781375 21.6409 2.15069 23.9926L7.57606 20.8654C6.74475 19.4319 6.26088 17.7731 6.26088 16Z"
                                    fill="#FFD500" />
                                <path
                                    d="M16.0002 6.26088C18.3459 6.26088 20.5005 7.09437 22.1834 8.48081C22.5986 8.82281 23.2021 8.79813 23.5824 8.41781L26.5368 5.46344C26.9683 5.03194 26.9375 4.32562 26.4766 3.92575C23.6569 1.47956 19.9881 0 16.0002 0C10.0839 0 4.91182 3.22231 2.15088 8.00744L7.57625 11.1346C9.26282 8.22625 12.4031 6.26088 16.0002 6.26088Z"
                                    fill="#FF4B26" />
                                <path
                                    d="M22.1833 8.48081C22.5984 8.82281 23.2019 8.79813 23.5822 8.41781L26.5366 5.46344C26.968 5.03194 26.9373 4.32562 26.4764 3.92575C23.6567 1.4795 19.9879 0 16 0V6.26088C18.3456 6.26088 20.5003 7.09437 22.1833 8.48081Z"
                                    fill="#D93F21" />
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        GOOGLE
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /login -->

    <!-- register -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-register" id="register">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Create account</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="https://Smiles-html.vercel.app/account-page.html" class="form-login">
                    <div class="">
                        <fieldset class="text mb_12">
                            <input type="text" placeholder="First name">
                        </fieldset>
                        <fieldset class="text mb_12">
                            <input type="text" placeholder="Last name">
                        </fieldset>
                        <fieldset class="email mb_12">
                            <input type="email" placeholder="Email*">
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" placeholder="Password*">
                        </fieldset>
                    </div>
                    <div class="bot">
                        <p class="text text-sm text-main-2">Sign up for early Sale access plus tailored new
                            arrivals, trends and promotions. To opt out, click unsubscribe in our emails.</p>
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn bg-dark-2 w-100" type="submit">Sign
                                up</button>
                            <button type="button" data-bs-target="#login" data-bs-toggle="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /register -->

    <!-- Reset pass -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-reset-pass" id="resetPass">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Reset Your Password</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="#" class="form-login">
                    <div class="">
                        <p class="text text-sm text-main-2">Forgot your password? No worries! Enter your registered
                            email to receive a link and securely reset it in just a few steps.</p>
                        <fieldset class="email mb_12">
                            <input type="email" placeholder="Enter Your Email*">
                        </fieldset>
                    </div>
                    <div class="bot">
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn bg-dark-2 w-100" type="submit">Reset
                                Password</button>
                            <button type="button" data-bs-dismiss="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Reset pass -->

    <!-- search -->
    <div class="modal fade popup-search" id="search">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="header">
                    <button class="icon-close icon-close-popup" data-bs-dismiss="modal"></button>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="looking-for-wrap">
                                <div class="heading">What are you looking for?</div>
                                <form class="form-search">
                                    <fieldset class="text">
                                        <input type="text" placeholder="Search" class="" name="text" tabindex="0"
                                            value="" aria-required="true" required="">
                                    </fieldset>
                                    <button class="" type="submit">
                                        <i class="icon icon-search"></i>
                                    </button>
                                </form>
                                <div class="popular-searches justify-content-md-center">
                                    <div class="text fw-medium">Popular searches:</div>
                                    <ul>
                                        <li><a class="link" href="#">Featured</a></li>
                                        <li><a class="link" href="#">Trendy</a></li>
                                        <li><a class="link" href="#">New</a></li>
                                        <li><a class="link" href="#">Sale</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="featured-product">
                                <div class="text-xl-2 fw-medium featured-product-heading">Featured product</div>
                                <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-swiper='{
                                        "slidesPerView": 2,
                                        "spaceBetween": 12,
                                        "speed": 800,
                                        "observer": true,
                                        "observeParents": true,
                                        "slidesPerGroup": 2,
                                        "pagination": { "el": ".sw-pagination-search", "clickable": true },
                                        "breakpoints": {
                                        "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                                        "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4}
                                        }
                                    }'>
                                    <div class="swiper-wrapper">
                                        <!-- item 1 -->
                                        <div class="swiper-slide">
                                            <div class="card-product style-5 text-center">
                                                <div class="card-product-wrapper asp-ratio-0">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="img-product lazyload"
                                                            data-src="images/products/skincare/product-1.jpg"
                                                            src="images/products/skincare/product-1.jpg"
                                                            alt="image-product">
                                                        <img class="img-hover lazyload"
                                                            data-src="images/products/skincare/product-5.jpg"
                                                            src="images/products/skincare/product-5.jpg"
                                                            alt="image-product">
                                                    </a>
                                                    <div class="on-sale-wrap"><span class="on-sale-item">20% Off</span>
                                                    </div>
                                                    <ul class="list-product-btn">
                                                        <li class="wishlist">
                                                            <a href="javascript:void(0);"
                                                                class="box-icon bg-surface hover-tooltip tooltip-left">
                                                                <span class="icon icon-heart2"></span>
                                                                <span class="tooltip">Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn-quickview box-icon bg-surface quickview hover-tooltip tooltip-left">
                                                                <span class="icon icon-view"></span>
                                                                <span class="tooltip">Quick View</span>
                                                            </a>
                                                        </li>
                                                        <li class="compare">
                                                            <a href="javascript:void(0);"
                                                                class="btn-compare box-icon bg-surface hover-tooltip tooltip-left">
                                                                <span class="icon icon-compare"></span>
                                                                <span class="tooltip">Add to Compare</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-product-info">
                                                    <a href="product-detail.html"
                                                        class="name-product link fw-medium body-text ">
                                                        Estee Lauder Advanced Night Repair
                                                    </a>
                                                    <p class="price-wrap fw-medium">
                                                        <span class="price-new text-primary">$130.00</span>
                                                        <span class="price-old">$150.00</span>
                                                    </p>
                                                    <ul
                                                        class="list-color-product list-capacity-product justify-content-center">
                                                        <li class="list-color-item color-swatch active">
                                                            <span class="text-quantity ">50ml</span>
                                                            <img class="lazyload"
                                                                data-src="images/products/skincare/product-1.jpg"
                                                                src="images/products/skincare/product-1.jpg"
                                                                alt="image-product">
                                                        </li>
                                                        <li class="list-color-item color-swatch">
                                                            <span class=" text-quantity ">100ml</span>
                                                            <img class=" lazyload"
                                                                data-src="images/products/skincare/product-5.jpg"
                                                                src="images/products/skincare/product-5.jpg"
                                                                alt="image-product">
                                                        </li>
                                                    </ul>
                                                    <div class="btn-addcart">
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="tf-btn btn-dark3 fw-normal  hover-primary">Add to
                                                            Cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- item 2 -->
                                        <div class="swiper-slide">
                                            <div class="card-product style-5 text-center">
                                                <div class="card-product-wrapper asp-ratio-0">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="img-product lazyload"
                                                            data-src="images/products/skincare/product-2.jpg"
                                                            src="images/products/skincare/product-2.jpg"
                                                            alt="image-product">
                                                        <img class="img-hover lazyload"
                                                            data-src="images/products/skincare/product-6.jpg"
                                                            src="images/products/skincare/product-6.jpg"
                                                            alt="image-product">
                                                    </a>
                                                    <ul class="list-product-btn">
                                                        <li class="wishlist">
                                                            <a href="javascript:void(0);"
                                                                class="box-icon bg-surface hover-tooltip tooltip-left">
                                                                <span class="icon icon-heart2"></span>
                                                                <span class="tooltip">Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn-quickview box-icon bg-surface quickview hover-tooltip tooltip-left">
                                                                <span class="icon icon-view"></span>
                                                                <span class="tooltip">Quick View</span>
                                                            </a>
                                                        </li>
                                                        <li class="compare">
                                                            <a href="javascript:void(0);"
                                                                class="btn-compare box-icon bg-surface hover-tooltip tooltip-left">
                                                                <span class="icon icon-compare"></span>
                                                                <span class="tooltip">Add to Compare</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="on-sale-wrap"><span
                                                            class="on-sale-item trending">Trending</span></div>
                                                </div>
                                                <div class="card-product-info">
                                                    <a href="product-detail.html"
                                                        class="name-product link fw-medium body-text ">
                                                        Skullcandy Crusher ANC 2 Over-Ear
                                                    </a>
                                                    <p class="price-wrap fw-medium">
                                                        <span class="price-new text-primary">$140.00</span>
                                                    </p>
                                                    <ul
                                                        class="list-color-product list-capacity-product justify-content-center">
                                                        <li class="list-color-item color-swatch active">
                                                            <span class="text-quantity">50ml</span>
                                                            <img class="lazyload"
                                                                data-src="images/products/skincare/product-2.jpg"
                                                                src="images/products/skincare/product-2.jpg"
                                                                alt="image-product">
                                                        </li>
                                                        <li class="list-color-item color-swatch">
                                                            <span class=" text-quantity ">100ml</span>
                                                            <img class=" lazyload"
                                                                data-src="images/products/skincare/product-6.jpg"
                                                                src="images/products/skincare/product-6.jpg"
                                                                alt="image-product">
                                                        </li>
                                                    </ul>
                                                    <div class="btn-addcart">
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="tf-btn btn-dark3 fw-normal  hover-primary">Add to
                                                            Cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- item 3 -->
                                        <div class="swiper-slide">
                                            <div class="card-product style-5 text-center">
                                                <div class="card-product-wrapper asp-ratio-0">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="img-product lazyload"
                                                            data-src="images/products/skincare/product-3.jpg"
                                                            src="images/products/skincare/product-3.jpg"
                                                            alt="image-product">
                                                        <img class="img-hover lazyload"
                                                            data-src="images/products/skincare/product-7.jpg"
                                                            src="images/products/skincare/product-7.jpg"
                                                            alt="image-product">
                                                    </a>
                                                    <ul class="list-product-btn">
                                                        <li class="wishlist">
                                                            <a href="javascript:void(0);"
                                                                class="box-icon bg-surface hover-tooltip tooltip-left">
                                                                <span class="icon icon-heart2"></span>
                                                                <span class="tooltip">Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn-quickview box-icon bg-surface quickview hover-tooltip tooltip-left">
                                                                <span class="icon icon-view"></span>
                                                                <span class="tooltip">Quick View</span>
                                                            </a>
                                                        </li>
                                                        <li class="compare">
                                                            <a href="javascript:void(0);"
                                                                class="btn-compare box-icon bg-surface hover-tooltip tooltip-left">
                                                                <span class="icon icon-compare"></span>
                                                                <span class="tooltip">Add to Compare</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="on-sale-wrap"><span class="on-sale-item">20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="card-product-info">
                                                    <a href="product-detail.html"
                                                        class="name-product link fw-medium body-text ">
                                                        Skullcandy Crusher ANC 2 Over-Ear
                                                    </a>
                                                    <p class="price-wrap fw-medium">
                                                        <span class="price-new text-primary">$80.00</span>
                                                        <span class=" price-old">$100.00</span>
                                                    </p>
                                                    <ul
                                                        class="list-color-product list-capacity-product justify-content-center">
                                                        <li class="list-color-item color-swatch active">
                                                            <span class="text-quantity">50ml</span>
                                                            <img class="lazyload"
                                                                data-src="images/products/skincare/product-3.jpg"
                                                                src="images/products/skincare/product-3.jpg"
                                                                alt="image-product">
                                                        </li>
                                                        <li class="list-color-item color-swatch">
                                                            <span class="text-quantity">100ml</span>
                                                            <img class="lazyload"
                                                                data-src="images/products/skincare/product-7.jpg"
                                                                src="images/products/skincare/product-7.jpg"
                                                                alt="image-product">
                                                        </li>
                                                    </ul>
                                                    <div class="btn-addcart">
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="tf-btn btn-dark3 fw-normal  hover-primary">Add to
                                                            Cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- item 4 -->
                                        <div class="swiper-slide">
                                            <div class="card-product style-5 text-center">
                                                <div class="card-product-wrapper asp-ratio-0">
                                                    <a href="product-detail.html" class="product-img">
                                                        <img class="img-product lazyload"
                                                            data-src="{{ asset('frontend_assets/images/products/skincare/product-4.jpg')}}"
                                                            src="{{ asset('frontend_assets/images/products/skincare/product-4.jpg')}}"
                                                            alt="image-product">
                                                        <img class="img-hover lazyload"
                                                            data-src="{{ asset('frontend_assets/images/products/skincare/product-8.jpg')}}"
                                                            src="{{ asset('frontend_assets/images/products/skincare/product-8.jpg')}}"
                                                            alt="image-product">
                                                    </a>
                                                    <ul class="list-product-btn">
                                                        <li class="wishlist">
                                                            <a href="javascript:void(0);"
                                                                class="box-icon bg-surface hover-tooltip tooltip-left">
                                                                <span class="icon icon-heart2"></span>
                                                                <span class="tooltip">Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"
                                                                class="btn-quickview box-icon bg-surface quickview hover-tooltip tooltip-left">
                                                                <span class="icon icon-view"></span>
                                                                <span class="tooltip">Quick View</span>
                                                            </a>
                                                        </li>
                                                        <li class="compare">
                                                            <a href="javascript:void(0);"
                                                                class="btn-compare box-icon bg-surface hover-tooltip tooltip-left">
                                                                <span class="icon icon-compare"></span>
                                                                <span class="tooltip">Add to Compare</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-product-info">
                                                    <a href="product-detail.html"
                                                        class="name-product link fw-medium body-text ">
                                                        Lancome Advanced Genifique
                                                    </a>
                                                    <p class="price-wrap fw-medium">
                                                        <span class="price-new">$130.00</span>
                                                    </p>
                                                    <ul
                                                        class="list-color-product list-capacity-product justify-content-center">
                                                        <li class="list-color-item color-swatch active">
                                                            <span class="text-quantity">50ml</span>
                                                            <img class="lazyload"
                                                                data-src="{{ asset('frontend_assets/images/products/skincare/product-4.jpg')}}"
                                                                src="{{ asset('frontend_assets/images/products/skincare/product-4.jpg')}}"
                                                                alt="image-product">
                                                        </li>
                                                        <li class="list-color-item color-swatch">
                                                            <span class="text-quantity">100ml</span>
                                                            <img class="lazyload"
                                                                data-src="{{ asset('frontend_assets/images/products/skincare/product-8.jpg')}}"
                                                                src="{{ asset('frontend_assets/images/products/skincare/product-8.jpg')}}"
                                                                alt="image-product">
                                                        </li>
                                                    </ul>
                                                    <div class="btn-addcart">
                                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                            class="tf-btn btn-dark3 fw-normal hover-primary">Add to
                                                            cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex d-xl-none sw-dot-default sw-pagination-search justify-content-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /search -->

    <!-- shoppingCart -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-shopping-cart" id="shoppingCart">
        <div class="canvas-wrapper">
            <div class="popup-header">
                <span class="title">Shopping cart</span>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"></span>
            </div>
            <div class="wrap">
                <div class="tf-mini-cart-threshold">
                    <div class="text">
                        Spend <span class="fw-medium">$100</span> more to get <span class="fw-medium">Free
                            Shipping</span>
                    </div>
                    <div class="tf-progress-bar tf-progress-ship">
                        <div class="value" style="width: 0%;" data-progress="75">
                            <i class="icon icon-car"></i>
                        </div>
                    </div>
                </div>
                <div class="tf-mini-cart-wrap">
                    <div class="tf-mini-cart-main">
                        <div class="tf-mini-cart-sroll">
                            <div class="tf-mini-cart-items">
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <a href="product-detail.html">
                                            <img class="lazyload" data-src="{{ asset('frontend_assets/images/products/skincare/product-1.jpg')}}"
                                                src="{{ asset('frontend_assets/images/products/skincare/product-1.jpg')}}" alt="img-product">
                                        </a>
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="d-flex justify-content-between">
                                            <a class="title link text-md fw-medium" href="product-detail.html">Estee
                                                Lauder Advanced Night Repair</a>
                                            <i class="icon icon-close remove fs-12"></i>
                                        </div>
                                        <div class="info-variant">
                                            <select class="text-xs">
                                                <option value="50ml">50ml</option>
                                                <option value="100ml">100ml</option>
                                            </select>
                                            <i class="icon-pen edit"></i>
                                        </div>
                                        <p class="price-wrap text-sm fw-medium">
                                            <span class="new-price text-primary">$130.00</span>
                                            <span
                                                class="old-price text-decoration-line-through text-dark-1">$150.00</span>
                                        </p>
                                        <div class="wg-quantity small">
                                            <button class="btn-quantity minus-btn">-</button>
                                            <input class="quantity-product font-4" type="text" name="number" value="1">
                                            <button class="btn-quantity plus-btn">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <a href="product-detail.html">
                                            <img class="lazyload" data-src="{{ asset('frontend_assets/images/products/skincare/product-2.jpg')}}"
                                                src="{{ asset('frontend_assets/images/products/skincare/product-2.jpg')}}" alt="img-product">
                                        </a>
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="d-flex justify-content-between">
                                            <a class="title link text-md fw-medium" href="product-detail.html">SK-II
                                                Facial Treatment Essence</a>
                                            <i class="icon icon-close remove fs-12"></i>
                                        </div>
                                        <div class="info-variant">
                                            <select class="text-xs">
                                                <option value="100ml">100ml</option>
                                                <option value="50ml">50ml</option>
                                            </select>
                                            <i class="icon-pen edit"></i>
                                        </div>
                                        <p class="price-wrap text-sm fw-medium">
                                            <span class="new-price text-primary">$170.00</span>
                                            <span
                                                class="old-price text-decoration-line-through text-dark-1">$190.00</span>
                                        </p>
                                        <div class="wg-quantity small">
                                            <button class="btn-quantity minus-btn">-</button>
                                            <input class="quantity-product font-4" type="text" name="number" value="1">
                                            <button class="btn-quantity plus-btn">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-minicart-recommendations">
                                <div
                                    class="tf-minicart-recommendations-heading d-flex justify-content-between align-items-end">
                                    <div class="tf-minicart-recommendations-title text-md fw-medium">You may also
                                        like</div>
                                    <div class="d-flex gap-10">
                                        <div
                                            class="swiper-button-prev nav-swiper arrow-1 size-30 nav-prev-also-product">
                                        </div>
                                        <div
                                            class="swiper-button-next nav-swiper arrow-1 size-30 nav-next-also-product">
                                        </div>
                                    </div>
                                </div>
                                <div dir="ltr" class="swiper tf-swiper" data-swiper='{
                                            "slidesPerView": 1,
                                            "spaceBetween": 10,
                                            "speed": 800,
                                            "observer": true,
                                            "observeParents": true,
                                            "slidesPerGroup": 1,
                                            "navigation": {
                                                "clickable": true,
                                                "nextEl": ".nav-next-also-product",
                                                "prevEl": ".nav-prev-also-product"
                                            }
                                        }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tf-mini-cart-item line radius-16">
                                                <div class="tf-mini-cart-image">
                                                    <a href="product-detail.html">
                                                        <img class="lazyload"
                                                            data-src="{{ asset('frontend_assets/images/products/skincare/product-3.jpg')}}"
                                                            src="{{ asset('frontend_assets/images/products/skincare/product-3.jpg')}}"
                                                            alt="img-product">
                                                    </a>
                                                </div>
                                                <div class="tf-mini-cart-info justify-content-center">
                                                    <a class="title link text-md fw-medium"
                                                        href="product-detail.html">La Mer The Treatment Lotion</a>
                                                    <p class="price-wrap text-sm fw-medium">
                                                        <span class="new-price text-primary">$80.00</span>
                                                        <span
                                                            class="old-price text-decoration-line-through text-dark-1">$100.00</span>
                                                    </p>
                                                    <a href="#"
                                                        class="tf-btn animate-btn d-inline-flex bg-dark-2 w-max-content">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tf-mini-cart-item line radius-16">
                                                <div class="tf-mini-cart-image">
                                                    <a href="product-detail.html">
                                                        <img class="lazyload"
                                                            data-src="{{ asset('frontend_assets/images/products/skincare/product-4.jpg')}}"
                                                            src="{{ asset('frontend_assets/images/products/skincare/product-4.jpg')}}"
                                                            alt="img-product">
                                                    </a>
                                                </div>
                                                <div class="tf-mini-cart-info justify-content-center">
                                                    <a class="title link text-md fw-medium"
                                                        href="product-detail.html">Lancome Advanced Genifique</a>
                                                    <p class="price-wrap text-sm fw-medium">
                                                        <span class="new-price">$130.00</span>
                                                    </p>
                                                    <a href="#"
                                                        class="tf-btn animate-btn d-inline-flex bg-dark-2 w-max-content">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tf-mini-cart-item line radius-16">
                                                <div class="tf-mini-cart-image">
                                                    <a href="product-detail.html">
                                                        <img class="lazyload"
                                                            data-src="{{ asset('frontend_assets/images/products/skincare/product-6.jpg')}}"
                                                            src="{{ asset('frontend_assets/images/products/skincare/product-6.jpg')}}"
                                                            alt="img-product">
                                                    </a>
                                                </div>
                                                <div class="tf-mini-cart-info justify-content-center">
                                                    <a class="title link text-md fw-medium"
                                                        href="product-detail.html">SK-II Facial Treatment Essence</a>
                                                    <p class="price-wrap text-sm fw-medium">
                                                        <span class="new-price text-primary">$130.00</span>
                                                        <span
                                                            class="old-price text-decoration-line-through text-dark-1">$150.00</span>
                                                    </p>
                                                    <a href="#"
                                                        class="tf-btn animate-btn d-inline-flex bg-dark-2 w-max-content">Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-bottom">
                        <div class="tf-mini-cart-tool">
                            <div class="tf-mini-cart-tool-btn btn-add-gift">
                                <i class="icon icon-gift2"></i>
                                <div class="text-xxs">Add gift wrap</div>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-add-note">
                                <i class="icon icon-note"></i>
                                <div class="text-xxs">Order note</div>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-coupon">
                                <i class="icon icon-coupon"></i>
                                <div class="text-xxs">Coupon</div>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-estimate-shipping">
                                <i class="icon icon-car"></i>
                                <div class="text-xxs">Shipping</div>
                            </div>
                        </div>
                        <div class="tf-mini-cart-bottom-wrap">
                            <div class="tf-cart-totals-discounts">
                                <div class="tf-cart-total text-xl fw-medium">Total:</div>
                                <div class="tf-totals-total-value text-xl fw-medium">$130.00 USD</div>
                            </div>
                            <div class="tf-cart-tax text-sm opacity-8">Taxes and shipping calculated at checkout
                            </div>
                            <div class="tf-cart-checkbox">
                                <div class="tf-checkbox-wrapp">
                                    <input class="" type="checkbox" id="CartDrawer-Form_agree" name="agree_checkbox">
                                    <div>
                                        <i class="icon-check"></i>
                                    </div>
                                </div>
                                <label for="CartDrawer-Form_agree" class="text-sm">
                                    I agree with the
                                    <a href="term-and-condition.html" title="Terms of Service" class="fw-medium">terms
                                        and conditions</a>
                                </label>
                            </div>
                            <div class="tf-mini-cart-view-checkout">
                                <a href="checkout.html"
                                    class="tf-btn animate-btn d-inline-flex bg-dark-2 w-100 justify-content-center"><span>Check
                                        out</span></a>
                                <a href="view-cart.html"
                                    class="tf-btn btn-out-line-dark2 w-100 justify-content-center">View cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-gift">
                        <div class="overplay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text text-sm fw-medium">Add gift wrap</div>
                            <div class="tf-mini-cart-tool-text1">The product will be wrapped carefully.
                                Fee is only <span class="text fw-medium text-dark">$10.00</span>. Do you want a
                                gift wrap?</div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                    type="submit">Add a Gift Wrap</button>
                                <div class="tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">Cancel</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-note">
                        <div class="overplay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <label for="Cart-note" class="tf-mini-cart-tool-text text-sm fw-medium">Order
                                note</label>
                            <textarea name="note" id="Cart-note" placeholder="Instruction for seller..."></textarea>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                    type="submit">Save</button>
                                <div class="tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">Close</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable coupon">
                        <div class="overplay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text text-sm fw-medium">Add coupon</div>
                            <div class="tf-mini-cart-tool-text1">* Discount will be calculated and
                                applied at checkout</div>
                            <input type="text" name="text" placeholder="">
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                    type="submit">Save</button>
                                <div class="tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">Close</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable estimate-shipping">
                        <div class="overplay tf-mini-cart-tool-close"></div>
                        <form id="shipping-form" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text text-sm fw-medium">Shipping estimates</div>
                            <div class="field">
                                <p class="text-sm">Country</p>
                                <div class="tf-select">
                                    <select class="w-100" id="shipping-country-form" name="address[country]"
                                        data-default="">
                                        <option value="Australia"
                                            data-provinces='[["Australian Capital Territory","Australian Capital Territory"],["New South Wales","New South Wales"],["Northern Territory","Northern Territory"],["Queensland","Queensland"],["South Australia","South Australia"],["Tasmania","Tasmania"],["Victoria","Victoria"],["Western Australia","Western Australia"]]'>
                                            Australia</option>
                                        <option value="Austria" data-provinces='[]'>Austria</option>
                                        <option value="Belgium" data-provinces='[]'>Belgium</option>
                                        <option value="Canada"
                                            data-provinces='[["Ontario","Ontario"],["Quebec","Quebec"]]'>Canada
                                        </option>
                                        <option value="Czech Republic" data-provinces='[]'>Czechia</option>
                                        <option value="Denmark" data-provinces='[]'>Denmark</option>
                                        <option value="Finland" data-provinces='[]'>Finland</option>
                                        <option value="France" data-provinces='[]'>France</option>
                                        <option value="Germany" data-provinces='[]'>Germany</option>
                                        <option selected value="United States"
                                            data-provinces='[["Alabama","Alabama"],["California","California"],["Florida","Florida"]]'>
                                            United States</option>
                                        <option value="United Kingdom"
                                            data-provinces='[["England","England"],["Scotland","Scotland"],["Wales","Wales"],["Northern Ireland","Northern Ireland"]]'>
                                            United Kingdom</option>
                                        <option value="India" data-provinces='[]'>India</option>
                                        <option value="Japan" data-provinces='[]'>Japan</option>
                                        <option value="Mexico" data-provinces='[]'>Mexico</option>
                                        <option value="South Korea" data-provinces='[]'>South Korea</option>
                                        <option value="Spain" data-provinces='[]'>Spain</option>
                                        <option value="Italy" data-provinces='[]'>Italy</option>
                                        <option value="Vietnam"
                                            data-provinces='[["Ha Noi","Ha Noi"],["Da Nang","Da Nang"],["Ho Chi Minh","Ho Chi Minh"]]'>
                                            Vietnam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <p class="text-sm">State/Province</p>
                                <div class="tf-select">
                                    <select id="shipping-province-form" name="address[province]"
                                        data-default=""></select>
                                </div>
                            </div>
                            <div class="field">
                                <p class="text-sm">Zipcode</p>
                                <input type="text" data-opend-focus id="zipcode" name="address[zip]" value="">
                            </div>
                            <div id="zipcode-message" class="error" style="display: none;">
                                We found one shipping rate available for undefined.
                            </div>
                            <div id="zipcode-success" class="success" style="display: none;">
                                <p>We found one shipping rate available for your address:</p>
                                <p class="standard">Standard at <span>$0.00</span> USD</p>
                            </div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                    type="submit">Estimate</button>
                                <div
                                    class="tf-mini-cart-tool-primary tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">
                                    Close</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /shoppingCart -->

    <!-- modal quickView -->
    <div class="modal fade modalCentered modal-quick-view" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                <div class="tf-product-media-wrap">
                    <div dir="ltr" class="swiper tf-single-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-color="orange">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ asset('frontend_assets/images/products/skincare/product-4.jpg')}}"
                                        src="images/products/skincare/product-4.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-color="green">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ asset('frontend_assets/images/products/skincare/product-8.jpg')}}"
                                        src="images/products/skincare/product-8.jpg" alt="">
                                </div>
                            </div>

                        </div>
                        <div class="swiper-button-prev nav-swiper arrow-1 nav-prev-cls single-slide-prev"></div>
                        <div class="swiper-button-next nav-swiper arrow-1 nav-next-cls single-slide-next"></div>
                    </div>
                </div>
                <div class="tf-product-info-wrap">
                    <div class="tf-product-info-inner">
                        <div class="tf-product-info-heading">
                            <h6 class="product-info-name"><a href="product-detail.html" class="link">Lancome Advanced
                                    Genifique</a></h6>
                            <div class="product-info-price">
                                <h6 class="price-new price-on-sale text-dark">$130.00</h6>
                            </div>
                            <p class="text">Cream in a lightweight formula made from a blend of hyaluronic acid and
                                botanical extracts. Featuring deep hydration and a silky finish. Absorbs quickly while
                                nourishing the skin, leaving it soft, plump, and radiant.</p>
                        </div>
                        <div class="tf-product-total-quantity">
                            <div class="group-btn">
                                <div class="wg-quantity">
                                    <button class="btn-quantity minus-btn">-</button>
                                    <input class="quantity-product font-4" type="text" name="number" value="1">
                                    <button class="btn-quantity plus-btn">+</button>
                                </div>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn hover-primary">Add to
                                    cart</a>
                            </div>
                            <a href="checkout.html" class="tf-btn w-100 animate-btn paypal btn-primary">Buy It Now</a>
                            <a href="checkout.html" class="more-choose-payment link">More payment options</a>
                        </div>
                        <a href="product-detail.html" class="view-details link">View full details <i
                                class="icon icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quickView -->

    <!-- compare  -->
    <div class="modal modalCentered fade modal-compare" id="compare">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <span class="icon icon-close btn-hide-popup" data-bs-dismiss="modal"></span>
                <div class="modal-compare-wrap list-file-delete">
                    <h6 class="title text-center">Compare Products</h6>
                    <div class="tf-compare-inner">
                        <div class="tf-compare-list">
                            <div class="tf-compare-item file-delete">
                                <span class="icon-close remove"></span>
                                <a href="product-detail.html" class="image">
                                    <img class="lazyload" data-src="{{ asset('frontend_assets/images/products/skincare/product-1.jpg')}}"
                                        src="{{ asset('frontend_assets/images/products/skincare/product-1.jpg')}}" alt="">
                                </a>
                                <div class="content">
                                    <div class="text-title">
                                        <a class="link text-line-clamp-2" href="product-detail.html">Lancome Advanced
                                            Genifique</a>
                                    </div>
                                    <p class="price-wrap">
                                        <span class="new-price text-primary">$130.00</span>
                                        <span class="old-price text-decoration-line-through text-dark-1">$150.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <span class="icon-close remove"></span>
                                <a href="product-detail.html" class="image">
                                    <img class="lazyload" data-src="{{ asset('frontend_assets/images/products/skincare/product-2.jpg')}}"
                                        src="{{ asset('frontend_assets/images/products/skincare/product-2.jpg')}}" alt="">
                                </a>
                                <div class="content">
                                    <div class="text-title">
                                        <a class="link text-line-clamp-2" href="product-detail.html">SK-II Facial
                                            Treatment Essence</a>
                                    </div>
                                    <p class="price-wrap">
                                        <span class="new-price">$120.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <span class="icon-close remove"></span>
                                <a href="product-detail.html" class="image">
                                    <img class="lazyload" data-src="{{ asset('frontend_assets/images/products/skincare/product-3.jpg')}}"
                                        src="{{ asset('frontend_assets/images/products/skincare/product-3.jpg')}}" alt="">
                                </a>
                                <div class="content">
                                    <div class="text-title">
                                        <a class="link text-line-clamp-2" href="product-detail.html">La Mer The
                                            Treatment Lotion</a>
                                    </div>
                                    <p class="price-wrap">
                                        <span class="new-price text-primary">$80.00</span>
                                        <span class="old-price text-decoration-line-through text-dark-1">$100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-compare-buttons justify-content-center">
                        <a href="compare.html" class="tf-btn animate-btn justify-content-center">Compare</a>
                        <div class="tf-btn btn-out-line-dark justify-content-center clear-file-delete"><span>Clear
                                All</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /compare  -->


    <!-- Javascript -->
    @include('Frontend_layouts.script')
</body>


</html>