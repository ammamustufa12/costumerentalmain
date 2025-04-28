<header id="header" class="header-default header-absolute header-white">
    <div class="container">
        <div class="row wrapper-header align-items-center">
            <div class="col-md-4 col-3 d-xl-none">
                <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" aria-controls="mobileMenu">
                    <i class="icon icon-categories1"></i>
                </a>
            </div>
            <div class="col-xxl-5 col-xl-6 d-none d-xl-block">
                <nav class="box-navigation text-center">
                    <ul class="box-nav-menu justify-content-start">
                        <li class="menu-item">
                            <a href="{{ route('home') }}" class="item-link">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('aboutus') }}" class="item-link">About</a>
                        </li>
                        <li class="menu-item position-relative">
                            <a href="#" class="item-link">Rentals<i class="icon icon-arr-down"></i></a>
                            <div class="sub-menu sub-menu-style-3">
                                <ul class="menu-list">

                                    <li><a href="blog-list-01.html" class="menu-link-text link"> Costume Rental</a>
                                    </li>
                                    <li><a href="blog-list-02.html" class="menu-link-text link">Instrument Rental</a>
                                    </li>

                                </ul>
                           
                            </div>

                        </li>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('frontend.danceclasses') }}" class="item-link">Dance Classes</a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="item-link">Gallery</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('contactus') }}" class="item-link">Contact</a>
                        </li>
                    
                     
                      
                    </ul>
                </nav>
            </div>
            <div class="col-xl-2 col-md-4 col-6 text-xxl-center">
                {{-- <a href="home-skincare.html" class="logo-header">
                    <img src="{{ asset('frontend_assets/images/logo/logo-white.svg')}}" alt="logo" class="logo">
                </a> --}}
                <a href="{{ route('home') }}" class="logo-header" style="font-size: 24px; font-weight: bold; color: white; text-transform: uppercase;">
                    Smiles Creations
                </a>
            </div>
            <div class="col-xxl-5 col-xl-4 col-md-4 col-3">
                <ul class="nav-icon d-flex justify-content-end align-items-center">
                    <li class="nav-search">
                        <a href="#search" data-bs-toggle="modal" class="nav-icon-item">
                            <i class="icon icon-search"></i>
                        </a>
                    </li>
                    <li class="nav-account">
                        <a href="{{ route('login') }}" class="nav-icon-item">
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