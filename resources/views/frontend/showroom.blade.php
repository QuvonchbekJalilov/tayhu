<x-layouts.frontend>
    <x-slot:title>
        Show Room
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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">{{__('main.showroom')}}</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ route('home')}}">
                                {{ __('main.home')}}
                            </a>
                        </li>
                        <li>
                            <i class="fa-sharp fa-solid fa-slash-forward"></i>
                        </li>
                        <li>
                            {{__('main.showroom')}}
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



    <!-- <div id="page" class="section-padding"> -->
    <section class="project-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>{{ __('main.make_your_selection') }}<i
                        class="fa-solid fa-arrow-right-long"></i></h6>
                <h2 class="splt-txt wow" data-splitting>{!! __('main.effortlessly_configure') !!}</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-9">
                    <div class="showrooom-container shadow-lg bg-body-tertiary rounded"
                        style="background-image: url('./assets/img/showroom-images/Decor Plast 1.png');">
                        <img src="./assets/img/showroom-images/Orqa fon-2.png" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-lg-3 showroom-cards-responsive">
                    <div class="col-lg-12">
                        <button class="fon-1 fon-button fon-button-active">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-1.png" class="w-100 h-100">
                        </button>
                    </div>
                    <div class="col-lg-12">
                        <button class="fon-2 fon-button">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-2.png" alt=""
                                class="w-100 h-100">
                        </button>
                    </div>
                    <div class="col-lg-12">
                        <button class="fon-3 fon-button">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-3.png" alt=""
                                class="w-100 h-100">
                        </button>
                    </div>
                    <div class="col-lg-12">
                        <button class="fon-4 fon-button">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-4.png" alt=""
                                class="w-100 h-100">
                        </button>
                    </div>
                </div>
            </div>
            <div class="section-title text-center mt-5">
                <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>{{ __('main.make_your_selection') }}<i
                        class="fa-solid fa-arrow-right-long"></i></h6>
                <h2 class="splt-txt wow" data-splitting>{{ __('main.create_your_dream_ceiling') }}</h2>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-3 showroom-cards-responsive">
                    <div class="col-lg-12">
                        <button class="fon-button-2 fon-button-active"
                            onclick="changeImage('./assets/img/showroom-images/showroom-new/ceiling-2.png', this)">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-1.png" class="w-100 h-100">
                        </button>
                    </div>
                    <div class="col-lg-12">
                        <button class="fon-button-2"
                            onclick="changeImage('./assets/img/showroom-images/showroom-new/ceiling-3.png', this)">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-2.png" alt=""
                                class="w-100 h-100">
                        </button>
                    </div>
                    <div class="col-lg-12">
                        <button class="fon-button-2"
                            onclick="changeImage('./assets/img/showroom-images/showroom-new/ceiling-4.png', this)">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-3.png" alt=""
                                class="w-100 h-100">
                        </button>
                    </div>
                    <div class="col-lg-12">
                        <button class="fon-button-2"
                            onclick="changeImage('./assets/img/showroom-images/showroom-new/ceiling-5.png', this)">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-4.png" alt=""
                                class="w-100 h-100">
                        </button>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="showrooom-container shadow-lg bg-body-tertiary rounded">
                        <img id="showroom-image" src="./assets/img/showroom-images/showroom-new/ceiling-2.png"
                            alt="" class="w-100">
                    </div>
                </div>
            </div>

            <script>
                function changeImage(imageSrc, button) {
                    // Rasm manzilini o'zgartirish
                    const imgElement = document.getElementById('showroom-image');
                    imgElement.src = imageSrc;

                    // Barcha tugmalardan active klassni olib tashlash
                    const buttons = document.querySelectorAll('.fon-button-2');
                    buttons.forEach(btn => {
                        btn.classList.remove('fon-button-active');
                    });

                    // Faol tugmaga active klassni qo'shish
                    button.classList.add('fon-button-active');
                }
            </script>


        </div>
    </section>
    <!-- </div> -->
</x-layouts.frontend>
