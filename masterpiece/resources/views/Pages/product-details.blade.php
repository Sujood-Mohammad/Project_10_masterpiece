@extends('Layout.master')

@section('title', 'Single Product')
@section('content')
    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url('{{ asset('assets/images/backgrounds/page-header-bg.jpg') }}');">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="/product">Shop</a></li>
                    <li>Product Details</li>
                </ul>
                <h2>Product Details</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <section class="product-details">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="product-details__image">
                        <img src="{{ asset('img/' . $products->product_image) }}" width="490px" height="550px"
                            alt="">
                    </div><!-- /.product-details__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('cart.store') }}" class="product-details__content">
                        @csrf
                        <div class="product-details__content__top">
                            <h3 class="product-details__content__name">{{ $products->product_name }}</h3>
                            <!-- /.product-details__content__name -->
                            <div class="product-details__content__price">{{ $products->product_price }}$</div>
                            <!-- /.product-details__content__price -->
                        </div><!-- /.product-details__content__top -->
                        <div class="product-details__content__rating">
                            <div class="product-details__content__rating__star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-details__content__rating__star -->
                            <div class="product-details__content__rating__count">2 Customer Reviews</div>
                            <!-- /.product-details__content__rating__count -->
                        </div><!-- /.product-details__content__rating -->
                        <div class="product-details__content__text">
                            <p>Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo
                                venenatis ligula commodo leez sed blandit convallis dignissim onec vel pellentesque
                                neque.</p>
                            {{-- <p>REF. 4231/406 <br>Available in store</p> --}}
                        </div><!-- /.product-details__content__text -->

                        {{-- <div class="container">
														<h2 class="product-content__title">Description :</h2><!-- /.product-content__title -->
														<p>
																				{{$products->product_description}}
														</p>
													</div><!-- /.container --> --}}


                        <div class="product-details__content__quantity">
                            <div class="product-details__content__quantity__text">Choose Quantity</div>
                            <!-- /.product-details__content__quantity__text -->
                            <div class="quantity-box">
                                <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                <input type="number" id="product-1" min="1" name="product_quntity" value="1" />
                                <input type="hidden" name="product_id" value="{{ $products->id }}">
                                <button type="button" class="add"><i class="fa fa-plus"></i></button>
                            </div>
                        </div><!-- /.product-details__content__quantity -->

                        <div class="product-details__content__buttons">
                            <button type="submit" class="thm-btn cart-btn">Add to cart</button><!-- /.thm-btn -->
                            {{-- <a href="#" class="thm-btn wishlist-btn">add to wishlist</a> --}}
                            <!-- /.thm-btn wishlist-btn -->
                        </div><!-- /.product-details__content__buttons -->
                        <div class="product-details__content__social">
                            <div class="product-details__content__social__text">Share with friends</div>
                            <!-- /.product-details__content__social__text -->
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-pinterest-p"></a>
                        </div><!-- /.product-details__content__social -->
                    </form><!-- /.product-details__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.product-details -->

    <section class="product-content">
        <div class="container">
            <h2 class="product-content__title">Description</h2><!-- /.product-content__title -->
            <p>
                {{ $products->product_description }}
            </p>
        </div><!-- /.container -->
    </section><!-- /.product-content -->

    <section class="product-review">
        <div class="container">
            <h2 class="product-content__title">2 Reviews</h2><!-- /.product-content__title -->
            <div class="product-review__item">
                <div class="product-review__item__image">
                    <img src="assets/images/update-14-09-2021/shop/shop-review-1-1.png" alt="">
                </div><!-- /.product-review__item__image -->
                <div class="product-review__item__content">
                    <div class="product-review__item__star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.product-review__item__star -->
                    <h3 class="product-review__item__title">Mike Hardson</h3>
                    <div class="product-review__item__meta">
                        20 Sep, 2021 <span>.</span> 4:00 pm
                    </div><!-- /.product-review__item__meta -->
                    <p class="product-review__item__text">Aliquam et facilisis arcuut olestie augue. Suspendisse
                        sodales tortor nunc quis auctor ligula posuere cursus duis aute irure dolor in reprehenderit
                        in voluptate velit esse cill doloreeu fugiat nulla pariatur excepteur sint. Vivaus sed delly
                        molestie sapien. Aliquam et facilisis arcuut molestie augue. </p>
                    <!-- /.product-review__item__text -->
                </div><!-- /.product-review__item__content -->
            </div><!-- /.product-review__item -->

            <div class="product-review__item">
                <div class="product-review__item__image">
                    <img src="assets/images/update-14-09-2021/shop/shop-review-1-2.png" alt="">
                </div><!-- /.product-review__item__image -->
                <div class="product-review__item__content">
                    <div class="product-review__item__star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.product-review__item__star -->
                    <h3 class="product-review__item__title">Sarah Rose</h3>
                    <div class="product-review__item__meta">
                        20 Sep, 2021 <span>.</span> 4:00 pm
                    </div><!-- /.product-review__item__meta -->
                    <p class="product-review__item__text">Aliquam et facilisis arcuut olestie augue. Suspendisse
                        sodales tortor nunc quis auctor ligula posuere cursus duis aute irure dolor in reprehenderit
                        in voluptate velit esse cill doloreeu fugiat nulla pariatur excepteur sint. Vivaus sed delly
                        molestie sapien. Aliquam et facilisis arcuut molestie augue. </p>
                    <!-- /.product-review__item__text -->
                </div><!-- /.product-review__item__content -->
            </div><!-- /.product-review__item -->
        </div><!-- /.container -->
    </section><!-- /.product-review -->

    <section class="product-form">
        <div class="container">
            <h2 class="product-content__title">Add a Review</h2><!-- /.product-content__title -->
            <p class="product-form__rating">
                Rate this Product?
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </p>
            <form action="https://layerdrops.com/agriox/assets/inc/sendemail.php"
                class="comment-one__form contact-form-validated">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="comment-form__input-box">
                            <textarea name="message" placeholder="Write message"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="comment-form__input-box">
                            <input type="text" placeholder="Your name" name="name">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="comment-form__input-box">
                            <input type="email" placeholder="Email address" name="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">

                        <button type="submit" class="thm-btn comment-form__btn">Submit
                            comment</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container -->
    </section><!-- /.product-form -->
@endsection
