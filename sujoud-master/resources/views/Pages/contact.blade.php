@extends('Layout.master')

@section('title', 'Contact')

@section('content')




        <!--Page Header Start-->
        <section class="page-header clearfix"
            style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner text-center clearfix">
                    <ul class="thm-breadcrumb">
                        <li><a href="index-main.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

    @if($errors->any())
    <div class="alert alert-danger text-center" role="alert">
        {{ $errors->first() }}
    </div>
    @endif
        <!--Start Contact Page-->
        <section class="contact-page">

             <form method="post" action="contact-us">
                     {{csrf_field()}}

            <div class="container">
                <div class="row">

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success') }}
                    </div>
                    @endif
                    <!--Start Contact Page Left-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__left">
                            <div class="sec-title">
                                <div class="icon">
                                    <img src="assets/images/resources/sec-title-icon1.png" alt="">
                                </div>
                                <span class="sec-title__tagline">Contact now</span>
                                <h2 class="sec-title__title">Get in Touch <br>with Us</h2>
                            </div>
                            <p class="contact-page__left-text">We are committed to providing our customers with
                                exceptional service while offering our employees the best training.</p>
                            <div class="contact-page__social-link">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Page Right-->

                    <!--Start Contact Page Right-->


                    {{-- <form method="post" action="contact-us">
                     {{csrf_field()}} --}}

                    <div class="col-xl-8 col-lg-8">
                        <div class="contact-page__right">
                            {{-- <form action="https://layerdrops.com/agriox/assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                novalidate="novalidate"> --}}
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="comment-form__input-box">
                                            {{-- <input type="text" placeholder="Your name" name="name"> --}}

                                 <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
                                 @error('name')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror


                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="comment-form__input-box">
                                            {{-- <input type="email" placeholder="Email address" name="email"> --}}

                                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="comment-form__input-box">
                                            {{-- <input type="text" placeholder="Phone number" name="phone"> --}}
                                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" name="phone_number">
                                          @error('phone_number')
                                          <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="comment-form__input-box">
                                            {{-- <input type="email" placeholder="Subject" name="Subject"> --}}

                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                                        @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="comment-form__input-box">
                                            {{-- <textarea name="message" placeholder="Write message"></textarea> --}}


                                            <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                                               @error('message')
                                               <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                               </span>
                                               @enderror

                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                                        {{-- <button type="submit" class="btn btn-primary btn-round">Send</button> --}}
                                    </div>
                                </div>

                        </div>
                    </div>

                    <!--End Contact Page Right-->
                </div>
            </div>
             </form>
        </section>
        <!--End Contact Page-->


        <!--Start Contact Page Contact Info-->
        <section class="contact-page__contact-info clearfix">
            <div class="auto-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__contact-info-wrapper">
                            <div class="contact-page__contact-info-title">
                                <h2>Get in Touch</h2>
                            </div>

                            <div class="contact-page__contact-info-list">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-map"></span>
                                        </div>
                                        <div class="title">
                                            <span>Visit Our Store</span>
                                            <p>666 road, 30th street irbid</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-email-1"></span>
                                        </div>
                                        <div class="title">
                                            <span>Send Email</span>
                                            <p><a href="mailto:needhelp@company.com">falahCompany@gmail.com</a></p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon phone">
                                            <span class="icon-phone-call-2"></span>
                                        </div>
                                        <div class="title">
                                            <span>Call Anytime</span>
                                            <p><a href="tel:123456789">0779672445</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Contact Page Contact Info-->


        <!--Contact Page Google Map Start-->
        <section class="contact-page-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.6374265876093!2d35.86270231477383!3d32.535829303551964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c76f344fa4c67%3A0x8f66171f036354d6!2sIrbid%20City%20Center!5e0!3m2!1sen!2sjo!4v1663598689805!5m2!1sen!2sjo"
            class="contact-page-google-map__one" allowfullscreen></iframe>
            {{-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="contact-page-google-map__one" allowfullscreen></iframe> --}}
        </section>
        <!--Contact Page Google Map End-->

@endsection
