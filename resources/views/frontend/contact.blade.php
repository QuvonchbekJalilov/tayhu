<x-layouts.frontend>
    <x-slot:title>
        Kontakt Sahifa
    </x-slot:title>
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/new-images/tayhu-company-images/bg-4\ 1.png');">
        <div class="shape-image float-bob-y">
            <!-- <img src="assets/img/vector.png" alt="img"> -->
        </div>
        <div class="container">
            <div class="breadcrumb-wrapper-items">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">{{__('main.contact')}}</h1>
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
                            {{__('main.contact')}}
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

    <!-- Contact Info Section Start -->
    <section class="contact-info-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>{{ __('main.contact_us') }}<i class="fa-solid fa-arrow-right-long"></i></h6>
                <h2 class="splt-txt wow" data-splitting>{{ __('main.our_contact_information') }}</h2>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="contact-box-items">
                        <div class="icon">
                            <img src="assets/img/icon/18.svg" alt="img">
                        </div>
                        <div class="content">
                            <h3>{{ __('main.our_address') }}</h3>
                            <p>{{ __('main.address_details') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="contact-box-items">
                        <div class="icon">
                            <img src="assets/img/icon/19.svg" alt="img">
                        </div>
                        <div class="content">
                            <h3>{{ __('main.email_address') }}</h3>
                            <p>{!! __('main.email_details') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="contact-box-items">
                        <div class="icon">
                            <img src="assets/img/icon/20.svg" alt="img">
                        </div>
                        <div class="content">
                            <h3>{{ __('main.hours_of_operation') }}</h3>
                            <p>{{ __('main.hours_details') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Contact Section Start -->
<section class="contact-section-22">
    <div class="container">
        <div class="contact-form-items">
            <div class="title text-center">
                <h2 class="splt-txt wow" data-splitting>{{ __('main.get_in_touch') }}</h2>
            </div>
            <form action="contact.php" id="contact-form" method="POST" onsubmit="sendMessage(); return false;">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="form-clt">
                            <input type="text" name="name" id="name" placeholder="{{ __('main.first_name') }}">
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="form-clt">
                            <input type="text" name="number" id="phone_number" placeholder="{{ __('main.phone_number') }}">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                        <div class="form-clt">
                            <textarea name="message" id="message" placeholder="{{ __('main.whats_on_your_mind') }}"></textarea>
                            <div class="icon">
                                <i class="fa-sharp fa-light fa-pencil"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".4s">
                        <button type="submit" class="theme-btn w-100">
                            {{ __('main.send_message_now') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
      const phoneInput = document.getElementById('phone_number');
      const pattern = /^\+998[- ]?(90|91|93|94|95|98|99|33|97|71)[- ]?(\d{3})[- ]?(\d{2})[- ]?(\d{2})$/;

      // Set initial value to +998
      phoneInput.value = '+998 ';

      phoneInput.addEventListener('input', (e) => {
        let value = e.target.value;

        // Ensure the value always starts with +998
        if (!value.startsWith('+998 ')) {
          value = '+998 ' + value.replace(/^\+998\s*/, '');
        }

        // Remove invalid characters
        value = value.replace(/[^\d+ ]/g, '');

        // Format value according to the pattern
        const match = value.match(/^\+998\s?(90|91|93|94|95|98|99|33|97|71)?\s?(\d{0,3})?\s?(\d{0,2})?\s?(\d{0,2})?/);
        if (match) {
          let formattedValue = '+998 ';
          if (match[1]) formattedValue += match[1] + ' ';
          if (match[2]) formattedValue += match[2] + (match[2].length === 3 ? ' ' : '');
          if (match[3]) formattedValue += match[3] + (match[3].length === 2 ? ' ' : '');
          if (match[4]) formattedValue += match[4];
          value = formattedValue;
        }

        e.target.value = value.trim();
      });

      phoneInput.addEventListener('keydown', (e) => {
        const value = e.target.value;
        // Allow user to clear the input completely
        if (e.key === 'Backspace' && value.length <= 5) {
          phoneInput.value = ''; // Clear the input field
        }
      });

      // Adjusted selector to use the form class instead of an ID
      document.querySelector('.custom-form').addEventListener('submit', (e) => {
        if (!pattern.test(phoneInput.value)) {
          e.preventDefault();
          alert('Please enter a valid phone number: +998 (XX) XXX-XX-XX');
        }
      });
    });
  </script>

<!-- Include jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Include Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

<!-- Include Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    // Initialize Toastr options
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "5000",
    };

    // The rest of your existing JavaScript code
    document.addEventListener('DOMContentLoaded', () => {
        // Phone input logic...
    });

    function sendMessage() {
        const name = document.getElementById('name').value;
        const phoneNumber = document.getElementById('phone_number').value;
        const message = document.getElementById('message').value;

        if (!name || !phoneNumber || !message) {
            toastr.error('Iltimos, barcha maydonlarni to\'ldiring.'); // Uzbek
            return;
        }

        const telegramBotToken = '7769686842:AAGKlp_iAZDsvUIGruK16dRjubvpsE6vTHE';
        const telegramChatId = '1347969244';
        const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;

        const data = {
            chat_id: telegramChatId,
            text: `Yangi Habar:\n\nIsm: ${name}\nTelefon: ${phoneNumber}\nHabar: ${message}`
        };

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            if (data.ok) {
                toastr.success('Habar Jo\'natildi!'); // Uzbek
                document.getElementById('contact-form').reset();
            } else {
                toastr.error('Xatolik yuz berdi, qayta urunib ko\'ring.'); // Uzbek
            }
        })
        .catch(error => {
            toastr.error('Xatolik yuz berdi, iltimos qayta urunib ko\'ring.'); // Uzbek
        });
    }
</script>




    
    <!-- Contact Info Section Start -->
    <div class="office-google-map-wrapper pb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2932.871999569018!2d69.28059018876664!3d41.389075980124055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDIzJzIwLjciTiA2OcKwMTYnNTcuOCJF!5e0!3m2!1sen!2s!4v1603904838884!5m2!1sen!2s"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
    </div>
</x-layouts.frontend>