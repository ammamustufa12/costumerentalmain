<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

@include('Frontend_layouts.heade')

<body class="font-2 bg-surface-5">

    <!-- Scroll Top -->
    <button id="goTop" class="pos1">
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
        <div class="tf-topbar bg-dark-5 topbar-bg">
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
                                    <p>Return extended to 60 days</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Life-time Guarantes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Limited-Time Offer</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <!-- 2 -->
                                <div class="marquee-child-item">
                                    <p>Return extended to 60 days</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Life-time Guarantes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Limited-Time Offer</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <!-- 3 -->
                                <div class="marquee-child-item">
                                    <p>Return extended to 60 days</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Life-time Guarantes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Limited-Time Offer</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <!-- 4 -->
                                <div class="marquee-child-item">
                                    <p>Return extended to 60 days</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Life-time Guarantes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Limited-Time Offer</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <!-- 5 -->
                                <div class="marquee-child-item">
                                    <p>Return extended to 60 days</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Life-time Guarantes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Limited-Time Offer</p>
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
         <header id="header" class="header-default">
            <div class="container">
                <div class="row wrapper-header align-items-center">
                    <div class="col-md-4 col-3 d-xl-none">
                        <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" aria-controls="mobileMenu">
                            <i class="icon icon-categories1"></i>
                        </a>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6">
                        <a href="index.html" class="logo-header">
                            <a href="{{ route('home') }}" class="logo-header" style="font-size: 24px; font-weight: bold; color: black; text-transform: uppercase;">
                                Smiles Creations
                            </a>
                        </a>
                    </div>
                    <div class="col-xl-8 d-none d-xl-block">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-menu">
                                <li class="menu-item">
                                    <a href="{{ route('home') }}" class="item-link">Home</a>
                              
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('aboutus') }}" class="item-link">About</a>
                              
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('frontend.danceclasses') }}" class="item-link">Dance Classes</a>
                              
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="#" class="item-link">Rentals<i class="icon icon-arr-down"></i></a>
                                    <div class="sub-menu sub-menu-style-3">
                                        <ul class="menu-list mt-0">
        
                                            <li><a href="blog-list-01.html" class="menu-link-text link"> Costume Rental</a>
                                            </li>
                                            <li><a href="blog-list-02.html" class="menu-link-text link">Instrument Rental</a>
                                            </li>
        
                                        </ul>
                                   
                                    </div>
        
                                </li>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="item-link">Gallery</a>
                              
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('contactus') }} class="item-link">Contact Us</a>
                              
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-2 col-md-4 col-3">
                        <ul class="nav-icon d-flex justify-content-end align-items-center">
                            <li class="nav-search">
                                <a href="#search" data-bs-toggle="modal" class="nav-icon-item">
                                    <i class="icon icon-search"></i>
                                </a>
                            </li>
                            <li class="nav-account">
                                <a href="#login" data-bs-toggle="offcanvas" aria-controls="login" class="nav-icon-item">
                                    <i class="icon icon-user"></i>
                                </a>
                            </li>
                            <li class="nav-wishlist">
                                <a href="wish-list.html" class="nav-icon-item">
                                    <i class="icon icon-heart"></i>
                                    <span class="count-box">0</span>
                                </a>
                            </li>
                            <li class="nav-cart">
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="nav-icon-item">
                                    <i class="icon icon-cart"></i>
                                    <span class="count-box">0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->
        <!-- Breadcrumb -->
        <div class="tf-breadcrumb mb-27">
            <div class="container">
                <ul class="breadcrumb-list">
                    <li class="item-breadcrumb">
                        <a href="index.html" class="text">Home</a>
                    </li>
                    <li class="item-breadcrumb dot">
                        <span></span>
                    </li>
                    <li class="item-breadcrumb">
                        <span class="text">Linen Blend Pants</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Breadcrumb -->
        <!-- Product Main -->
        <section class="flat-single-product">
            <div class="tf-main-product section-image-zoom">
                <div class="container">
                    <div class="row">
                      
                        <div class="col-md-6">
                            <div class="tf-product-media-wrap sticky-top">
                                <div class="product-thumbs-slider">
                        
                      
<div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom"
data-preview="4" data-direction="vertical">
<div class="swiper-wrapper stagger-wrap">
    @foreach($images as $img)
        <div class="swiper-slide">
            <a href="{{ asset('storage/' . $img) }}" target="_blank"
                class="item" data-pswp-width="552" data-pswp-height="827">
                <img class="tf-image-zoom lazyload"
                    data-zoom="{{ asset('storage/' . $img) }}"
                    data-src="{{ asset('storage/' . $img) }}"
                    src="{{ asset('storage/' . $img) }}"
                    alt="{{ $costume->name }}">
            </a>
        </div>
    @endforeach
</div>
</div>

<!-- Main Gallery -->
<div class="flat-wrap-media-product">
<div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
    <div class="swiper-wrapper">
        @foreach($images as $img)
            <div class="swiper-slide">
                <a href="{{ asset('storage/' . $img) }}" target="_blank"
                    class="item" data-pswp-width="552" data-pswp-height="827">
                    <img class="tf-image-zoom lazyload"
                        data-zoom="{{ asset('storage/' . $img) }}"
                        data-src="{{ asset('storage/' . $img) }}"
                        src="{{ asset('storage/' . $img) }}"
                        alt="{{ $costume->name }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
