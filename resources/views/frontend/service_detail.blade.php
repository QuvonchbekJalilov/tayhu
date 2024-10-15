<?php

$lang = app()->getLocale();

?>

<x-layouts.frontend>
    <x-slot:title>
        Mahsulotlar
    </x-slot:title>
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('/assets/img/service/product-cover.JPG');" >
        <div class="shape-image float-bob-y">
            <!-- <img src="assets/img/vector.png" alt="img"> -->
        </div>
        <div class="container">
            <div class="breadcrumb-wrapper-items">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Product</h1>
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
                            @if($lang === 'uz')Mahsulot
                            @elseif($lang === 'ru')Продукт
                            @elseif($lang === 'en')Product
                            @endif
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

    <!-- Service Details Section Start -->
    <section class="service-details-section section-padding">
        <div class="container">
           <div class="service-details-wrapper">
               <div class="row g-4">
                   <div class="col-12 col-lg-8">
                       <div class="service-details-image reveal image-anime">
                           <img src="{{ asset('storage/' . $product->image) }}" alt="img">
{{--                           <img src="/assets/img/new-images/decor-1.webp" alt="img">--}}
                       </div>
                       <div class="service-details-content">
                           <h2>{{ $product['title_' . $lang] }}</h2>
{{--                           <h2>Blooming Beige Wall Panel</h2>--}}
                           <p>
                               {!! $product['description_' . $lang] !!}
{{--                                <h3 class="mb-2">Xususiyatlari:</h3>--}}
{{--                                <ul class="ps-3 pb-3" style="list-style-type: disc;">--}}
{{--                                    <li><b>Gul naqshlari: </b> Mahsulot bej rangli gul naqshlari bilan bezatilgan bo'lib, har qanday ichki makonga estetik nafislik bag'ishlaydi.</li>--}}
{{--                                    <li><b>Yuqori chidamlilik: </b> Panellar yuqori sifatli materialdan tayyorlangan va uzoq muddat xizmat qilish uchun mo'ljallangan.</li>--}}
{{--                                    <li><b>Oson o'rnatish: </b> O'rnatish jarayoni juda oson va qulay, vaqtni tejaydi.</li>--}}
{{--                                    <li><b>Zamonaviy ko'rinish: </b> Har qanday uy yoki ofis uchun zamonaviy dizayn yaratish imkonini beradi.</li>--}}
{{--                                </ul>--}}
                            </p>
                           <div class="row g-4">
                               <div class="col-lg-7">
                                   <div class="service-details-image reveal image-anime">
                                       <img src="{{ asset('storage/' . $product->image1) }}" alt="img">
{{--                                       <img src="/assets/img/new-images/decor-2.webp" alt="img">--}}
                                   </div>
                               </div>
                               <div class="col-lg-5">
                                   {!! $product['content_' . $lang] !!}
{{--                                   <div class="content">--}}
{{--                                       <h3>Xizmatlar Foydasi:</h3>--}}
{{--                                       <p class="mt-2 mb-2">Nega Blooming Beige Wall Panel tanlashingiz kerak?</p>--}}

{{--                                   </div>--}}
{{--                                   <ul class="details-list">--}}
{{--                                       <li><i class="fa-solid fa-circle-check"></i>Zamonaviy dizayn: Har bir devorni nafis va zamonaviy ko'rinishda bezaydi.</li>--}}
{{--                                       <li><i class="fa-solid fa-circle-check"></i>Yuqori sifatli material: Devor panellari yuqori sifat va chidamlilik bilan ajralib turadi.</li>--}}
{{--                                       <li><i class="fa-solid fa-circle-check"></i>Oson parvarish: Panellarni parvarish qilish juda oddiy, bu esa ularning uzoq muddat nafisligini saqlab qolishga yordam beradi.</li>--}}
{{--                                       <li><i class="fa-solid fa-circle-check"></i>Ekologik toza: Materiallar ekologik xavfsiz, inson salomatligi uchun zararsizdir.</li>--}}
{{--                                   </ul>--}}
                               </div>
                           </div>
                           <h4>
                               @if($lang === 'uz') Oddiy 3 bosqich
                               @elseif($lang === 'ru') Простой 3 этапа
                               @elseif($lang === 'en') Simple 3 steps
                               @endif
                           </h4>
                           <p class="mt-3">
                               @if($lang === 'uz') 3 oddiy bosqichda devoringizni o‘zgartiring:
                               @elseif($lang === 'ru') Измените вашу стену в 3 простых шага:
                               @elseif($lang === 'en') Transform your wall in 3 simple steps:
                               @endif
                           </p>

                           <div class="row g-4 mt-2">
                               <div class="col-xl-4 col-lg-6 col-md-6">
                                   <div class="service-details-box">
                                       <div class="icon">
                                           <img src="/assets/img/icon/15.svg" alt="img">
                                           <h5>
                                               @if($lang === 'uz') Rejalashtirish
                                               @elseif($lang === 'ru') Планирование
                                               @elseif($lang === 'en') Planning
                                               @endif
                                           </h5>
                                       </div>
                                       <p>
                                           @if($lang === 'uz') Mahsulotlarimiz katalogidan devoringizga mos panellarni tanlang
                                           @elseif($lang === 'ru') Выберите панели, подходящие к вашей стене, из нашего каталога продукции
                                           @elseif($lang === 'en') Choose wall panels that suit your wall from our product catalog
                                           @endif
                                       </p>
                                   </div>
                               </div>

                               <div class="col-xl-4 col-lg-6 col-md-6">
                                   <div class="service-details-box">
                                       <div class="icon">
                                           <img src="/assets/img/icon/17.svg" alt="img">
                                           <h5>
                                               @if($lang === 'uz') O‘rnatish
                                               @elseif($lang === 'ru') Установка
                                               @elseif($lang === 'en') Installation
                                               @endif
                                           </h5>
                                       </div>
                                       <p>
                                           @if($lang === 'uz') Oson o'rnatish usuli bilan devor panellaringizni joylashtirib, yangi ko'rinishdan zavqlaning
                                           @elseif($lang === 'ru') Установите ваши стеновые панели с помощью простого метода монтажа и наслаждайтесь новым видом
                                           @elseif($lang === 'en') Install your wall panels with an easy installation method and enjoy the new look
                                           @endif
                                       </p>
                                   </div>
                               </div>

                               <div class="col-xl-4 col-lg-6 col-md-6">
                                   <div class="service-details-box">
                                       <div class="icon">
                                           <img src="/assets/img/icon/16.svg" alt="img">
                                           <h5>
                                               @if($lang === 'uz') Dizayn
                                               @elseif($lang === 'ru') Дизайн
                                               @elseif($lang === 'en') Design
                                               @endif
                                           </h5>
                                       </div>
                                       <p>
                                           @if($lang === 'uz') Tanlangan panellarning rang va naqshini interyeringizga moslang
                                           @elseif($lang === 'ru') Настройте цвет и узор выбранных панелей в соответствии с вашим интерьером
                                           @elseif($lang === 'en') Customize the color and pattern of the selected panels to match your interior
                                           @endif
                                       </p>
                                   </div>
                               </div>
                           </div>

                       </div>
                   </div>
                   <div class="col-12 col-lg-4">
                    <div class="main-sidebar">

                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>
                                    @if($lang === 'uz')Kategoriyalar
                                    @elseif($lang === 'ru')Категории
                                    @elseif($lang === 'en')Categories
                                    @endif
                                </h3>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
{{--                                    <li>--}}
{{--                                        <a href="service-details.html">MDF Panels </a> --}}
{{--                                        <span>--}}
{{--                                            <i class="fa-solid fa-arrow-right-long"></i>--}}
{{--                                        </span>--}}
{{--                                    </li>--}}
                                    @foreach($categories as $category)
                                        @foreach($category->products as $product)
                                            <li>
                                                <a href="{{ route('product-details', $product->id)}}">
                                                    {{ $category['name_' . $lang] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endforeach
{{--                                    <li class="active"><a href="service-details.html">Wall Panels</a><span><i--}}
{{--                                                class="fa-solid fa-arrow-right-long"></i></span></li>--}}
{{--                                    <li><a href="service-details.html">Window Frame</a> <span><i--}}
{{--                                                class="fa-solid fa-arrow-right-long"></i></span></li>--}}

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
           </div>
        </div>
    </section>
</x-layouts.frontend>
