<?php
$contact = \App\Models\Contact::first();
?>

<!-- Preloader Start -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
        </div>
        <div class="txt-loading">
            <span data-text-preloader="T" class="letters-loading">
                T
            </span>
            <span data-text-preloader="A" class="letters-loading">
                A
            </span>
            <span data-text-preloader="Y" class="letters-loading">
                Y
            </span>
            <span data-text-preloader="H" class="letters-loading">
                H
            </span>
            <span data-text-preloader="U" class="letters-loading">
                U
            </span>
        </div>
        <p class="text-center">Loading</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>

<!--<< Mouse Cursor Start >>-->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<!-- Back To Top Start -->
<button id="back-top" class="back-to-top">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- Offcanvas Area Start -->
<div class="fix-area">
<div class="offcanvas__info">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__content">
            <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                <div class="offcanvas__logo">
                    <a href="/">
                        <img src="/assets/img/tayhu-logo-white-2.png" alt="logo-img">
                    </a>
                </div>
                <div class="offcanvas__close">
                    <button>
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <p class="text d-none d-xl-block">
                {{__('main.header_content2')}}
            </p>
            <div class="mobile-menu fix mb-3"></div>
            <div class="offcanvas__contact">
                <h4>{{__('main.contact_info')}}</h4>
                <ul>
                    <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                            <a target="_blank" href="javascript:void(0);">{{ $contact->address }}</a>
                        </div>
                    </li>
                    <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                            <a href="mailto:spektrstar@tayhu.uz"><span class="mailto:{{ $contact->email ?? 'spektrstar@tayhu.uz'}}">{{ $contact->email ?? 'spektrstar@tayhu.uz'}}</span></a>
                        </div>
                    </li>
                    <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                            <a target="_blank" href="javascript:void(0);"><p>{{ __('main.hours_details') }}</p></a>
                        </div>
                    </li>
                    <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                            <a href="tel:{{ $contact->phone_number ?? '+998945135324'}}">{{ $contact->phone_number ?? '+998945135324'}}</a>
                        </div>
                    </li>
                </ul>
                <div class="header-button mt-4">
                    <a href="{{ route('contact')}}" class="theme-btn text-center">
                        <span>{{__('main.contact')}}<i class="fa-solid fa-arrow-right-long"></i></span>
                    </a>
                </div>
                <div class="social-icon d-flex align-items-center">
                    <a href="{{  $contact->facebook ?? 'facebook' }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{  $contact->instagram ?? 'instagram' }}"><i class="fab fa-instagram"></i></a>
                    <a href="{{  $contact->youtube ?? 'youtube' }}"><i class="fab fa-youtube"></i></a>
                    <a href="{{  $contact->telegram ?? 'telegram' }}"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Section Start -->
<header class="header-section-2">
    <div class="container-fluid">
        <div class="header-top-wrapper-2">
            <ul class="contact-list">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:{{ $contact->email ?? 'spektrstar@tayhu.uz'}}">{{ $contact->email ?? 'spektrstar@tayhu.uz'}}</a>
                </li>
                <li>
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                    {{ $contact->address ?? "Karvan Yuli Street, Tashkent"}}
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:{{ $contact->phone_number ?? '+998 71 223 65 08'}}">{{ $contact->email ?? '+998 71 223 65 08'}}</a>
                </li>
            </ul>
            <div class="top-right">

                <div class="social-icon d-flex align-items-center">
                    <a href="{{ $contact->address ?? "facebook"}}"><i class="fab fa-facebook-f"></i></a>
                    <a href="j{{ $contact->address ?? "instagram"}}"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $contact->address ?? "youtube"}}javascript:void(0);"><i class="fab fa-youtube"></i></a>
                    <a href="{{ $contact->address ?? "telegram"}}"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header-2">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="/" class="header-logo">
                                <img src="/assets/img/tayhu-logo-white-2.png" alt="logo-img" style="width:200px; height:70px;">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                            <ul>
                                <li class="has-dropdown active menu-thumb">
                                    <a href="{{ route('home')}}"> {{__('main.home')}} </a>
                                </li>

                                <li>
                                    <a href="{{ route('about')}}">{{ __('main.about')}}</a>
                                </li>
                                <!-- <li class="has-dropdown">
                                    <a href="news.html">
                                        Pages
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="has-dropdown">
                                            <a href="team-details.html">
                                                Our Team
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="faq.html">Faq's</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li> -->
                                <li>
                                    <a href="{{ route('products')}}">
                                        {{__('main.products')}}
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                    <?php
                                    $lang = app()->getLocale();
                                    $categories = \App\Models\Category::all();
                                    ?>
                                    <ul class="submenu">
                                        @foreach($categories as $category)
                                            @foreach($category->products as $product)
                                                <li>
                                                    <a href="{{ route('product-details', $product->id)}}">
                                                        {{ $category['name_' . $lang] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endforeach
                                        {{--                                                <li><a href="{{ route('service-details')}}">Ceiling Panels</a></li>--}}
                                        {{--                                                <li><a href="{{ route('service-details')}}">Wall Panels</a></li>--}}
                                        {{--                                                <li><a href="{{ route('service-details')}}">Window Frame</a></li>--}}

                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('gallery')}}">
                                        {{__('main.gallery')}}
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('showroom')}}">
                                        {{__('main.showroom')}}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact')}}">{{__('main.contact')}}</a>
                                </li>
                            </ul>
                        </nav>
                            </div>
                        </div>

                        <div class="search-item">
                            <a href="javascript:void(0);" class="search-trigger search-icon"><i class="fas fa-search"></i></a>
                            <div class="header__hamburger d-xl-block my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Search Area Start -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
</div>