<div class="swiper-button-next nav-swiper thumbs-next"></div>
<div class="swiper-button-prev nav-swiper thumbs-prev"></div>
</div>

                                    <!-- Main Gallery -->
                                    <div class="flat-wrap-media-product">
                                        <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                                            <div class="swiper-wrapper">
                                                @foreach($images as $img)
                                                @php
                                                $images = is_array($costume->images) ? $costume->images : json_decode($costume->images, true);
                                                $firstImage = $images[0] ?? 'default.jpg';
                                                $secondImage = $images[1] ?? $firstImage; // fallback to first if second not available
                                            @endphp
                                                    <div class="swiper-slide">
                                                        <a href="{{ asset('storage/' . $firstImage) }}" target="_blank"
                                                            class="item" data-pswp-width="552" data-pswp-height="827">
                                                            <img class="tf-image-zoom lazyload"
                                                                data-zoom="{{ asset('storage/' . $firstImage) }}"
                                                                data-src="{{ asset('storage/' . $secondImage) }}"
                                                                src="{{ asset('storage/' . $secondImage) }}"
                                                                alt="{{ $costume->name }}">
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="swiper-button-next nav-swiper thumbs-next"></div>
                                        <div class="swiper-button-prev nav-swiper thumbs-prev"></div>
                                    </div>
                        
                                </div>
                            </div>
                        </div>
                        {{-- <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const colorButtons = document.querySelectorAll('.color-btn');
                                const sizeContainer = document.getElementById('sizes-container');
                                const sizeBlock = document.getElementById('size-options');
                                const currentColorLabel = document.querySelector('.value-currentColor');
                            
                                colorButtons.forEach(btn => {
                                    btn.addEventListener('click', function () {
                                        const selectedColor = this.dataset.color;
                                        currentColorLabel.textContent = selectedColor;
                            
                                        const sizes = JSON.parse(this.dataset.sizes);
                                        sizeContainer.innerHTML = '';
                                        sizeBlock.classList.remove('d-none');
                            
                                        sizes.forEach(size => {
                                            const label = document.createElement('label');
                                            label.classList.add('me-2');
                                            label.innerHTML = `
                                                <input type="checkbox" name="selected_sizes[]" value="${size}" class="me-1">
                                                ${size.toUpperCase()}
                                            `;
                                            sizeContainer.appendChild(label);
                                        });
                            
                                        document.querySelectorAll('.color-btn').forEach(btn => btn.classList.remove('active'));
                                        this.classList.add('active');
                                    });
                                });
                            });
                            </script>
                             --}}
                        <!-- /Product Images -->
                        <!-- Product Info -->
                        <div class="col-md-6">
                            <div class="tf-product-info-wrap position-relative">
                                <div class="tf-zoom-main"></div>
                                <div class="tf-product-info-list other-image-zoom">
                                    <div class="tf-product-info-heading">
                                        <h5 class="product-info-name fw-medium">{{ $costume->name }}</h5>
                                        <div class="product-info-rate">
                                            <div class="list-star">
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                            </div>
                                            <span class="count-review">(5 reviews)</span>
                                        </div>
                                        @php
                                        $discountAmount = $costume->price * ($costume->discount / 100);
                                        $discountedPrice = $costume->price - $discountAmount;
                                    @endphp
                                    
                                    <div class="product-info-price">
                                        <div class="display-sm price-new price-on-sale">
                                            {{ 'AED ' . number_format($discountedPrice, 2) }}
                                        </div>
                                        <div class="display-sm price-old">
                                            {{ 'AED ' . number_format($costume->price, 2) }}
                                        </div>
                                        @if($costume->discount > 0)
                                            <span class="badge-sale">{{ $costume->discount }}% Off</span>
                                        @endif
                                    </div>
                                
                                    </div>
                                    <div class="tf-product-info-variant">
                                        {{-- Color Variant --}}
                                        
                                    {{-- Color Variant --}}
<div class="variant-picker-item variant-color">
    <div class="variant-picker-label">
        Colors:
        <span class="variant-picker-label-value value-currentColor">{{ ucfirst($colors[0] ?? 'N/A') }}</span>
    </div>
    <div class="variant-picker-values">
        @foreach($colorSizeMap as $color => $sizes)
            <div class="hover-tooltip tooltip-bot color-btn {{ $loop->first ? 'active' : '' }}"
                data-color="{{ ucfirst($color) }}"
                data-sizes='@json($sizes)'>
                <span class="check-color bg-{{ strtolower($color) }}"></span>
                <span class="tooltip">{{ ucfirst($color) }}</span>
            </div>
        @endforeach
    </div>
</div>

