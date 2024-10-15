<x-layouts.frontend>
    <x-slot:title>
        Gallery
    </x-slot:title>
    <div class="breadcrumb-wrapper bg-cover"
        style="background-image: url('assets/img/new-images/tayhu-company-images/bg-4\ 1.png');">
        <div class="shape-image float-bob-y">
            <!-- <img src="assets/img/vector.png" alt="img"> -->
        </div>
        <div class="container">
            <div class="breadcrumb-wrapper-items">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">{{__('main.gallery')}}</h1>
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
                            {{__('main.gallery')}}
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
    <!-- Project Section Start -->
    <section class="project-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>{{ __('main.explore_latest_creations') }}<i class="fa-solid fa-arrow-right-long"></i></h6>
                <h2 class="splt-txt wow" data-splitting>{{ __('main.our_gallery') }}</h2>
            </div>
        </div>
        <div class="project-wrapper style-2">
            <div class="main-box">
                @foreach($portfolios as $portfolio)
                    <div class="box wow fadeInUp" data-wow-delay=".{{ $loop->index + 1 }}s" style="background-image: url('{{ asset('storage/' . $portfolio->image) }}'); width: 25% !important; height: 310px;">
                    </div>
                @endforeach
{{--                <div class="box bg-1 wow fadeInUp wow" data-wow-delay=".2s">--}}

{{--                </div>--}}
{{--                <div class="box bg-2 wow fadeInUp wow" data-wow-delay=".4s">--}}

{{--                </div>--}}
{{--                <div class="box bg-3 wow fadeInUp wow" data-wow-delay=".6s">--}}

{{--                </div>--}}
{{--                <div class="box bg-4 active wow fadeInUp wow" data-wow-delay=".8s">--}}

{{--                </div>--}}
{{--                <div class="box bg-5 wow fadeInUp wow" data-wow-delay=".2s">--}}

{{--                </div>--}}
{{--                <div class="box bg-6 wow fadeInUp wow" data-wow-delay=".4s">--}}

{{--                </div>--}}
{{--                <div class="box bg-7 wow fadeInUp wow" data-wow-delay=".6s">--}}

{{--                </div>--}}
{{--                <div class="box bg-8 wow fadeInUp wow" data-wow-delay=".8s">--}}

{{--                </div>--}}
            </div>
        </div>
    </section>
    <style>
        .project-wrapper.style-2 .main-box .box {
            width: 25% !important;
            height: 310px;
        }
        /*.project-wrapper.style-2 .main-box .box.bg-1 {*/
        /*    background-image: url(./assets/img/new-images/photo_2024-10-07_18-28-03.jpg);*/
        /*    width: 25% !important;*/
        /*}*/
        /*.project-wrapper.style-2 .main-box .box.bg-2 {*/
        /*    background-image: url(./assets/img/new-images/photo_2024-10-07_18-27-35.jpg);*/
        /*    width: 25% !important;*/

        /*}*/
        /*.project-wrapper.style-2 .main-box .box.bg-3 {*/
        /*    background-image: url(./assets/img/new-images/photo_2024-10-07_18-26-48.jpg);*/
        /*    width: 25% !important;*/

        /*}*/
        /*.project-wrapper.style-2 .main-box .box.bg-4 {*/
        /*    background-image: url(./assets/img/new-images/photo_2024-10-07_18-27-04\ \(2\).jpg);*/
        /*    width: 25% !important;*/

        /*}*/
        /*.project-wrapper.style-2 .main-box .box.bg-5 {*/
        /*    background-image: url(./assets/img/new-images/photo_2024-10-07_18-27-04.jpg);*/
        /*    width: 25% !important;*/

        /*}*/
        /*.project-wrapper.style-2 .main-box .box.bg-6 {*/
        /*    background-image: url(./assets/img/new-images/photo_2024-10-07_18-26-49.jpg);*/
        /*    width: 25% !important;*/

        /*}*/
        /*.project-wrapper.style-2 .main-box .box.bg-7 {*/
        /*    background-image: url(./assets/img/new-images/photo_2024-10-07_18-26-49\ \(2\).jpg);*/
        /*    width: 25% !important;*/

        /*}*/
        /*.project-wrapper.style-2 .main-box .box.bg-8 {*/
        /*    background-image: url(./assets/img/new-images/photo_2024-10-07_18-27-26.jpg );*/
        /*    width: 25% !important;*/
        /*}*/
    </style>
</x-layouts.frontend>
