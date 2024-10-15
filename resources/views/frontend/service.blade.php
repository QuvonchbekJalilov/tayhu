<?php

$lang = app()->getLocale();

?>

<x-layouts.frontend>
    <x-slot:title>
        {{ __('main.products') }}
    </x-slot:title>
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/service/product-cover.JPG')">
        <div class="shape-image float-bob-y">
            <!-- <img src="assets/img/vector.png" alt="img"> -->
        </div>
        <div class="container">
            <div class="breadcrumb-wrapper-items">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">{{__('main.products')}}</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ route('home')}}">
                                {{__('main.home') }}
                            </a>
                        </li>
                        <li>
                            <i class="fa-sharp fa-solid fa-slash-forward"></i>
                        </li>
                        <li>
                            {{ __('main.products') }}
                        </li>
                    </ul>
                </div>
                <div class="breadcrumb-image">
                    <!-- <img src="assets/img/breadcrumb-image.png" alt="img" class="float-bob-x"> -->
                    <div class="bar-shape">
                        <!-- <img src="assets/img/breadcrumb-bar.png" alt="img"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Section Start -->
    <section class="service-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="wow fadeInUp">
                    <i class="fa-solid fa-arrow-left-long"></i>{{ __('main.our_products') }}<i class="fa-solid fa-arrow-right-long"></i>
                </h6>
                <h2 class="splt-txt wow" data-splitting>{{ __('main.products_description') }}</h2>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="service-box-items items-bg">
                                    <div class="service-thumb">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="img">
                                        <!-- <div class="icon">
                                            <img src="assets/img/icon/01.svg" alt="img">
                                        </div> -->
                                    </div>
                                    <div class="service-content">
                                        <h2 class="number">0{{ $loop->iteration }}</h2>
                                        <h3><a href="{{ route('product-details', $product->id) }}">{{ $product['title_' . $lang] }}</a></h3>
                                        <p>
                                            {!! $product['description_' . $lang] !!}
                                        </p>
                                        <a href="{{ route('product-details', $product->id) }}" class="link-btn">
                                            @if($lang === 'uz')Mahsulotni ko'rsatish
                                            @elseif($lang === 'ru')Show Product
                                            @elseif($lang === 'en')Показать продукт
                                            @endif
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
{{--                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">--}}
{{--                            <div class="service-box-items items-bg">--}}
{{--                                <div class="service-thumb">--}}
{{--                                    <img src="/assets/img/new-images/decor-1.webp" alt="img">--}}
{{--                                    <!-- <div class="icon">--}}
{{--                                        <img src="assets/img/icon/01.svg" alt="img">--}}
{{--                                    </div> -->--}}
{{--                                </div>--}}
{{--                                <div class="service-content">--}}
{{--                                    <h2 class="number">01</h2>--}}
{{--                                    <h3><a href="/service-details.html">Fiberglass Frames</a></h3>--}}
{{--                                    <p>--}}
{{--                                        Durable and Energy-Efficient for Modern Homes--}}
{{--                                    </p>--}}
{{--                                    <a href="/service-details.html" class="link-btn">See Product <i--}}
{{--                                            class="fa-solid fa-arrow-right"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">--}}
{{--                            <div class="service-box-items items-bg">--}}
{{--                                <div class="service-thumb">--}}
{{--                                    <img src="/assets/img/new-images/photo_2024-10-09_09-56-14 (4).jpg" alt="img">--}}
{{--                                    <!-- <div class="icon">--}}
{{--                                        <img src="assets/img/icon/02.svg" alt="img">--}}
{{--                                    </div> -->--}}
{{--                                </div>--}}
{{--                                <div class="service-content">--}}
{{--                                    <h2 class="number">02</h2>--}}
{{--                                    <h3><a href="/service-details.html">Vinyl Frames</a></h3>--}}
{{--                                    <p>--}}
{{--                                        Affordable, Low Maintenance, and Versatile--}}
{{--                                    </p>--}}
{{--                                    <a href="/service-details.html" class="link-btn">See Product <i--}}
{{--                                            class="fa-solid fa-arrow-right"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">--}}
{{--                            <div class="service-box-items items-bg">--}}
{{--                                <div class="service-thumb">--}}
{{--                                    <img src="/assets/img/new-images/photo_2024-10-09_09-56-14 (3).jpg" alt="img">--}}
{{--                                    <!-- <div class="icon">--}}
{{--                                        <img src="assets/img/icon/07.svg" alt="img">--}}
{{--                                    </div> -->--}}
{{--                                </div>--}}
{{--                                <div class="service-content">--}}
{{--                                    <h2 class="number">04</h2>--}}
{{--                                    <h3><a href="/service-details.html">Wood Frames</a></h3>--}}
{{--                                    <p>--}}
{{--                                        Classic Elegance with Natural Insulation--}}
{{--                                    </p>--}}
{{--                                    <a href="/service-details.html" class="link-btn">See Product <i--}}
{{--                                            class="fa-solid fa-arrow-right"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">--}}
{{--                            <div class="service-box-items items-bg">--}}
{{--                                <div class="service-thumb">--}}
{{--                                    <img src="/assets/img/new-images/photo_2024-10-09_09-56-14 (2).jpg" alt="img">--}}
{{--                                    <!-- <div class="icon">--}}
{{--                                        <img src="assets/img/icon/08.svg" alt="img">--}}
{{--                                    </div> -->--}}
{{--                                </div>--}}
{{--                                <div class="service-content">--}}
{{--                                    <h2 class="number">05</h2>--}}
{{--                                    <h3><a href="service-details.html">Metal Frames</a></h3>--}}
{{--                                    <p>--}}
{{--                                        Strength and Longevity for Industrial Style--}}
{{--                                    </p>--}}
{{--                                    <a href="service-details.html" class="link-btn">See Product <i--}}
{{--                                            class="fa-solid fa-arrow-right"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="main-sidebar">
                        <div class="single-sidebar-widget">
                            <div class="search-widget">
                                <form action="{{ route('search') }}" method="GET">
                                    <input type="text" name="search" placeholder="{{ __('main.search') }}">
                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>{{__('main.categories')}}</h3>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
                                    @foreach($categories as $category)
                                        @foreach($category->products as $product)
                                            <li>
                                                <a href="{{ route('product-details', $product->id)}}">
                                                    {{ $category['name_' . $lang] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>{{__('main.download')}}</h3>
                            </div>
                            <div class="brochures-download-items">
                                <div class="brochures-items">
                                    <div class="icon">
                                        <i class="far fa-file-pdf"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Our Catalogue</h5>
                                        <p>Download</p>
                                    </div>
                                    <!-- Update the download link to point to your PDF file -->

                                </div>
                                <a href="/path/to/your/catalogue.pdf" class="download-btn" download>
                                    <i class="fa-solid fa-download"></i>
                                </a>
                            </div>
                            <div class="brochures-download-items">
                                <div class="brochures-items">
                                    <div class="icon">
                                        <i class="far fa-file-pdf"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Our Catalogue</h5>
                                        <p>Download</p>
                                    </div>
                                    <!-- Update the download link to point to your PDF file -->

                                </div>
                                <a href="/path/to/your/catalogue.pdf" class="download-btn" download>
                                    <i class="fa-solid fa-download"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="page-nav-wrap pt-5 text-center wow fadeInUp" data-wow-delay=".3s">
                <ul>
                    {{-- Previous Page Link --}}
                    @if ($products->onFirstPage())
                        <li><a class="page-numbers icon disabled" href="#"><i class="fa-solid fa-arrow-left"></i></a></li>
                    @else
                        <li><a class="page-numbers icon" href="{{ $products->previousPageUrl() }}"><i class="fa-solid fa-arrow-left"></i></a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($products->links()->elements as $element)
                        {{-- Make three dots for separators --}}
                        @if (is_string($element))
                            <li><a class="page-numbers disabled">{{ $element }}</a></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $products->currentPage())
                                    <li><a class="page-numbers active" href="javascript:void(0);">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a></li>
                                @else
                                    <li><a class="page-numbers" href="{{ $url }}">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($products->hasMorePages())
                        <li><a class="page-numbers icon" href="{{ $products->nextPageUrl() }}"><i class="fa-solid fa-arrow-right"></i></a></li>
                    @else
                        <li><a class="page-numbers icon disabled" href="javascript:void(0);"><i class="fa-solid fa-arrow-right"></i></a></li>
                    @endif
                </ul>
            </div>

        </div>
    </section>
</x-layouts.frontend>