{{-- Size Variant --}}
<div class="variant-picker-item variant-size">
    <div class="variant-picker-label">
        Size:
        <span class="variant-picker-label-value value-currentSize">Select a color</span>
    </div>
    <div id="size-options" class="variant-picker-values d-none">
        <div id="sizes-container"></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const colorButtons = document.querySelectorAll('.color-btn');
        const sizeContainer = document.getElementById('sizes-container');
        const sizeBlock = document.getElementById('size-options');
        const currentColorLabel = document.querySelector('.value-currentColor');
    
        colorButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const selectedColor = this.dataset.color;
                const sizes = JSON.parse(this.dataset.sizes);
    
                currentColorLabel.textContent = selectedColor;
    
                sizeContainer.innerHTML = '';
                sizeBlock.classList.remove('d-none');
    
                sizes.forEach(size => {
                    const label = document.createElement('label');
                    label.classList.add('me-2');
                    label.innerHTML = `
                        <input type="checkbox" name="selected_sizes[]" value="${size}" class="me-1">
                        ${size.toUpperCase()}
                    `;
                    sizeContainer.appendChild(label);
                });
    
                document.querySelectorAll('.color-btn').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
    </script>
    
                                        {{-- Size Variant --}}
                                        
                                    </div>
                                    
                                    <div class="tf-product-total-quantity">
                                        <div class="group-btn">
                                            <div class="wg-quantity">
                                                <button class="btn-quantity btn-decrease">-</button>
                                                <input class="quantity-product" type="text" name="number" value="1">
                                                <button class="btn-quantity btn-increase">+</button>
                                            </div>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                class="tf-btn hover-primary btn-add-to-cart">Add to cart</a>
                                        </div>
                                        <a href="checkout.html" class="tf-btn btn-primary w-100 animate-btn">Buy it
                                            now</a>
                                        <a href="checkout.html" class="more-choose-payment link">More payment
                                            options</a>
                                    </div>
                                    <div class="tf-product-pickup-available">
                                        <span class="icon icon-fill-check-circle"></span>
                                        <div class="content">
                                            <div class="text-sm d-flex">
                                                <p class="fw-medium">Pickup available at Sydney Store.</p> Usually ready
                                                in 24 hours.
                                            </div>
                                            <a href="#pickUp" data-bs-toggle="offcanvas"
                                                class="check-availability link">Check availability other stores</a>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-extra-link">
                                        <a href="javascript:void(0);" class="product-extra-icon link btn-add-wishlist">
                                            <i class="icon add icon-heart"></i><span class="add">Add to wishlist</span>
                                            <i class="icon added icon-trash"></i><span class="added">Remove from
                                                wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="modal" class="product-extra-icon link"><i
                                                class="icon icon-compare2"></i>Compare</a>
                                        <a href="#askQuestion" data-bs-toggle="modal" class="product-extra-icon link"><i
                                                class="icon icon-ask"></i>Ask a question</a>
                                        <a href="#shareSocial" data-bs-toggle="modal" class="product-extra-icon link"><i
                                                class="icon icon-share"></i>Share</a>
                                    </div>
                                    <div class="tf-product-info-trust-seal text-center">
                                        <p class="text-md text-dark-2 text-seal fw-medium">Guarantee Safe Checkout:</p>
                                        <ul class="list-card">
                                            <li class="card-item">
                                                <img src="images/payment/Visa.png" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="images/payment/DinersClub.png" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="images/payment/Mastercard.png" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="images/payment/Stripe.png" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="images/payment/PayPal.png" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="images/payment/GooglePay.png" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="images/payment/ApplePay.png" alt="card">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tf-product-info-delivery-return">
                                        <div class="product-delivery">
                                            <div class="icon icon-car2"></div>
                                            <p class="text-md">Estimated delivery time: <span class="fw-medium">3-5 days
                                                    international</span></p>
                                        </div>
                                        <div class="product-delivery">
                                            <div class="icon icon-shipping3"></div>
                                            <p class="text-md">Free shipping on <span class="fw-medium">all orders over
                                                    $150</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-product-fbt">
                                    <div class="title text-xl fw-medium">Frequently Bought Together</div>
                                    <form class="tf-product-form-bundle">
                                        <div class="tf-bundle-products">
                                            <div class="tf-bundle-product-item item-has-checkbox check">
                                                <div class="bundle-check">
                                                    <input type="checkbox" checked="checked" class="tf-check">
                                                </div>
                                                <a href="product-detail.html" class="bundle-image">
                                                    <img src="images/products/fashion/women-black-1.jpg"
                                                        alt="img-product">
                                                </a>
                                                <div class="bundle-info">
                                                    <div class="bundle-title text-sm fw-medium">This item: Single
                                                        Breasted Blazer</div>
                                                    <div class="bundle-price text-md fw-medium">
                                                        <span class="new-price">$60.00</span>
                                                        <span class="old-price">$80.00</span>
                                                    </div>
                                                    <div class="bundle-variant tf-select">
                                                        <select>
                                                            <option selected="selected">Black / S</option>
                                                            <option>Black / M</option>
                                                            <option>Black / L</option>
                                                            <option>Blue / S</option>
                                                            <option>Blue / M</option>
                                                            <option>Blue / L</option>
                                                            <option>Blue / XL</option>
                                                            <option>White / S</option>
                                                            <option>White / M</option>
                                                            <option>White / L</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tf-bundle-product-item item-has-checkbox">
                                                <div class="bundle-check">
                                                    <input type="checkbox" class="tf-check">
                                                </div>
                                                <a href="product-detail.html" class="bundle-image">
                                                    <img src="images/products/fashion/women-grey-3.jpg"
                                                        alt="img-product">
                                                </a>
                                                <div class="bundle-info">
                                                    <div class="bundle-title text-sm fw-medium">Short Sleeve Sweat</div>
                                                    <div class="bundle-price text-md fw-medium">
                                                        <span class="new-price">$75.00</span>
                                                    </div>
                                                    <div class="bundle-variant tf-select">
                                                        <select>
                                                            <option selected="selected">White / S</option>
                                                            <option>White / M</option>
                                                            <option>White / L</option>
                                                            <option>Black / M</option>
                                                            <option>Black / L</option>
                                                            <option>Blue / S</option>
                                                            <option>Blue / M</option>
                                                            <option>Blue / L</option>
                                                            <option>Blue / XL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tf-bundle-product-item item-has-checkbox">
                                                <div class="bundle-check">
                                                    <input type="checkbox" class="tf-check">
                                                </div>
                                                <a href="product-detail.html" class="bundle-image">
                                                    <img src="images/products/fashion/women-black-6.jpg"
                                                        alt="img-product">
                                                </a>
                                                <div class="bundle-info">
                                                    <div class="bundle-title text-sm fw-medium">One Shoulder Velvet
                                                        T-Shirt</div>
                                                    <div class="bundle-price text-md fw-medium">
                                                        <span class="new-price">$85.00</span>
                                                        <span class="old-price">$100.00</span>
                                                    </div>
                                                    <div class="bundle-variant tf-select">
                                                        <select>
                                                            <option selected="selected">Black / S</option>
                                                            <option>Black / M</option>
                                                            <option>Black / L</option>
                                                            <option>Blue / S</option>
                                                            <option>Blue / M</option>
                                                            <option>Blue / L</option>
                                                            <option>Blue / XL</option>
                                                            <option>White / S</option>
                                                            <option>White / M</option>
                                                            <option>White / L</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bundle-total-submit">
                                            <div class="text">Total price:</div>
                                            <span class="total-price">$60.00</span>
                                            <span class="total-price-old">$80.00</span>
                                        </div>
                                        <button data-bs-target="#shoppingCart" type="button" data-bs-toggle="offcanvas"
                                            class="btn-submit-total tf-btn btn-out-line-primary">Add selected to
                                            cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Info -->

                    </div>
                </div>
            </div>
            <div class="tf-sticky-btn-atc">
                <div class="container">
                    <div class="tf-height-observer w-100 d-flex align-items-center">
                        <div class="tf-sticky-atc-product d-flex align-items-center">
                            <div class="tf-sticky-atc-img">
                                <img class="lazyload" data-src="images/products/fashion/thumbs/thumb-black2.jpg" alt=""
                                    src="images/products/fashion/thumbs/thumb-black2.jpg">
                            </div>
                            <div class="tf-sticky-atc-title fw-5 d-xl-block d-none">Long Sleeve T-Shirt</div>
                        </div>
                        <div class="tf-sticky-atc-infos">
                            <form class="">
                                <div class="tf-sticky-atc-variant-price text-center tf-select">
                                    <select>
                                        <option selected="selected">Black / Small - $60.00</option>
                                        <option>Black / M - $60.00</option>
                                        <option>Black / L - $60.00</option>
                                        <option>Blue / S - $60.00</option>
                                        <option>Blue / M - $60.00</option>
                                        <option>Blue / L - $60.00</option>
                                        <option>Blue / XL - $60.00</option>
                                        <option>White / S - $60.00</option>
                                        <option>White / M - $60.00</option>
                                        <option>White / L - $60.00</option>
                                    </select>
                                </div>
                                <div class="tf-sticky-atc-btns">
                                    <div class="tf-product-info-quantity">
                                        <div class="wg-quantity">
                                            <button class="btn-quantity minus-btn">-</button>
                                            <input class="quantity-product font-4" type="text" name="number" value="1">
                                            <button class="btn-quantity plus-btn">+</button>
                                        </div>
                                    </div>
                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                        class="tf-btn animate-btn d-inline-flex justify-content-center">Add to cart</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Product Main -->
        <!-- Product Description -->
        <section class="flat-spacing pt-0">
            <div class="container">
                <div class="widget-accordion wd-product-descriptions">
                    <div class="accordion-title collapsed" data-bs-target="#description" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="description" role="button">
                        <span>Descriptions</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>
                    <div id="description" class="collapse">
                        <div class="accordion-body widget-desc">
                            <div class="item">
                                <p class="fw-medium title">Composition</p>
                                <ul>
                                    <li>Viscose 55%, Linen 45%</li>
                                    <li>We exclude the weight of minor components</li>
                                </ul>
                            </div>
                            <p class="item">Additional material information</p>
                            <div class="item">
                                <p class="title">The total weight of this product contains:</p>
                                <ul>
                                    <li>55% LivaEco™ viscose</li>
                                    <li>Viscose 55%</li>
                                </ul>
                            </div>
                            <ul class="item">
                                <li>We exclude the weight of minor components such as, but not exclusively: threads,
                                    buttons, zippers, embellishments and prints.</li>
                                <li>The total weight of the product is calculated by adding the weight of all layers and
                                    main components together. Based on that, we calculate how much of that weight is
                                    made out by each material. For sets & multipacks all pieces are counted together as
                                    one product in calculations.</li>
                                <li>Materials in this product explained</li>
                                <li>LinenLinen is a natural bast fibre derived from flax plants.</li>
                                <li>LivaEco™ viscoseLivaEco™ viscose is a branded viscose fibre, made from wood pulp.
                                </li>
                                <li> ViscoseViscose is a regenerated cellulose fibre commonly made from wood, but the
                                    raw material could also consist of other cellulosic materials.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="widget-accordion wd-product-descriptions">
                    <div class="accordion-title collapsed" data-bs-target="#material" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="material" role="button">
                        <span>Materials</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>
                    <div id="material" class="collapse">
                        <div class="accordion-body widget-material">
                            <div class="item">
                                <p class="fw-medium title">Materials Care</p>
                                <ul>
                                    <li>Content: 100% LENZING™ ECOVERO™ Viscose</li>
                                    <li>Care: Hand wash</li>
                                    <li>Imported</li>
                                    <li>Machine wash max. 30ºC. Short spin.</li>
                                    <li>Iron maximum 110ºC.</li>
                                    <li>Do not bleach/bleach.</li>
                                    <li>Do not dry clean.</li>
                                    <li>Tumble dry, medium hear.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-accordion wd-product-descriptions">
                    <div class="accordion-title collapsed" data-bs-target="#returnPolicies" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="returnPolicies" role="button">
                        <span>Return Policies</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>
                    <div id="returnPolicies" class="collapse">
                        <div class="accordion-body">
                            <ul class="list-policies">
                                <li>
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222">
                                        <path fill="currentColor"
                                            d="M8.7 30.7h22.7c.3 0 .6-.2.7-.6l4-25.3c-.1-.4-.3-.7-.7-.8s-.7.2-.8.6L34 8.9l-3-1.1c-2.4-.9-5.1-.5-7.2 1-2.3 1.6-5.3 1.6-7.6 0-2.1-1.5-4.8-1.9-7.2-1L6 8.9l-.7-4.3c0-.4-.4-.7-.7-.6-.4.1-.6.4-.6.8l4 25.3c.1.3.3.6.7.6zm.8-21.6c2-.7 4.2-.4 6 .8 1.4 1 3 1.5 4.6 1.5s3.2-.5 4.6-1.5c1.7-1.2 4-1.6 6-.8l3.3 1.2-3 19.1H9.2l-3-19.1 3.3-1.2zM32 32H8c-.4 0-.7.3-.7.7s.3.7.7.7h24c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zm0 2.7H8c-.4 0-.7.3-.7.7s.3.6.7.6h24c.4 0 .7-.3.7-.7s-.3-.6-.7-.6zm-17.9-8.9c-1 0-1.8-.3-2.4-.6l.1-2.1c.6.4 1.4.6 2 .6.8 0 1.2-.4 1.2-1.3s-.4-1.3-1.3-1.3h-1.3l.2-1.9h1.1c.6 0 1-.3 1-1.3 0-.8-.4-1.2-1.1-1.2s-1.2.2-1.9.4l-.2-1.9c.7-.4 1.5-.6 2.3-.6 2 0 3 1.3 3 2.9 0 1.2-.4 1.9-1.1 2.3 1 .4 1.3 1.4 1.3 2.5.3 1.8-.6 3.5-2.9 3.5zm4-5.5c0-3.9 1.2-5.5 3.2-5.5s3.2 1.6 3.2 5.5-1.2 5.5-3.2 5.5-3.2-1.6-3.2-5.5zm4.1 0c0-2-.1-3.5-.9-3.5s-1 1.5-1 3.5.1 3.5 1 3.5c.8 0 .9-1.5.9-3.5zm4.5-1.4c-.9 0-1.5-.8-1.5-2.1s.6-2.1 1.5-2.1 1.5.8 1.5 2.1-.5 2.1-1.5 2.1zm0-.8c.4 0 .7-.5.7-1.2s-.2-1.2-.7-1.2-.7.5-.7 1.2.3 1.2.7 1.2z">
                                        </path>
                                    </svg>
                                </li>
                                <li>
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222">
                                        <path fill="currentColor"
                                            d="M36.7 31.1l-2.8-1.3-4.7-9.1 7.5-3.5c.4-.2.6-.6.4-1s-.6-.5-1-.4l-7.5 3.5-7.8-15c-.3-.5-1.1-.5-1.4 0l-7.8 15L4 15.9c-.4-.2-.8 0-1 .4s0 .8.4 1l7.5 3.5-4.7 9.1-2.8 1.3c-.4.2-.6.6-.4 1 .1.3.4.4.7.4.1 0 .2 0 .3-.1l1-.4-1.5 2.8c-.1.2-.1.5 0 .8.1.2.4.3.7.3h31.7c.3 0 .5-.1.7-.4.1-.2.1-.5 0-.8L35.1 32l1 .4c.1 0 .2.1.3.1.3 0 .6-.2.7-.4.1-.3 0-.8-.4-1zm-5.1-2.3l-9.8-4.6 6-2.8 3.8 7.4zM20 6.4L27.1 20 20 23.3 12.9 20 20 6.4zm-7.8 15l6 2.8-9.8 4.6 3.8-7.4zm22.4 13.1H5.4L7.2 31 20 25l12.8 6 1.8 3.5z">
                                        </path>
                                    </svg>
                                </li>
                                <li>
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222">
                                        <path fill="currentColor"
                                            d="M5.9 5.9v28.2h28.2V5.9H5.9zM19.1 20l-8.3 8.3c-2-2.2-3.2-5.1-3.2-8.3s1.2-6.1 3.2-8.3l8.3 8.3zm-7.4-9.3c2.2-2 5.1-3.2 8.3-3.2s6.1 1.2 8.3 3.2L20 19.1l-8.3-8.4zM20 20.9l8.3 8.3c-2.2 2-5.1 3.2-8.3 3.2s-6.1-1.2-8.3-3.2l8.3-8.3zm.9-.9l8.3-8.3c2 2.2 3.2 5.1 3.2 8.3s-1.2 6.1-3.2 8.3L20.9 20zm8.4-10.2c-1.2-1.1-2.6-2-4.1-2.6h6.6l-2.5 2.6zm-18.6 0L8.2 7.2h6.6c-1.5.6-2.9 1.5-4.1 2.6zm-.9.9c-1.1 1.2-2 2.6-2.6 4.1V8.2l2.6 2.5zM7.2 25.2c.6 1.5 1.5 2.9 2.6 4.1l-2.6 2.6v-6.7zm3.5 5c1.2 1.1 2.6 2 4.1 2.6H8.2l2.5-2.6zm18.6 0l2.6 2.6h-6.6c1.4-.6 2.8-1.5 4-2.6zm.9-.9c1.1-1.2 2-2.6 2.6-4.1v6.6l-2.6-2.5zm2.6-14.5c-.6-1.5-1.5-2.9-2.6-4.1l2.6-2.6v6.7z">
                                        </path>
                                    </svg>
                                </li>
                                <li>
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222">
                                        <path fill="currentColor"
                                            d="M35.1 33.6L33.2 6.2c0-.4-.3-.7-.7-.7H13.9c-.4 0-.7.3-.7.7s.3.7.7.7h18l.7 10.5H20.8c-8.8.2-15.9 7.5-15.9 16.4 0 .4.3.7.7.7h28.9c.2 0 .4-.1.5-.2s.2-.3.2-.5v-.2h-.1zm-28.8-.5C6.7 25.3 13 19 20.8 18.9h11.9l1 14.2H6.3zm11.2-6.8c0 1.2-1 2.1-2.1 2.1s-2.1-1-2.1-2.1 1-2.1 2.1-2.1 2.1 1 2.1 2.1zm6.3 0c0 1.2-1 2.1-2.1 2.1-1.2 0-2.1-1-2.1-2.1s1-2.1 2.1-2.1 2.1 1 2.1 2.1z">
                                        </path>
                                    </svg>
                                </li>
                                <li>
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222">
                                        <path fill="currentColor"
                                            d="M20 33.8c7.6 0 13.8-6.2 13.8-13.8S27.6 6.2 20 6.2 6.2 12.4 6.2 20 12.4 33.8 20 33.8zm0-26.3c6.9 0 12.5 5.6 12.5 12.5S26.9 32.5 20 32.5 7.5 26.9 7.5 20 13.1 7.5 20 7.5zm-.4 15h.5c1.8 0 3-1.1 3-3.7 0-2.2-1.1-3.6-3.1-3.6h-2.6v10.6h2.2v-3.3zm0-5.2h.4c.6 0 .9.5.9 1.7 0 1.1-.3 1.7-.9 1.7h-.4v-3.4z">
                                        </path>
                                    </svg>
                                </li>
                                <li>
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222">
                                        <path fill="currentColor"
                                            d="M30.2 29.3c2.2-2.5 3.6-5.7 3.6-9.3s-1.4-6.8-3.6-9.3l3.6-3.6c.3-.3.3-.7 0-.9-.3-.3-.7-.3-.9 0l-3.6 3.6c-2.5-2.2-5.7-3.6-9.3-3.6s-6.8 1.4-9.3 3.6L7.1 6.2c-.3-.3-.7-.3-.9 0-.3.3-.3.7 0 .9l3.6 3.6c-2.2 2.5-3.6 5.7-3.6 9.3s1.4 6.8 3.6 9.3l-3.6 3.6c-.3.3-.3.7 0 .9.1.1.3.2.5.2s.3-.1.5-.2l3.6-3.6c2.5 2.2 5.7 3.6 9.3 3.6s6.8-1.4 9.3-3.6l3.6 3.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9l-3.8-3.6z">
                                        </path>
                                    </svg>
                                </li>
                                <li>
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222">
                                        <path fill="currentColor"
                                            d="M34.1 34.1H5.9V5.9h28.2v28.2zM7.2 32.8h25.6V7.2H7.2v25.6zm13.5-18.3a.68.68 0 0 0-.7-.7.68.68 0 0 0-.7.7v10.9a.68.68 0 0 0 .7.7.68.68 0 0 0 .7-.7V14.5z">
                                        </path>
                                    </svg>
                                </li>
                            </ul>
                            <p class="text-center text-paragraph">LT01: 70% wool, 15% polyester, 10% polyamide, 5%
                                acrylic 900 Grms/mt</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Product Description -->
        <!-- People Also Bought -->
        <section>
            <div class="container">
                <div class="flat-title wow fadeInUp">
                    <h4 class="title">People Also Bought</h4>
                </div>
                <div class="fl-control-sw2 wrap-pos-nav sw-over-product wow fadeInUp">
                    <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-swiper='{
                        "slidesPerView": 2,
                        "spaceBetween": 12,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 2,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-bought",
                            "prevEl": ".nav-prev-bought"
                        },
                        "pagination": { "el": ".sw-pagination-bought", "clickable": true },
                        "breakpoints": {
                        "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                        "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4}
                        }
                    }'>
                        <div class="swiper-wrapper">
                            <!-- item 1 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2 card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-10.jpg"
                                                src="images/products/fashion/product-10.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-4.jpg"
                                                src="images/products/fashion/product-4.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="size-box">
                                            <li class="size-item text-xs text-white">XS</li>
                                            <li class="size-item text-xs text-white">S</li>
                                            <li class="size-item text-xs text-white">M</li>
                                            <li class="size-item text-xs text-white">L</li>
                                            <li class="size-item text-xs text-white">XL</li>
                                            <li class="size-item text-xs text-white">2XL</li>
                                        </ul>
                                        <div class="on-sale-wrap flex-column">
                                            <span class="on-sale-item">20% Off</span>
                                            <span class="on-sale-item trending">Trending</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Long Sleeve T-Shirt</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new text-primary">$55.00</span>
                                            <span class=" price-old">$70.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Blue</span>
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-10.jpg"
                                                    src="images/products/fashion/product-10.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip line tooltip-bot">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-4.jpg"
                                                    src="images/products/fashion/product-4.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Pink</span>
                                                <span class="swatch-value bg-light-pink-9"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-30.jpg"
                                                    src="images/products/fashion/product-30.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 2 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-16.jpg"
                                                src="images/products/fashion/product-16.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-19.jpg"
                                                src="images/products/fashion/product-19.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="on-sale-wrap type-2 flex-column">
                                            <span class="on-sale-item trending">Trending</span>
                                            <span class="on-sale-item new">New</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html"
                                            class="name-product link fw-medium text-md">Sunburst Graphic Tee</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$115.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Yellow</span>
                                                <span class="swatch-value bg-yellow-4"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-16.jpg"
                                                    src="images/products/fashion/product-16.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Grey</span>
                                                <span class="swatch-value bg-grey-4"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-19.jpg"
                                                    src="images/products/fashion/product-19.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Black</span>
                                                <span class="swatch-value bg-dark"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-22.jpg"
                                                    src="images/products/fashion/product-22.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 3 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-32.jpg"
                                                src="images/products/fashion/product-32.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-42.jpg"
                                                src="images/products/fashion/product-42.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="on-sale-wrap">
                                            <span class="on-sale-item limited">Limited</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Breeze
                                            Soft Tee</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$85.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Grey</span>
                                                <span class="swatch-value bg-grey-4"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-32.jpg"
                                                    src="images/products/fashion/product-32.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Pink</span>
                                                <span class="swatch-value bg-light-pink-10"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-42.jpg"
                                                    src="images/products/fashion/product-42.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 4 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-33.jpg"
                                                src="images/products/fashion/product-33.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-17.jpg"
                                                src="images/products/fashion/product-17.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="on-sale-wrap type-2 flex-column">
                                            <span class="on-sale-item new">New</span>
                                            <span class="on-sale-item limited">Limited</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Back
                                            Printed Crew Neck T-Shirt</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$130.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Black</span>
                                                <span class="swatch-value bg-dark"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-33.jpg"
                                                    src="images/products/fashion/product-33.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch line hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-17.jpg"
                                                    src="images/products/fashion/product-17.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Green</span>
                                                <span class="swatch-value bg-green"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-21.jpg"
                                                    src="images/products/fashion/product-21.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 5 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/fs-orange2.jpg"
                                                src="images/products/fashion/fs-orange2.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/fs-green2.jpg"
                                                src="images/products/fashion/fs-green2.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="on-sale-wrap flex-column">
                                            <span class="on-sale-item">20% Off</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Puff
                                            Sleeve
                                            Shirred Blouse</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new text-primary">$57.00</span>
                                            <span class=" price-old">$70.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Orange</span>
                                                <span class="swatch-value bg-light-orange-2"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/fs-orange2.jpg"
                                                    src="images/products/fashion/fs-orange2.jpg" alt="image-product">
                                            </li>

                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Green</span>
                                                <span class="swatch-value bg-light-green"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/fs-green2.jpg"
                                                    src="images/products/fashion/fs-green2.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex d-xl-none sw-dot-default sw-pagination-bought justify-content-center"></div>
                    </div>
                    <div class="d-none d-xl-flex swiper-button-next nav-swiper nav-next-bought"></div>
                    <div class="d-none d-xl-flex swiper-button-prev nav-swiper nav-prev-bought"></div>
                </div>
            </div>
        </section>
        <!-- People Also Bought -->
        <!-- Recently Viewed -->
        <section class="flat-spacing">
            <div class="container">
                <div class="flat-title wow fadeInUp">
                    <h4 class="title">Recently Viewed</h4>
                </div>
                <div class="fl-control-sw2 wrap-pos-nav sw-over-product wow fadeInUp">
                    <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-swiper='{
                        "slidesPerView": 2,
                        "spaceBetween": 12,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 2,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-viewed",
                            "prevEl": ".nav-prev-viewed"
                        },
                        "pagination": { "el": ".sw-pagination-viewed", "clickable": true },
                        "breakpoints": {
                        "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                        "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4}
                        }
                    }'>
                        <div class="swiper-wrapper">
                            <!-- item 1 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2 card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-5.jpg"
                                                src="images/products/fashion/product-5.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-22.jpg"
                                                src="images/products/fashion/product-22.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="size-box">
                                            <li class="size-item text-xs text-white">XS</li>
                                            <li class="size-item text-xs text-white">S</li>
                                            <li class="size-item text-xs text-white">M</li>
                                            <li class="size-item text-xs text-white">L</li>
                                            <li class="size-item text-xs text-white">XL</li>
                                            <li class="size-item text-xs text-white">2XL</li>
                                        </ul>
                                        <div class="on-sale-wrap">
                                            <span class="on-sale-item">20% Off</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html"
                                            class="name-product link fw-medium text-md">Turtleneck T-shirt</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new text-primary">$80.00</span>
                                            <span class=" price-old">$100.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Grey</span>
                                                <span class="swatch-value bg-grey-4"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-5.jpg"
                                                    src="images/products/fashion/product-5.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Black</span>
                                                <span class="swatch-value bg-dark"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-22.jpg"
                                                    src="images/products/fashion/product-22.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Orange</span>
                                                <span class="swatch-value bg-light-orange-2"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-40.jpg"
                                                    src="images/products/fashion/product-40.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 2 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-12.jpg"
                                                src="images/products/fashion/product-12.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-39.jpg"
                                                src="images/products/fashion/product-39.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="on-sale-wrap">
                                            <span class="on-sale-item trending">Trending</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Loose
                                            Fit Tee</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$65.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Orange</span>
                                                <span class="swatch-value bg-light-orange-2"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-12.jpg"
                                                    src="images/products/fashion/product-12.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Blue</span>
                                                <span class="swatch-value bg-light-blue"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-39.jpg"
                                                    src="images/products/fashion/product-39.jpg" alt="image-product">
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 3 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-11.jpg"
                                                src="images/products/fashion/product-11.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-7.jpg"
                                                src="images/products/fashion/product-7.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="on-sale-wrap">
                                            <span class="on-sale-item">20% Off</span>
                                        </div>
                                        <div class="countdown-box">
                                            <div class="js-countdown" data-timer="1007500"
                                                data-labels="D  :,H  :,M  :,S"></div>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Crop
                                            T-shirt</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$45.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch line hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-11.jpg"
                                                    src="images/products/fashion/product-11.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Beige</span>
                                                <span class="swatch-value bg-beige"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-7.jpg"
                                                    src="images/products/fashion/product-7.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Light Orange</span>
                                                <span class="swatch-value bg-light-orange-2"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-18.jpg"
                                                    src="images/products/fashion/product-18.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 4 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-31.jpg"
                                                src="images/products/fashion/product-31.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-13.jpg"
                                                src="images/products/fashion/product-13.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="on-sale-wrap type-2">
                                            <span class="on-sale-item limited">Limited</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Short
                                            Sleeve Sweat</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$130.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li
                                                class="list-color-item color-swatch hover-tooltip line tooltip-bot active">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-31.jpg"
                                                    src="images/products/fashion/product-31.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Black</span>
                                                <span class="swatch-value bg-dark"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-13.jpg"
                                                    src="images/products/fashion/product-13.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 5 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-30.jpg"
                                                src="images/products/fashion/product-30.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-10.jpg"
                                                src="images/products/fashion/product-10.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Breeze
                                            Soft Tee</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new text-primary">$50.00</span>
                                            <span class=" price-old">$70.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Purple</span>
                                                <span class="swatch-value bg-purple-3"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-30.jpg"
                                                    src="images/products/fashion/product-30.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Blue</span>
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-10.jpg"
                                                    src="images/products/fashion/product-10.jpg" alt="image-product">
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex d-xl-none sw-dot-default sw-pagination-viewed justify-content-center"></div>
                    </div>
                    <div class="d-none d-xl-flex swiper-button-next nav-swiper nav-next-viewed"></div>
                    <div class="d-none d-xl-flex swiper-button-prev nav-swiper nav-prev-viewed"></div>
                </div>
            </div>
        </section>
        <!-- /Recently Viewed -->
        <!-- Footer -->
        <footer id="footer" class="footer-default footer-pb-2">
            <div class="footer-top">
                <div class="container">
                    <div class="footer-top-wrap">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="images/logo/logo.svg" class="logo" alt="logo">
                            </a>
                        </div>
                        <ul class="tf-social-icon style-large">
                            <li>
                                <a href="https://www.facebook.com/" class="social-item social-facebook">
                                    <i class="icon icon-fb"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="social-item social-instagram">
                                    <i class="icon icon-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.snapchat.com/" class="social-item social-linkedin"><i
                                        class="icon icon-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://x.com/" class="social-item social-x">
                                    <i class="icon icon-x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-body">
                <div class="container">
                    <div class="row-footer">
                        <div class="footer-col-block s1">
                            <div class="footer-heading footer-heading-mobile text-xl fw-medium">
                                Business Contact
                            </div>
                            <div class="tf-collapse-content">
                                <div class="footer-contact">
                                    <ul class="footer-info">
                                        <li class="item">
                                            <span class="box-icon">
                                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.1869 1.73431C9.06854 0.61592 7.58155 0 5.99993 0C4.4183 0 2.93129 0.61592 1.81292 1.73431C0.694534 2.85273 0.0786133 4.33969 0.0786133 5.92129C0.0786133 9.12084 3.10388 11.7821 4.72917 13.2118C4.95504 13.4105 5.15008 13.582 5.30547 13.7272C5.50016 13.9091 5.75006 14 5.9999 14C6.24979 14 6.49964 13.9091 6.69435 13.7272C6.84975 13.582 7.04479 13.4105 7.27065 13.2118C8.89594 11.7821 11.9212 9.12084 11.9212 5.92129C11.9212 4.33969 11.3053 2.85273 10.1869 1.73431ZM6.72897 12.5961C6.49816 12.7991 6.29885 12.9744 6.13451 13.1279C6.05902 13.1984 5.94078 13.1984 5.86526 13.1279C5.70095 12.9744 5.50161 12.7991 5.2708 12.596C3.74283 11.2519 0.898656 8.75001 0.898656 5.92131C0.898656 3.1085 3.18704 0.820124 5.99987 0.820124C8.81268 0.820124 11.1011 3.1085 11.1011 5.92131C11.1011 8.75001 8.25694 11.2519 6.72897 12.5961Z"
                                                        fill="#0D0D0D" />
                                                    <path
                                                        d="M6.00008 3.08887C4.56122 3.08887 3.39062 4.25943 3.39062 5.69829C3.39062 7.13715 4.56122 8.30772 6.00008 8.30772C7.43894 8.30772 8.6095 7.13715 8.6095 5.69829C8.6095 4.25943 7.43894 3.08887 6.00008 3.08887ZM6.00008 7.48759C5.01343 7.48759 4.21072 6.68489 4.21072 5.69826C4.21072 4.71164 5.01343 3.90894 6.00008 3.90894C6.98673 3.90894 7.7894 4.71164 7.7894 5.69826C7.7894 6.68489 6.98673 7.48759 6.00008 7.48759Z"
                                                        fill="#0D0D0D" />
                                                </svg>
                                            </span>
                                            <a target="_blank"
                                                href="https://www.google.com/maps?q=123Yarranst,Punchbowl,NSW2196,Australia">
                                                123 Yarran st, Punchbowl, NSW 2196, Australia
                                            </a>
                                        </li>
                                        <li class="item">
                                            <span class="box-icon">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.6666 9.4091L10.9841 8.4641C10.7324 8.12417 10.3574 7.89649 9.93972 7.82996C9.522 7.76343 9.09484 7.86335 8.74998 8.10827L8.09081 8.59243C7.13399 7.73698 6.36526 6.69214 5.83331 5.5241L6.49248 5.04577C6.837 4.79478 7.06794 4.41741 7.13464 3.99641C7.20135 3.5754 7.09838 3.14513 6.84831 2.79993L6.18331 1.86077C5.93339 1.51663 5.55703 1.28582 5.13698 1.21909C4.71693 1.15236 4.28757 1.25518 3.94331 1.50493L2.91664 2.23993C2.58681 2.47798 2.33009 2.80349 2.17547 3.17972C2.02086 3.55595 1.9745 3.96792 2.04164 4.3691C2.33803 6.09644 3.02915 7.73206 4.06118 9.14856C5.0932 10.5651 6.43827 11.7242 7.99164 12.5358C8.30603 12.696 8.65376 12.78 9.00664 12.7808C9.46814 12.7804 9.91756 12.6333 10.29 12.3608L11.3108 11.6666C11.4837 11.5428 11.6302 11.3858 11.7419 11.2048C11.8535 11.0238 11.9281 10.8224 11.9612 10.6123C11.9943 10.4023 11.9853 10.1877 11.9347 9.98113C11.8842 9.77457 11.793 9.58012 11.6666 9.4091ZM10.7975 10.9433L9.78248 11.6666C9.58631 11.8098 9.35413 11.8954 9.11199 11.914C8.86984 11.9325 8.62732 11.8832 8.41164 11.7716C6.97557 11.0225 5.73227 9.95129 4.779 8.6418C3.82572 7.33231 3.18832 5.82004 2.91664 4.22327C2.87745 3.98261 2.90577 3.73579 2.99846 3.51026C3.09114 3.28473 3.24455 3.08933 3.44164 2.94577L4.45664 2.21077C4.6131 2.09841 4.80765 2.05252 4.99783 2.08312C5.188 2.11373 5.35834 2.21833 5.47164 2.3741L6.15998 3.3191C6.27119 3.47659 6.31717 3.67098 6.28831 3.8616C6.27352 3.95579 6.24012 4.04608 6.19004 4.12721C6.13996 4.20834 6.07421 4.27867 5.99664 4.3341L5.05164 5.02243C4.97248 5.07857 4.91486 5.16007 4.88834 5.25342C4.86182 5.34678 4.86798 5.44639 4.90581 5.53577C5.52168 7.06896 6.5077 8.42575 7.77581 9.48493C7.85256 9.54453 7.94697 9.57689 8.04414 9.57689C8.14132 9.57689 8.23573 9.54453 8.31248 9.48493L9.25748 8.80243C9.41322 8.68947 9.60729 8.64263 9.79741 8.67214C9.98754 8.70164 10.1583 8.80508 10.2725 8.95993L10.9608 9.9166C11.072 10.0741 11.118 10.2685 11.0891 10.4591C11.0752 10.5552 11.0422 10.6475 10.9921 10.7306C10.942 10.8137 10.8759 10.886 10.7975 10.9433Z"
                                                        fill="#0D0D0D" />
                                                </svg>
                                            </span>
                                            <a href="tel:18888383022">(64) 8342 1245</a>
                                        </li>
                                        <li class="item">
                                            <span class="box-icon">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8125 2.625H2.1875C1.8394 2.625 1.50556 2.76328 1.25942 3.00942C1.01328 3.25556 0.875 3.5894 0.875 3.9375V10.0625C0.875 10.4106 1.01328 10.7444 1.25942 10.9906C1.50556 11.2367 1.8394 11.375 2.1875 11.375H11.8125C12.1606 11.375 12.4944 11.2367 12.7406 10.9906C12.9867 10.7444 13.125 10.4106 13.125 10.0625V3.9375C13.125 3.5894 12.9867 3.25556 12.7406 3.00942C12.4944 2.76328 12.1606 2.625 11.8125 2.625ZM11.5675 3.5L7.28 7.07438C7.20139 7.13985 7.10231 7.17571 7 7.17571C6.89769 7.17571 6.79861 7.13985 6.72 7.07438L2.4325 3.5H11.5675ZM11.8125 10.5H2.1875C2.07147 10.5 1.96019 10.4539 1.87814 10.3719C1.79609 10.2898 1.75 10.1785 1.75 10.0625V4.06875L6.16 7.74375C6.39584 7.94019 6.69307 8.04776 7 8.04776C7.30693 8.04776 7.60416 7.94019 7.84 7.74375L12.25 4.06875V10.0625C12.25 10.1785 12.2039 10.2898 12.1219 10.3719C12.0398 10.4539 11.9285 10.5 11.8125 10.5Z"
                                                        fill="#0D0D0D" />
                                                </svg>
                                            </span>
                                            <a href="mailto:support@example.com">support@example.com</a>
                                        </li>
                                    </ul>
                                    <a href="https://www.google.com/maps?q=15Yarranst,Punchbowl,NSW,Australia"
                                        class="tf-btn btn-line-dark fw-normal">
                                        <span class="text-sm text-transform-none">
                                            Get direction
                                        </span>
                                        <i class="icon-arrow-top-left fs-8"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-inner-wrap footer-col-block s2">
                            <div class="footer-heading footer-heading-mobile text-xl fw-medium">
                                Subscribe Newsletter
                            </div>
                            <div class="tf-collapse-content">
                                <div class="footer-newsletter">
                                    <p>
                                        We invite you to register to read the latest news, offers and events about
                                        our company. We promise not spam your inbox.
                                    </p>
                                    <form action="#" class="form-newsletter" method="post" accept-charset="utf-8"
                                        data-mailchimp="true">
                                        <div class="subscribe-content">
                                            <fieldset class="email">
                                                <input type="email" name="email-form" class="subscribe-email"
                                                    placeholder="Email address" tabindex="0" aria-required="true"
                                                    required>
                                            </fieldset>
                                            <div class="button-submit">
                                                <button class="subscribe-button animate-btn">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_5296_3345)">
                                                            <path
                                                                d="M17.7938 8.50229L17.7931 8.50162L14.1192 4.84537C13.8439 4.57147 13.3988 4.57249 13.1248 4.84776C12.8508 5.123 12.8519 5.56818 13.1271 5.84212L15.5938 8.29687H0.703125C0.314789 8.29687 0 8.61166 0 9C0 9.38833 0.314789 9.70312 0.703125 9.70312H15.5938L13.1272 12.1579C12.8519 12.4318 12.8509 12.877 13.1248 13.1522C13.3988 13.4275 13.844 13.4285 14.1192 13.1546L17.7932 9.49837L17.7938 9.4977C18.0692 9.22285 18.0683 8.77623 17.7938 8.50229Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_5296_3345">
                                                                <rect width="18" height="18" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="footer-inner-wrap s3">
                            <div class="footer-col-block inner-col">
                                <div class="footer-heading footer-heading-mobile text-xl fw-medium">About Us</div>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="store-location.html">Our Store</a>
                                        </li>
                                        <li>
                                            <a href="about-us.html">Our Story</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-col-block inner-col">
                                <div class="footer-heading footer-heading-mobile text-xl fw-medium">Resource</div>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        <li>
                                            <a href="privacy-policy.html">Privacy Policies</a>
                                        </li>
                                        <li>
                                            <a href="term-and-condition.html">Terms & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="return-and-refund.html">Returns & Refunds</a>
                                        </li>
                                        <li>
                                            <a href="faq.html">FAQ’s</a>
                                        </li>
                                        <li>
                                            <a href="shipping.html">Shipping</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-wrap">
                        <p class="text-dark">Copyright © 2025 by <span class="fw-medium">Vineta.</span> All Rights
                            Reserved.</p>
                        <ul class="tf-payment">
                            <li class="item"><img src="images/payment/EximBank.png" alt="payment"></li>
                            <li class="item"><img src="images/payment/ApplePay.png" alt="payment"></li>
                            <li class="item"><img src="images/payment/DinersClub.png" alt="payment"></li>
                            <li class="item"><img src="images/payment/Discover.png" alt="payment"></li>
                            <li class="item"><img src="images/payment/GooglePay.png" alt="payment"></li>
                            <li class="item"><img src="images/payment/Mastercard-2.png" alt="payment"></li>
                            <li class="item"><img src="images/payment/Mastercard.png" alt="payment"></li>
                            <li class="item"><img src="images/payment/Shop.png" alt="payment"></li>
                            <li class="item"><img src="images/payment/UnionPay.png" alt="payment"></li>
                            <li class="item"><img src="images/payment/Visa.png" alt="payment"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
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

    <!-- Pick Up -->

    <!-- /Pick Up -->

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
                            <a href="https://themeforest.net/item/vince-multipurpose-ecommerce-html5-template/57202368?s_rank=5"
                                target="_blank" class="mb-menu-link">Buy Theme</a>
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
            <a href="index.html">
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



    <!-- Javascript -->
    @include('Frontend_layouts.script')
</body>


</html>