<!-- Footer Section Start -->
<footer class="footer-section style-radius bg-cover bg-cover"
    style="background-image: url('assets/img/footer/bg.jpg');">
    <div class="container">
        <div class="contact-info-area">
            <a href="index.html" class="wow fadeInUp" data-wow-delay=".2s">
                <img src="assets/img/tayhu-logo-white-2.png" alt="img" style="width:200px; height:70px;">
            </a>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".4s">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                </div>
                <div class="content">
                    <p>{{__('main.office_location')}}</p>
                    <h3>
                        Karvan Yuli Street, Tashkent
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".6s">
                <div class="icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="content">
                    <p>{{__('main.send_mail')}}</p>
                    <h3>
                        <a href="mailto:
                            spektrstar@tayhu.uz">
                            spektrstar@tayhu.uz</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="content">
                    <p>{{__('main.call_emergancy')}}</p>
                    <h3>
                        <a href="tel:+998 71 223 65 08">+998 71 223 65 08</a>
                    </h3>
                </div>
            </div>
        </div>
        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <!-- <div class="widget-head">
                                <h5>About Company</h5>
                            </div> -->
                        <div class="footer-content">
                            <p>
                                {{__('main.footer_content')}}</p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>{{__('main.quick_link')}}</h5>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ route('about') }}">
                                    <i class="fa-solid fa-angles-right"></i>
                                    {{ __('main.about') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    <i class="fa-solid fa-angles-right"></i>
                                    {{ __('main.contact') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}">
                                    <i class="fa-solid fa-angles-right"></i>
                                    FAQ’S
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5 style="opacity: 0;">{{__('main.our_services')}}</h5>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ route('showroom') }}">
                                    <i class="fa-solid fa-angles-right"></i>
                                    {{ __('main.showroom') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('gallery') }}">
                                    <i class="fa-solid fa-angles-right"></i>
                                    {{ __('main.gallery') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">
                                    <i class="fa-solid fa-angles-right"></i>
                                    {{ __('main.products') }}
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>Instagram</h5>
                        </div>
                        <div class="footer-gallery">
                            <div class="gallery-wrap">
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <a href="assets/img/footer/gallery-1.jpg" class="img-popup">
                                            <img src="assets/img/footer/gallery-1.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="assets/img/footer/gallery-2.jpg" class="img-popup">
                                            <img src="assets/img/footer/gallery-2.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="assets/img/footer/gallery-3.jpg" class="img-popup">
                                            <img src="assets/img/footer/gallery-3.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <a href="assets/img/footer/gallery-4.jpg" class="img-popup">
                                            <img src="assets/img/footer/gallery-4.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="assets/img/footer/gallery-5.jpg" class="img-popup">
                                            <img src="assets/img/footer/gallery-5.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="assets/img/footer/gallery-6.jpg" class="img-popup">
                                            <img src="assets/img/footer/gallery-6.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>{!! __('main.footer_privacy') !!}</p>
        </div>
    </div>
</footer>
