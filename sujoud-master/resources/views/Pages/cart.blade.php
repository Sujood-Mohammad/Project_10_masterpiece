@extends('Layout.master')
@section('title', 'Cart')

@section('content')

    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url('{{ asset('assets/images/backgrounds/page-header-bg.jpg') }}');">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="index-main.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li>Cart</li>
                </ul>
                <h2>Cart</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->


    <section class="cart-table">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $total = 0;
                        $sub_total = 0;
                        $shiping_cost = 20;
                         ?>
                    @foreach ($cart as $id => $details)
                        {{-- dd($details); --}}
                        <?php
                        $sub_total += $details->product->product_price * $details->product_quntity;
                        $total = $sub_total + $shiping_cost;
                        ?>
                        <tr>
                            <td data-label="Item">
                                <div class="cart-table__item">
                                    <img src="{{ asset('img/' . $details->product->product_image) }}" alt=""
                                        style="width: 140px; height: 140px ;box-shadow: 0 0 10px rgba(0,0,0.5,0.5);border-radius: 10px">
                                </div>
                                <h3 class="cart-table__item__title">{{ $details->name }}</h3>
                                <!-- /.cart-table__item__title -->
        </div><!-- /.cart-table__item -->
        </td>
        <td data-label="Price">${{ $details->product->product_price }}</td>
        <td data-label="Quantity">
            <div class="quantity-box">
                <form method="POST" action="{{ route('cart.update', $details->id) }}" class="quantity-box">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="product_price" value="{{ $details->product->product_price }}" />
                    <button type="submit" name="sub" class="sub"><i class="fa fa-minus"></i></button>
                    <input type="number" name="quntity" class=".product-2" onchange="this.form.submit()"
                        value="{{ (int) $details->product_quntity }}" />
                    <button type="submit" name="add" class="add"><i class="fa fa-plus"></i></button>
                </form>
            </div>
        </td>

        <td data-label="Total">${{ $details->product->product_price * $details->product_quntity }}</td>

        {{-- <td data-label="Total">${{ $details->total }}</td> --}}


        {{-- <form style="display: inline-block" method="POST"
                  <?php
                    $sub_total += $details->product->product_price * $details->product_quntity;
                    $total = $sub_total + $shiping_cost;


                            ?>


                            <tr>
                                <td data-label="Item">
                                    <div class="cart-table__item">
                                        <img src="{{ asset('img/'.$details->product->product_image)}}" alt="" style="width: 140px; height: 140px ;box-shadow: 0 0 10px rgba(0,0,0.5,0.5);border-radius: 10px"></div>
                                        <h3 class="cart-table__item__title">{{ $details->name }}</h3>
                                        <!-- /.cart-table__item__title -->
                                    </div><!-- /.cart-table__item -->
                                </td>
                                <td data-label="Price">${{ $details->product->product_price }}</td>
                                <td data-label="Quantity">
                                    <div class="quantity-box">
                                        <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                        <input type="number" id="product-2" value="{{ $details->product_quntity }}" />
                                        <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>

                                    <td data-label="Total">${{ $details->product->product_price * $details->product_quntity }}</td>

                                {{-- <td data-label="Total">${{ $details->total }}</td> --}}

        <form action="{{ route('cart.destroy', $details->id) }}" method="POST">
            @csrf
            @method('delete')
            <td data-label="Remove">
                <button type="submit" class="btn btn-danger">Remove</button>
            </td>
        </form>
        {{-- <form style="display: inline-block" method="POST"
>>>>>>> 86bc5c1037e9c8d152212ad45e6f86a09bc6d876
                                            action="{{ route('admin.categories.destroy', $category->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn text-primary"><i class="far fa-trash-alt"></i></button>
                                        </form> --}}

        {{-- <td data-label="Remove"><span class="cart-table__close"></span></td> --}}
        </tr>
        @endforeach
        </tbody>
        </table>
        </div><!-- /.container -->
    </section><!-- /.cart-table -->


    <section class="proceed-to-checkout">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="proceed-to-checkout__cupon">
                        <input type="text" placeholder="Enter Coupon Code">
                        <button type="submit" class="thm-btn">Apply coupon</button><!-- /.thm-btn -->
                    </div><!-- /.proceed-to-checkout__cupon -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <ul class="list-unstyled proceed-to-checkout__list">
                        <li>
                            <span>Subtotal</span>
                            <i>${{ $sub_total }}</i>
                        </li>
                        <li>
                            <span>Shipping Cost</span>
                            <i>{{ $shiping_cost }}</i>
                        </li>
                        <li>
                            <span>Total</span>
                            <i >${{ $total }}</i>
                        </li>

                    </ul><!-- /.list-unstyled proceed-to-checkout__list -->

                    <div class="proceed-to-checkout__buttons">
                        <a href="{{route('order.index')}}" class="thm-btn ">Checkout</a>
                    </div><!-- /.proceed-to-checkout__buttons -->
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.proceed-to-checkout -->

@endsection
