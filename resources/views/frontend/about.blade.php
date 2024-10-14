<x-layouts.frontend>
    <x-slot:title>
        Biz haqimizda
    </x-slot:title>
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover"
    style="background-image: url('assets/img/new-images/tayhu-company-images/bg-4\ 1.png');">
    <div class="shape-image float-bob-y">
        <!-- <img src="assets/img/vector.png" alt="img"> -->
    </div>
    <div class="container">
        <div class="breadcrumb-wrapper-items">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">{{__('main.about')}}</h1>
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
                        {{__('main.about')}}
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

<!-- About Section Start -->
<section class="about-section fix section-padding">
    <!-- <div class="about-shape-1 float-bob-x">
    <img src="assets/img/about/about-shape-1.png" alt="img">
</div> -->
    <!-- <div class="about-shape-2 float-bob-y">
    <img src="assets/img/team/shape-1.png" alt="img">
</div> -->
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="assets/img/new-images/tayhu-company-images/bg-19 1.png" alt="img"
                            class="wow fadeInLeft" data-wow-delay=".2s"
                            style="height: 600px; object-fit: cover;">
                        <div class="about-image-2 wow fadeInUp" data-wow-delay=".4s">
                            <img src="assets/img/new-images/tayhu-company-images/bg-16 1.png" alt="img"
                                style="height: 300px;object-fit: cover;">
                            <div class="video-box">
                                <a href="https://www.youtube.com/watch?v=M-cmAwB-L2s"
                                    class="video-btn video-popup">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="about-line-shape">
                            <img src="assets/img/about/about-shape-3.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h6 class="wow fadeInUp">
                                <i class="fa-solid fa-arrow-left-long"></i>Tayhu<i class="fa-solid fa-arrow-right-long"></i>
                            </h6>
                            <h2 class="splt-txt wow" data-splitting>{{ __('main.create_space_title') }}</h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".4s">
                            {{ __('main.create_space_description') }}
                        </p>
                        <ul class="list-items wow fadeInUp" data-wow-delay=".2s">
                            <li><i class="fa-solid fa-circle-check"></i>{{ __('main.list_item_1') }}</li>
                            <li><i class="fa-solid fa-circle-check"></i>{{ __('main.list_item_2') }}</li>
                            <li><i class="fa-solid fa-circle-check"></i>{{ __('main.list_item_3') }}</li>
                        </ul>
                        <div class="about-author">
                            <div class="author-image wow fadeInUp" data-wow-delay=".2s">
                                <img src="assets/img/about/author.png" alt="{{ __('main.author_name') }}">
                                <div class="content">
                                    <p>{{ __('main.author_name') }}, CEO</p>
                                    <h4>{{ __('main.author_name') }}</h4>
                                </div>
                            </div>
                            <img src="assets/img/about/signature.png" alt="Signature" class="wow fadeInUp" data-wow-delay=".4s">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Achievements Section Start -->
