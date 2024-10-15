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
                        {{__('main.header_content')}}
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
                                    <a target="_blank" href="javascript:void(0);">Karvan Yuli Street, Tashkent</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:spektrstar@tayhu.uz"><span
                                            class="mailto:info@example.com">spektrstar@tayhu.uz</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="javascript:void(0);">Mod-Sat, 9am - 6pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+998 71 223 65 08">+998 71 223 65 08</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="/contact" class="theme-btn text-center">
                                <span>Get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-youtube"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-telegram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-3">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="/" class="header-logo">
                                <img src="/assets/img/tayhu-logo-white-2.png" alt="logo-img"
                                    style="width:200px; height:70px;">
                            </a>
                            <a href="/" class="header-logo-2">
                                <img src="assets/img/Tayhu logo (2).svg" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="{{ route('home')}}">
                                                {{__('main.home')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about')}}">{{__('main.about')}}</a>
                                        </li>

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
                                        <li>
                                            <form action="{{ route('switch.language') }}" method="POST" class="language-form d-flex">
                                                @csrf
                                                <div class="dropdown">
                                                    <button type="button" class="dropdown-btn">
                                                        {{ strtoupper(app()->getLocale()) }} <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <div class="dropdown-content" style="display: none;">
                                                        <div data-value="uz">UZ</div>
                                                        <div data-value="ru">RU</div>
                                                        <div data-value="en">EN</div>
                                                    </div>
                                                    <input type="hidden" name="lang" id="selected-language" value="{{ app()->getLocale() }}">
                                                </div>
                                            </form>
                                        </li>

                                        <!-- Language Dropdown Script -->
                                        <script>
                                            const dropdownBtn = document.querySelector('.dropdown-btn');
                                            const dropdownContent = document.querySelector('.dropdown-content');
                                            const dropdownItems = document.querySelectorAll('.dropdown-content div');
                                            const selectedLanguage = document.getElementById('selected-language');
                                            const languageForm = document.querySelector('.language-form');

                                            // Toggle dropdown visibility
                                            dropdownBtn.addEventListener('click', () => {
                                                dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
                                            });

                                            // Change language on selection and submit form
                                            dropdownItems.forEach(item => {
                                                item.addEventListener('click', () => {
                                                    const lang = item.getAttribute('data-value');
                                                    selectedLanguage.value = lang;
                                                    dropdownBtn.childNodes[0].textContent = item.textContent.toUpperCase();
                                                    languageForm.submit(); // Submit the form
                                                });
                                            });

                                            // Close dropdown when clicking outside
                                            window.addEventListener('click', (event) => {
                                                if (!event.target.closest('.dropdown')) {
                                                    dropdownContent.style.display = 'none';
                                                }
                                            });
                                        </script>


                                        <!-- Language Dropdown Styles -->
                                        <style>
                                            .dropdown {
                                                position: relative;
                                                display: inline-block;
                                            }

                                            .dropdown-btn {
                                                background-color: #CD9967;
                                                color: white;
                                                padding: 5px 20px;
                                                border: none;
                                                border-radius: 8px;
                                                cursor: pointer;
                                                display: flex;
                                                align-items: center;
                                                justify-content: space-between;
                                            }

                                            .dropdown-btn i {
                                                margin-left: 10px;
                                            }

                                            .dropdown-content {
                                                display: none;
                                                position: absolute;
                                                background-color: #f1f1f1;
                                                min-width: 100%;
                                                border-radius: 5px;
                                                box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
                                                z-index: 1;
                                            }

                                            .dropdown-content div {
                                                color: black;
                                                padding: 5px 16px;
                                                text-decoration: none;
                                                display: block;
                                                cursor: pointer;
                                            }

                                            .dropdown-content div:hover {
                                                background-color: #ddd;
                                            }

                                            .dropdown-content div.active {
                                                background-color: #CD9967;
                                                color: #fff;
                                            }
                                        </style>


                                    </ul>
                                </nav>
                            </div>
                        </div>
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
