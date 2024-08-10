@extends('layout.helper')
@section('content')
    @php
        $settings = json_decode(Illuminate\Support\Facades\File::get(storage_path('app/settings.json')), true);
 @endphp
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/assets/front/img/bg/video-img.png)">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>{{__('main.contact')}}</h2>
                                <div class="breadcrumb-wrap">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('main.home')}}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{__('main.contact')}}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- about-area -->
        <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix">

            <div class="container">

                <div class="row">


                    <div class="col-lg-12 order-2">
                        <div class="contact-bg">
                        <div class="section-title center-align text-center mb-50">
                            <h2>
                                {{__('main.contact1')}}
                            </h2>

                        </div>

                            <form id="phone-form" class="contact-form mt-30 text-center">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="contact-field p-relative c-name mb-30">
                                            <input type="text" id="firstn" name="firstn" placeholder="{{__('main.contact2')}}" >
                                            <i class="icon fal fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="contact-field p-relative c-subject mb-30">
                                            <input type="text" id="email" name="email" placeholder="{{__('main.email')}}">
                                            <i class="icon fal fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="contact-field p-relative c-subject mb-30">
                                            <input type="text" id="phoneNumber" name="phone" placeholder="{{__('main.contact3')}}" >
                                            <i class="icon fal fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-message mb-30">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="{{__('main.contact4')}}"></textarea>
                                            <i class="icon fal fa-edit"></i>
                                        </div>
                                        <div class="slider-btn text-center">
                                            <button type="button" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s" onclick="sendMessage()">{{__('main.contact5')}} <i class="fal fa-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </section>
        <!-- about-area-end -->
        <!-- map-area-end -->
        <div class="map fix" style="background: #f5f5f5;">
            <div class="container-flud">

                <div class="row">
                    <div class="col-lg-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47963.39837018879!2d69.1584603486328!3d41.293363400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b7bb3e26fc1%3A0x93f3f483b0ab19c6!2sDORA!5e0!3m2!1sru!2s!4v1722922549722!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
         <!-- map-area-end --->
        <!-- services-area -->
        <section id="services" class="services-area contact-info pt-120 pb-120 fix">
            <div class="container">
               <div class="row">
                     <div class="col-lg-12">
                        <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                            <h5>{{__('main.contact5')}}</h5>
                            <h2>
                                {{__('main.contact6')}}
                            </h2>

                        </div>

                    </div>
                </div>
                <div class="row">
                     <div class="col-lg-4 col-md-4">

                      <div class="services-box text-center">
                          <div class="services-icon">
                               <img src="/assets/front/img/bg/contact-icon01.png" alt="image">
                            </div>
                           <div class="services-content2">
                                <h5><a href="tel:{{ $settings['phone_number'] }}">{{ $settings['phone_number'] }}</a></h5>
                                <p>{{__('main.contact7')}}</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4 col-md-4">

                      <div class="services-box text-center active">
                          <div class="services-icon">
                              <img src="/assets/front/img/bg/contact-icon02.png" alt="image">
                            </div>
                           <div class="services-content2">
                                <h5><a href="mailto:{{ $settings['email_address'] }}">{{ $settings['email_address'] }}</a></h5>
                                 <p>{{__('main.email')}}</p>

                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4 col-md-4">

                      <div class="services-box text-center">
                          <div class="services-icon">
                             <img src="/assets/front/img/bg/contact-icon03.png" alt="image">
                            </div>
                           <div class="services-content2">
                                <h5>{{ $settings['address'] }}</h5>
                                <p>{{__('main.contact8')}}</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
    </main>
    <script>
        function sendMessage() {
            const firstName = document.getElementById('firstn').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Ensure all fields are filled
            if (!firstName || !phoneNumber || !email || !message) {
                alert("Iltimos, barcha ma'lumotlarni to'ldiring.");
                return false;
            }

            // Regular expression to validate phone number format
            const pattern = /^\+998([- ])?(90|91|93|94|95|98|99|33|97|71)([- ])?(\d{3})([- ])?(\d{2})([- ])?(\d{2})$/;

            // Check if the phone number is valid
            if (!pattern.test(phoneNumber)) {
                alert('Iltimos, to\'g\'ri telefon raqamini kiriting: +998 (XX) XXX-XX-XX');
                return false;
            }

            // Telegram Bot API details
            const telegramBotToken = '7384293449:AAGt3FHL9Z3by-xiBt42z_N0Z6s1z4-Hl8o';
            const telegramChatId = '6234545290';
            const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;

            // Prepare the message data
            const data = {
                chat_id: telegramChatId,
                text: `Yangi Habar:\n\nIsmi: ${firstName}\nTelefon: ${phoneNumber}\nEmail: ${email}\nXabar: ${message}`
            };

            // Send the message via Telegram API
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
                        alert("Habar Jo'natildi!");
                        document.getElementById('phone-form').reset();
                    } else {
                        alert('Xatolik yuz berdi qayta urunib koring.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Xatolik yuz berdi qayta urunib koring.');
                });

            // Prevent default form submission
            return false;
        }
    </script>


@endsection
