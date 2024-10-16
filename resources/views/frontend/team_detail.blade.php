<?php

$lang = app()->getLocale();
use Illuminate\Support\Str;
?>

<x-layouts.frontend>
    <x-slot:title>
        Team
    </x-slot:title>
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('/assets/img/new-images/tayhu-company-images/bg-4\ 1.png');">
        <div class="shape-image float-bob-y">
            <img src="/assets/img/vector.png" alt="img">
        </div>
        <div class="container">
            <div class="breadcrumb-wrapper-items">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">team details</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ route('home')}}">
                                {{__('main.home')}}
                            </a>
                        </li>
                        <li>
                            <i class="fa-sharp fa-solid fa-slash-forward"></i>
                        </li>
                        <li>
                            team details
                        </li>
                    </ul>
                </div>
                <div class="breadcrumb-image">
{{--                    <img src="assets/img/breadcrumb-image.png" alt="img" class="float-bob-x">--}}
                    <div class="bar-shape">
                        <img src="/assets/img/breadcrumb-bar.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Details Section Start -->
    <section class="team-details-section fix section-padding">
        <div class="container">
            <div class="team-details-wrapper">
                <div class="team-details-items">
                    <div class="row">
                        <div class="details-image col-md-6 col-lg-6 col-12">
                            @if ($team->image)
                                <img src="{{ asset('storage/' . $team->image) }}" alt="img" class="w-100">
                            @else
                                <img src="/assets/img/new-images/user-img.jpg" alt="img" class="w-100">
                            @endif
                        </div>
                        <div class="team-details-content col-md-6 col-lg-6 col-12">
                            <div class="details-header">
                                <h3>
                                    {{ $team->name }}
                                </h3>
                                <span>{{ $team['position_' . $lang] }}</span>
                            </div>
                            <p class="cont">
                                {!! Str::words($team['description_' . $lang], 30, '...') !!}
                                {{--                                Prior to joining company, she spent 20+ years at Inmosys, where he held a wide range of global leadership roles, from services to products, and across operations and sales. Most recently, he was SVP & Global Head of the Manufacturing business..--}}
                            </p>
                            <h6 class="team-details-info"><span class="text-title">Phone Number:</span> <span class="text-data"><a href="tel:+915690036420">{{ $team->phone_number }}</a></span></h6>
                            <h6 class="team-details-info"><span class="text-title">Email:</span> <span class="text-data"><a href="mailto:example@gmail.com">{{ $team->emal ?? 'example@gmail.com' }}</a></span></h6>
                            <h6 class="team-details-info"><span class="text-title">Experience:</span> <span class="text-data">{{ $team->experience }}</span></h6>
                            <h6 class="team-details-info"><span class="text-title">Availability:</span> <span class="text-data">{{ $team->availability }}</span></h6>
                            <div class="social-icon d-flex align-items-center">
                                <a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $team->telegram }}"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="personal-skills-items">
                    <div class="row g-5">
                        <div class="col-lg-5">
                            <h3 class="mb-3 splt-txt wow" data-splitting>About Me</h3>
                            <p>
                                {!! $team['description_' . $lang] !!}
{{--                                There are many variations of passages of x ohyt Lorem Ipsum available, but the majority havehbith suffered x alteration in some form, by injected humour, or randomised wo zyx words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,--}}
                            </p>
{{--                            <p class="mt-4">--}}
{{--                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,--}}
{{--                            </p>--}}
                        </div>
                        <div class="col-lg-7">
                            <h3 class="mb-3 splt-txt wow" data-splitting>Personal skills</h3>
                            <p>
                                {!! $team['skill_text_' . $lang] !!}
{{--                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage--}}
                            </p>
                            <div class="skill-feature-items">
                                <div class="skill-feature">
                                    <h3 class="box-title">Architecture</h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: {{ $team->architecture }}%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                            <div class="progress-value"><span class="counter-number2">{{ $team->architecture }}</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-feature">
                                    <h3 class="box-title">Construction</h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: {{ $team->construction }}%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                            <div class="progress-value"><span class="counter-number2">{{ $team->construction }}</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-feature">
                                    <h3 class="box-title">Interior Design</h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: {{ $team->interior_design }}%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                            <div class="progress-value"><span class="counter-number2">{{ $team->interior_design }}</span>%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-gallery-items">
                    <h3 class="mb-md-3 splt-txt wow" data-splitting>My Work Gallery</h3>
                    <div class="row">
                        @foreach($team->portfolios as $port)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="gallery-thumb">
                                    <img src="{{ asset('storage/' . $port->image) }}" alt="img">
                                </div>
                            </div>
                        @endforeach
{{--                        <div class="col-xl-4 col-lg-6 col-md-6">--}}
{{--                            <div class="gallery-thumb">--}}
{{--                                <img src="/assets/img/team/gallery-1.jpg" alt="img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-4 col-lg-6 col-md-6">--}}
{{--                            <div class="gallery-thumb">--}}
{{--                                <img src="/assets/img/team/gallery-2.jpg" alt="img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-4 col-lg-6 col-md-6">--}}
{{--                            <div class="gallery-thumb">--}}
{{--                                <img src="/assets/img/team/gallery-3.jpg" alt="img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-section fix section-padding pt-0">
        <div class="container">
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-image center">
                            <img src="/assets/img/brand/brand-logo.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image center">
                            <img src="/assets/img/brand/brand-logo-2.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image center">
                            <img src="/assets/img/brand/brand-logo-3.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image center">
                            <img src="/assets/img/brand/brand-logo-4.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image center">
                            <img src="/assets/img/brand/brand-logo-5.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.frontend>
