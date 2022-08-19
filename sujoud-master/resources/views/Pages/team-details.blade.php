@extends('Layout.master')

@section('content')

		<!--Page Header Start-->
		<section class="page-header clearfix"
			style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
			<div class="container">
				<div class="page-header__inner text-center clearfix">
					<ul class="thm-breadcrumb">
						<li><a href="index-main.html">Home</a></li>
						<li>Team</li>
					</ul>
					<h2>Team details</h2>
				</div>
			</div>
		</section>
		<!--Page Header End-->

		<section class="team-details">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="team-details__image wow fadeInLeft" data-wow-duration="1500ms">
							<img src="assets/images/update-20-12-2021/resources/team-d-1-1.png" alt="">
							<div class="team-details__logo">
								<img src="assets/images/update-20-12-2021/resources/team-d-logo.png" alt="">
							</div><!-- /.team-details__logo -->
						</div><!-- /.team-details__image -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="team-details__content">
							<h3 class="team-details__name">Christine Eve
							</h3><!-- /.team-details__name -->
							<p class="team-details__designation">Farmer</p><!-- /.team-details__designation -->
							<ul class="team-details__social">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul><!-- /.team-details__social -->
							<p class="team-details__highlight">I help my clients stand out and they help me grow.</p>
							<!-- /.team-details__highlight -->
							<div class="team-details__text">
								<p>Lorem ipsum dolor sit amet, con adipiscing elit tiam convallis elit id impedie. Quisq
									commodo simply free ornare tortor. </p>
								<p>
									If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
									anything embarrassing hidden in the middle of text.</p>
							</div><!-- /.team-details__text -->
						</div><!-- /.team-details__content -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.team-details -->

		<div class="container">
			<hr class="sec-separator">
		</div><!-- /.container -->

		<!--Faq Contact box Start-->
		<section class="faq-contact-box">
			<div class="container">
				<div class="sec-title text-center">
					<div class="icon">
						<img src="assets/images/resources/sec-title-icon1.png" alt="">
					</div>
					<span class="sec-title__tagline">Ask Questions</span>
					<h2 class="sec-title__title">Get in Touch</h2>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="faq-contact-box__wrapper">
							<form action="https://layerdrops.com/agriox/assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
								novalidate="novalidate">
								<div class="row">
									<div class="col-xl-6 col-lg-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Your name" name="name">
										</div>
									</div>
									<div class="col-xl-6 col-lg-6">
										<div class="comment-form__input-box">
											<input type="email" placeholder="Email address" name="email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-lg-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Phone number" name="phone">
										</div>
									</div>
									<div class="col-xl-6 col-lg-6">
										<div class="comment-form__input-box">
											<input type="email" placeholder="Subject" name="Subject">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12">
										<div class="comment-form__input-box">
											<textarea name="message" placeholder="Write message"></textarea>
										</div>
										<button type="submit" class="thm-btn comment-form__btn">Send a message</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Faq Contact box End-->

		<!--Company Logos One Start-->
		<section class="company-logos-one company-logos-one--base">
			<div class="container">
				<div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
						"0": {
							"spaceBetween": 20,
							"slidesPerView": 2
						},
						"375": {
							"spaceBetween": 20,
							"slidesPerView": 2
						},
						"575": {
							"spaceBetween": 20,
							"slidesPerView": 3
						},
						"767": {
							"spaceBetween": 30,
							"slidesPerView": 4
						},
						"991": {
							"spaceBetween": 40,
							"slidesPerView": 5
						},
						"1199": {
							"spaceBetween": 40,
							"slidesPerView": 5
						}
					}}'>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/images/update-20-12-2021/resources/brand-d-1-1.png" alt="">
						</div><!-- /.swiper-slide -->
					</div>
				</div>
			</div>
		</section>
		<!--Company Logos One End-->


	@endsection
