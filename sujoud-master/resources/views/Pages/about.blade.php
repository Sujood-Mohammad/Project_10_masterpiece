
@extends('Layout.master')
@section('title', 'About')


@section('content')


        <!--Page Header Start-->
        <section class="page-header clearfix"
            style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner text-center clearfix">
                    <ul class="thm-breadcrumb">
                        <li><a href="index-main.html">Home</a></li>
                        <li>About</li>
                    </ul>
                    <h2>About Us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Three Start-->
        <section class="about-three">
            <div class="about-three__shape"></div><!-- /.about-three__shape -->
            <div class="container">
                <div class="row">
                    <!--Start About Three Content Box-->
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-three__content-box">
                            <div class="sec-title">
                                <div class="icon">
                                    <img src="assets/images/resources/sec-title-icon1.png" alt="">
                                </div>
                                <span class="sec-title__tagline">get to know about us</span>
                                <h2 class="sec-title__title">We Sell High-Quality <br>Organic Products</h2>
                            </div>
                            <div class="about-three__content-box-inner">
                                <h2>We’re Leader in Agriculture Company</h2>
                                <p>There are many variations of passages of available but the majority have suffered
                                    alteration in some form.</p>

                                <div class="about-three__products-list">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-investment"></span>
                                            </div>
                                            <h3><a href="#">Natural Products</a></h3>
                                            <p>Duis aute irure dolor simply free in voluptate velit.</p>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-harvest"></span>
                                            </div>
                                            <h3><a href="#">Healthy Food</a></h3>
                                            <p>Duis aute irure dolor simply free in voluptate velit.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="about-three__content-box-btn">
                                <a href="#" class="thm-btn">Discover more</a>
                            </div>
                            <div class="about-three__arrow float-bob-y"></div><!-- /.about-three__arrow -->
                        </div>
                    </div>
                    <!--End About Three Content Box-->

                    <!--Start About Three Img Box-->
                    <div class="col-xl-6 col-lg-5">
                        <div class="about-three__img-box">
                            <img src="assets/images/resources/about-3-icon-1-1.png" class="about-three__img-icon"
                                alt="">
                            <div class="about-three__img-box-img">
                                <div class="about-three__img-box-img-inner">
                                    <img src="assets/images/about/about-v3-img1.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About Three Img Box-->
                </div>
            </div>
        </section>
        <!--About Three End-->

        <!--Video One Start-->
        <section class="video-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/video-one-bg.jpg);">
            <div class="video-one-border"></div>
            <div class="video-one-border video-one-border-two"></div>
            <div class="video-one-border video-one-border-three"></div>
            <div class="video-one-border video-one-border-four"></div>
            <div class="video-one-border video-one-border-five"></div>
            <div class="video-one-border video-one-border-six"></div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__wrpper">
                            <div class="video-one__left">
                                <div class="video-one__leaf"></div><!-- /.video-one__leaf -->
                                <h2 class="video-one__title">Agriculture Matters to <br>the Future of Development</h2>
                                <div class="video-one__btn">
                                    <a href="#" class="thm-btn">Discover more</a>
                                </div>
                            </div>
                            <div class="video-one__right">
                                <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a class="video-popup" title=" Video"
                                        href="https://www.youtube.com/watch?v=S_4qimUqpgo">
                                        <span class="icon-play-button-1"></span>
                                    </a>
                                    <span class="border-animation border-1"></span>
                                    <span class="border-animation border-2"></span>
                                    <span class="border-animation border-3"></span>
                                </div>
                                <div class="title">
                                    <h2>Watch the video</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Video One End-->



        <!--Testimonials One Start-->
        <section class="testimonials-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/Testimonials-v1-bg.jpg);">
            <div class="container">
                <div class="row">
                    <!--Start Testimonials One Left-->
                    <div class="col-xl-4">
                        <div class="testimonials-one__left">
                            <div class="testimonials-one__left-bg"></div>
                            <div class="sec-title">
                                <div class="icon">
                                    <img src="assets/images/resources/sec-title-icon1.png" alt="">
                                </div>
                                <span class="sec-title__tagline">Our testimonials</span>
                                <h2 class="sec-title__title">What They’re <br>Talking About <br> Falah</h2>
                            </div>
                        </div>
                    </div>
                    <!--End Testimonials One Left-->

                    <!--Start Testimonials One Right-->
                    <div class="col-xl-8">
                        <div class="testimonials-one__right">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="testimonials-one__carousel owl-carousel owl-theme">


                                        @foreach ($comm as $comment)
                                        @if ($comment->status == '1')
                                        <!--Start Single Testimonials One-->
                                        <div class="testimonials-one__single">
                                            <p class="testimonials-one__single-text">
                                                {{ $comment->text }}
                                            </p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="{{url('img/'. $comment->user->image ) }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="icon">
                                                        <span class="icon-right-quotation-mark"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>
                                                        {{ $comment->user->name }}
                                                    </h4>
                                                    <p>
                                                        {{$comment->created_at}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Testimonials One Right-->
                </div>
            </div>
        </section>
        <!--Testimonials One End-->


        <!--Meet Farmers One Start-->
        <section class="meet-farmers-one meet-farmers-one--about">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="assets/images/resources/sec-title-icon1.png" alt="">
                    </div>
                    <span class="sec-title__tagline">professional people</span>
                    <h2 class="sec-title__title">Meet the Farmers</h2>
                </div>
                <div class="row">
                    <!--Start Single Meet Farmers One-->
                    <div class="col-xl-3 col-lg-6  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="meet-farmers-one__single">
                            <div class="meet-farmers-one__single-img">
                                <img src="assets/images/resources/meet-farmers-v1-img1.jpg" alt="" />

                            </div>
                            <div class="meet-farmers-one__single-title text-center">
                                <p>Farmer</p>
                                <h2><a href="farmers.html">Kevin Martin</a></h2>
                                <div class="social-link">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Meet Farmers One-->

                    <!--Start Single Meet Farmers One-->
                    <div class="col-xl-3 col-lg-6  wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="meet-farmers-one__single">
                            <div class="meet-farmers-one__single-img">
                                <img src="assets/images/resources/meet-farmers-v1-img2.jpg" alt="" />
                            </div>
                            <div class="meet-farmers-one__single-title text-center">
                                <p>Farmer</p>
                                <h2><a href="farmers.html">Christine Eve</a></h2>
                                <div class="social-link">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Meet Farmers One-->

                    <!--Start Single Meet Farmers One-->
                    <div class="col-xl-3 col-lg-6  wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="meet-farmers-one__single">
                            <div class="meet-farmers-one__single-img">
                                <img src="assets/images/resources/meet-farmers-v1-img3.jpg" alt="" />
                            </div>
                            <div class="meet-farmers-one__single-title text-center">
                                <p>Farmer</p>
                                <h2><a href="farmers.html">Mike Hardson</a></h2>
                                <div class="social-link">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Meet Farmers One-->

                    <!--Start Single Meet Farmers One-->
                    <div class="col-xl-3 col-lg-6  wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="meet-farmers-one__single">
                            <div class="meet-farmers-one__single-img">
                                <img src="assets/images/resources/meet-farmers-v1-img4.jpg" alt="" />
                            </div>
                            <div class="meet-farmers-one__single-title text-center">
                                <p>Farmer</p>
                                <h2><a href="farmers.html">Jessica Brown</a></h2>
                                <div class="social-link">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Meet Farmers One-->
                </div>
            </div>
        </section>
        <!--Meet Farmers One End-->


        <!--Cta One Start-->
        <section class="cta-one" style="background-image: url(assets/images/backgrounds/cta-v1-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__wrapper">
                            <div class="cta-one__left">
                                <div class="cta-one__left-icon">
                                    <span class="icon-farm"></span>
                                </div>
                                <div class="cta-one__left-title">
                                    <h2>We’re Leader in Agriculture Company</h2>
                                </div>
                            </div>
                            <div class="cta-one__right">
                                <div class="cta-one__right-btn">
                                    <a href="#" class="thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Cta One End-->



    @endsection
