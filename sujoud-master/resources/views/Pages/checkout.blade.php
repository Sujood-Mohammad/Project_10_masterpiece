@extends('Layout.master')
@section('title', 'Checkout')


@section('content')


    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="index-main.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li>Checkout</li>
                </ul>
                <h2>Checkout</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <div class="container" style="margin-top: 20px">
        @if (Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
    </div>

    <section class="checkout-page">
        {{-- @foreach ($order as $id => $orders) --}}
        @if ($errors->any())
            <div class="alert alert-danger text-center" role="alert">
                {{ $errors->first() }}
            </div>
        @endif
        <form method="POST" action="{{ route('order.store') }}">
            @csrf
            {{-- @method('post') --}}
            <div class="auto-container">
                <p class="checkout-page__returning">Returning Customer? <a href="login.html">Click here to Login</a></p>
                <div class="row">

                    <div class="col-lg-6">
                        <h3 class="checkout__title">Billing Details</h3><!-- /.checkout__title -->
                        <div class="comment-one__form">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Full Name" value="{{ Auth::user()->name }}">
                                    </div><!-- /.comment-form__input-box -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Address" name="address">
                                    </div><!-- /.comment-form__input-box -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Town/ City" name="city">
                                    </div><!-- /.comment-form__input-box -->
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="State" name="state">
                                    </div><!-- /.comment-form__input-box -->
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Zip Code" name="zip_code">
                                    </div><!-- /.comment-form__input-box -->
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Email Address" value="{{ Auth::user()->email }}">
                                    </div><!-- /.comment-form__input-box -->
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone" name="phone">
                                    </div><!-- /.comment-form__input-box -->
                                </div><!-- /.col-md-12 -->

                            </div><!-- /.row -->
                        </div><!-- /.comment-one__form -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-4" style="margin-left: 150px">

                        <h3 class="checkout__title">Your order</h3><!-- /.checkout__title -->

                        <div class="comment-one__form">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table checkout__table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>Total</td>
                                                <td>${{ $total }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- /.table-responsive -->

                                <div class="checkout__payment">
                                    <div class="checkout__payment__item checkout__payment__item--active">
                                        <h3 class="checkout__payment__title">Payment when recieving</h3>
                                        <div class="checkout__payment__content">
                                            Make your payment directly into our bank account.
                                        </div><!-- /.checkout__payment__content -->
                                    </div><!-- /.checkout__payment__item -->
                                    <div class="text-right d-flex justify-content-end">

                                        {{-- <a class="thm-btn" href="checkout.html">
								Place your order
							</a> --}}
                                        <button type="submit" class="thm-btn"> Place your order </button>
                                    </div><!-- /.text-right -->

                                </div><!-- /.col-lg-6 -->

                            </div>

                        </div>
                    </div><!-- /.col-lg-6 -->

                </div><!-- /.row -->
        </form>
        <form action="{{ route('applay') }}" method="POST" style="display: inline-block">
            @csrf
            @method('POST')
            <div class="col-lg-8">
                <div class="proceed-to-checkout__cupon">
                    <input type="text" placeholder="Enter Coupon Code" name="coupon_code">
                    <button type="submit" class="thm-btn">Apply coupon</button><!-- /.thm-btn -->

                </div><!-- /.proceed-to-checkout__cupon -->
            </div><!-- /.col-lg-8 -->
        </form>
    </section><!-- /.checkout-page -->

@endsection