<section class="achivements-section fix">
    <div class="container">
        <div class="achivements-wrapper-2 section-padding">
            <div class="bg-shape">
                <img src="assets/img/new-images/figure-brown-1.png" alt="img">
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="achivements-content">
                        <div class="section-title">
                            <h6 class="wow fadeInUp">
                                <i class="fa-solid fa-arrow-left-long"></i>{{ __('main.achievements') }}<i class="fa-solid fa-arrow-right-long"></i>
                            </h6>
                            <h2 class="splt-txt wow" data-splitting>{!! __('main.achievements_title') !!}</h2>
                        </div>
                        <a href="{{ route('contact')}}" class="theme-btn bg-white mt-3 mt-md-0 wow fadeInUp"
                            data-wow-delay=".4s">
                            {{ __('main.make_appointment') }}
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="achivements-right-items">
                        <div class="border-shape">
                            <img src="assets/img/border.png" alt="img">
                        </div>
                        <div class="achivements-item">
                            <div class="counter-items wow fadeInUp" data-wow-delay=".2s">
                                <div class="icon">
                                    <img src="assets/img/icon/21.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h2><span class="count">45</span>k+</h2>
                                    <p>{{ __('main.projects_completed') }}</p>
                                </div>
                            </div>
                            <div class="counter-items wow fadeInUp" data-wow-delay=".4s">
                                <div class="icon">
                                    <img src="assets/img/icon/22.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h2><span class="count">25</span>k+</h2>
                                    <p>{{ __('main.active_clients') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="achivements-item">
                            <div class="counter-items style-2 wow fadeInUp" data-wow-delay=".2s">
                                <div class="icon">
                                    <img src="assets/img/icon/23.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h2><span class="count">2.5</span>+</h2>
                                    <p>{{ __('main.experienced_team') }}</p>
                                </div>
                            </div>
                            <div class="counter-items style-2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="icon">
                                    <img src="assets/img/icon/24.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h2><span class="count">2.4</span>k+</h2>
                                    <p>{{ __('main.winning_awards') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="man-image float-bob-x ">
        <img src="assets/img/man.png" alt="img">
    </div>
</section>

<section class="project-section section-padding fix">
    <div class="container"><div class="section-title text-center">
        <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>{{__('main.our_certificate')}}<i
                class="fa-solid fa-arrow-right-long"></i></h6>
        <h2 class="splt-txt wow" data-splitting>{{__('main.our_certificate_title')}}</h2>
    </div>
        <div class="row g-4">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="project-card-items">
                    <div class="project-image">
                        <img src="assets/img/new-images/tayhu-company-images/for-blog/certificate-1.png" alt="img">
                        <img src="assets/img/new-images/tayhu-company-images/for-blog/certificate-1.png" alt="img">
                    </div>
                    <div class="project-content">
                        <h3><a href="project-details.html">Certificate of Appreciation</a></h3>
                    </div>
                    <div class="shape-img">
                        <img src="assets/img/new-images/figure-brown-3.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="project-card-items">
                    <div class="project-image">
                        <img src="assets/img/new-images/tayhu-company-images/for-blog/certificate-2.png" alt="img">
                        <img src="assets/img/new-images/tayhu-company-images/for-blog/certificate-2.png" alt="img">
                    </div>
                    <div class="project-content">
                        <h3><a href="project-details.html">Certificate of Completion</a></h3>
                     
                    </div>
                    <div class="shape-img">
                        <img src="assets/img/new-images/figure-brown-3.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="project-card-items">
                    <div class="project-image">
                        <img src="assets/img/new-images/tayhu-company-images/for-blog/certificate-3.png" alt="img">
                        <img src="assets/img/new-images/tayhu-company-images/for-blog/certificate-3.png" alt="img">
                    </div>
                    <div class="project-content">
                        <h3><a href="project-details.html">Certificate of Appreciation</a></h3>
                       
                    </div>
                    <div class="shape-img">
                        <img src="assets/img/new-images/figure-brown-3.png" alt="img">
                    </div>
                </div>
            </div>
       
        </div>
    </div>
</section>


<!-- Team Section Start -->
<section class="team-section section-padding pt-0">

    <div class="container">
        <div class="section-title text-center">
            <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>{{__('main.our_team_members')}}<i
                    class="fa-solid fa-arrow-right-long"></i></h6>
            <h2 class="splt-txt wow" data-splitting>{{__('main.our_team_title')}}</h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp">
                <div class="team-box-items">
                    <div class="social-icon d-grid align-items-center">
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="team-image">
                        <img src="assets/img/new-images/user-img.jpg" alt="img">
                    </div>
                    <div class="team-content">
                        <h5><a href="{{ route('team-detail')}}">Shikhon Islam</a></h5>
                        <p>Sr. engineer</p>
                        <a href="{{ route('team-detail')}}" class="icon"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="team-box-items active">
                    <div class="social-icon d-grid align-items-center">
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="team-image">
                        <img src="assets/img/new-images/user-img.jpg" alt="img">
                    </div>
                    <div class="team-content">
                        <h5><a href="{{ route('team-detail')}}">Jenny Wilson</a></h5>
                        <p>Sr. engineer</p>
                        <a href="{{ route('team-detail')}}" class="icon"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="team-box-items">
                    <div class="social-icon d-grid align-items-center">
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="team-image">
                        <img src="assets/img/new-images/user-img.jpg" alt="img">
                    </div>
                    <div class="team-content">
                        <h5><a href="{{ route('team-detail')}}">Kawser Ahmed</a></h5>
                        <p>Sr. engineer</p>
                        <a href="{{ route('team-detail')}}" class="icon"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="team-box-items">
                    <div class="social-icon d-grid align-items-center">
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="team-image">
                        <img src="assets/img/new-images/user-img.jpg" alt="img">
                    </div>
                    <div class="team-content">
                        <h5><a href="{{ route('team-detail')}}">Ronald Richards</a></h5>
                        <p>Sr. engineer</p>
                        <a href="{{ route('team-detail')}}" class="icon"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-layouts.frontend>