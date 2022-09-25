@extends('Layout.master')

@section('title', 'Shop')

@section('content')


    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url('{{ asset('assets/images/backgrounds/page-header-bg.jpg') }}');">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="index-main.html">Home</a></li>
                    <li>Shop</li>
                </ul>
                <h2>Shop</h2>
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

@if (Session::has('fail'))
    <div class="alert alert-danger text-center" role="alert">
        {{ Session::get('fail') }}
    </div>
@endif
    </div>

    <section class="shop-one">

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-one__sidebar">
                        <div class="shop-one__sidebar__item shop-one__sidebar__search">

                            <form action="{{route('product.search')}}" method="POST">
                                @csrf
                                <input type="text" placeholder="Search here" name="search">
                                <button type="submit"><i class=" icon-search "></i></button>
                            </form>

                        </div><!-- /.shop-one__sidebar__item -->
                        <div class="shop-one__sidebar__item shop-one__sidebar__price">
                            <h3 class="shop-one__sidebar__item__title">Price</h3>
                            <!-- /.shop-one__sidebar__item__title -->
                             <form method="GET">
                            <div class="shop-one__sidebar__price-range">
                                <div class="range-slider-price" data-range-min="10" data-range-max="200" data-limit="200"
                                    data-start-min="30" data-start-max="150" id="range-slider-price"></div>
                                <div class="form-group">
                                    <div class="left">
                                        <p>$<span id="min-value-rangeslider"></span></p>
                                        <span>-</span>
                                        <p>$<span id="max-value-rangeslider"></span></p>
                                    </div><!-- /.left -->
                                    <div class="right">
                                        <button class="thm-btn" type="submit">
                                            Filter
                                        </button>
                                    </div><!-- /.right -->
                                </div>
                            </div>
                        </form>
                        </div><!-- /.shop-one__sidebar__item -->
                        <div class="shop-one__sidebar__item shop-one__sidebar__category">
                            <h3 class="shop-one__sidebar__item__title">Main Categories</h3>
                            <!-- /.shop-one__sidebar__item__title -->
                            <ul class="list-unstyled shop-one__sidebar__category__list">
                               <?php
                                $categories = DB::table('categories')->get();

                               ?>
                               @foreach($categories as $category)
                                  <li>
                                    <a href="product?category={{$category->id}}">{{$category->name}}</a>
                                    <hr>
                                </li>
                                 @endforeach
                            </ul>
                        </div><!-- /.shop-one__sidebar__item -->
                    </div><!-- /.shop-one__sidebar -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12 shop-one__sorter">
                            <p class="shop-one__product-count">
                                {{-- Showing pangment of all number of product results --}}

                                {{-- @if($products->count() > 0)
                                Showing {{$products->count()}} of results {{$products->count()}}
                                @else
                                Showing 0 of 0 results
                                @endif --}}
                            </p><!-- /.shop-one__product-count -->

                            {{-- how to create form to get show functoin to sort product --}}
                            <form method="GET">
                                <select class="shop-one__product-sorter" name="sort" id="sort" onchange="this.form.submit()">
                                    <option value="">Select Sorting</option>
                                    <option value="low_price">
                                        <a href="product?sort=low_price">Sort by Low Price</a>
                                    </option>
                                    <option value="high_price">
                                        <a href="product?sort=high_price">Sort by High Price</a>
                                    </option>
                                    <option value="new">
                                        <a href="product?sort=new">Sort by Newest</a>
                                    </option>
                                    <option value="old">
                                        <a href="product?sort=old">Sort by Oldest</a>
                                    </option>
                                </select>
                                {{-- <button type="submit" class="thm-btn">Sort</button> --}}
                            </form>



                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        @if (!empty($products) && $products->count())
                        @foreach ($products as $values)
                            {{-- <form method="POST" action="{{ route('cart.store') }}">
                                @csrf --}}
                            <form method="POST" action="{{ route('cart.store') }}" class="col-md-6 col-lg-4">
                                @csrf
                                <div class="shop-one__item">
                                    <div class="shop-one__image" style="background-color:#304332">
                                        <span class="shop-one__sale">sale</span><!-- /.shop-one__sale -->
                                        <a href="{{ url('productdetails/' . $values->id) }}">
                                        <img src="{{ asset('img/' . $values->product_image) }}" height="300px" alt="">
                                        </a>
                                        {{-- <a class="shop-one__cart" href="/carts/store"><i
												class=" icon-shopping-cart"></i></a> --}}
                                        <button type="submit" class="shop-one__cart">
                                            <i class="icon-shopping-cart"></i>
                                        </button>
                                        <input type="hidden" name="product_id" value="{{ $values->id }}" />
                                        <input type="hidden" name="product_price" value="{{ $values->product_price }}" />
                                        <input type="hidden" name="product_quntity" value="1" />
                                        {{-- <button type="submit" class="thm-btn cart-btn" style="width:220px ;">
                                Add to cart
                            </button> --}}
                                    </div><!-- /.shop-one__image -->
                                    <div class="shop-one__content text-center">
                                        <h3 class="shop-one__title"><a
                                                href="{{ url('productdetails/' . $values->id) }}">{{ $values->product_name }}</a>
                                        </h3>
                            {{-- display discribtion 17 letter --}}
                                                                    {{-- <p>{{ $values->product_description }}</p> --}}

                            <p >{{ Str::limit($values->product_description, 40) }}</p>
                                        <p class="shop-one__price">{{ $values->product_price }} $</p>
                                        <!-- /.shop-one__price -->
                                        <div class="shop-one__rating">
                                            {{-- <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> --}}
                                            <button class="thm-btn" style="padding: 10px 50px">
                                                Add to cart
                                            </button>
                                        </div><!-- /.shop-one__rating -->
                                    </div><!-- /.shop-one__content -->
                                </div><!-- /.shop-one__item -->

                            </form>

                        @endforeach

                            {{-- {{ $products->links() }} --}}

                        @else
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <p>There are no products</p>
                            </div>
                        </div>
                        @endif

{{-- <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px">
    {{ $products->links() }}
</div> --}}



                        {{-- <div class="col-md-6 col-lg-4">
								<div class="shop-one__item">
									<div class="shop-one__image" style="background-color:#304332">
										<img src="assets/images/update-14-09-2021/shop/shop2.jpg" height="328px" alt="">
										<a class="shop-one__cart" href="cart.html"><i
												class=" icon-shopping-cart"></i></a>
									</div><!-- /.shop-one__image -->
									<div class="shop-one__content text-center">
										<h3 class="shop-one__title"><a href="/product">Flextools Gardening Trowel</a>
										</h3>
										<p class="shop-one__price">$659.00</p><!-- /.shop-one__price -->
										<div class="shop-one__rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div><!-- /.shop-one__rating -->
									</div><!-- /.shop-one__content -->
								</div><!-- /.shop-one__item -->
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="shop-one__item">
									<div class="shop-one__image" style="background-color:#304332">
										<img src="assets/images/update-14-09-2021/shop/shop3.jpg" height="328px" alt="">
										<a class="shop-one__cart" href="cart.html"><i
												class=" icon-shopping-cart"></i></a>
									</div><!-- /.shop-one__image -->
									<div class="shop-one__content text-center">
										<h3 class="shop-one__title"><a href="/product">Gardening Hand Gloves</a>
										</h3>
										<p class="shop-one__price">$180.00</p><!-- /.shop-one__price -->
										<div class="shop-one__rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div><!-- /.shop-one__rating -->
									</div><!-- /.shop-one__content -->
								</div><!-- /.shop-one__item -->
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="shop-one__item">
									<div class="shop-one__image" style="background-color:#304332">
										<img src="assets/images/update-14-09-2021/shop/shop4.jpg" height="328px" alt="">
										<a class="shop-one__cart" href="cart.html"><i
												class=" icon-shopping-cart"></i></a>
									</div><!-- /.shop-one__image -->
									<div class="shop-one__content text-center">
										<h3 class="shop-one__title"><a href="/product">Cultivator</a>
										</h3>
										<p class="shop-one__price">$1000.00</p><!-- /.shop-one__price -->
										<div class="shop-one__rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div><!-- /.shop-one__rating -->
									</div><!-- /.shop-one__content -->
								</div><!-- /.shop-one__item -->
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="shop-one__item">
									<div class="shop-one__image" style="background-color:#304332">
										<img src="assets/images/update-14-09-2021/shop/shop5.jpg" height="328px" alt="">
										<a class="shop-one__cart" href="cart.html"><i
												class=" icon-shopping-cart"></i></a>
									</div><!-- /.shop-one__image -->
									<div class="shop-one__content text-center">
										<h3 class="shop-one__title"><a href="/product">Electronic Saw</a>
										</h3>
										<p class="shop-one__price">$300.00</p><!-- /.shop-one__price -->
										<div class="shop-one__rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div><!-- /.shop-one__rating -->
									</div><!-- /.shop-one__content -->
								</div><!-- /.shop-one__item -->
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="shop-one__item">
									<div class="shop-one__image" style="background-color:#304332">
										<img src="assets/images/update-14-09-2021/shop/shop6.jpg" height="328px" alt="">
										<a class="shop-one__cart" href="cart.html"><i
												class=" icon-shopping-cart"></i></a>
									</div><!-- /.shop-one__image -->
									<div class="shop-one__content text-center">
										<h3 class="shop-one__title"><a href="/product">strawberry seedlings</a>
										</h3>
										<p class="shop-one__price">$50.00</p><!-- /.shop-one__price -->
										<div class="shop-one__rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div><!-- /.shop-one__rating -->
									</div><!-- /.shop-one__content -->
								</div><!-- /.shop-one__item -->
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="shop-one__item">
									<div class="shop-one__image" style="background-color:#304332">
										<span class="shop-one__sale">sale</span><!-- /.shop-one__sale -->
										<img src="assets/images/update-14-09-2021/shop/shop7.jpg" height="328px" alt="">
										<a class="shop-one__cart" href="cart.html"><i
												class=" icon-shopping-cart"></i></a>
									</div><!-- /.shop-one__image -->
									<div class="shop-one__content text-center">
										<h3 class="shop-one__title"><a href="/product">Eselar Tool Set</a>
										</h3>
										<p class="shop-one__price">$289.00</p><!-- /.shop-one__price -->
										<div class="shop-one__rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div><!-- /.shop-one__rating -->
									</div><!-- /.shop-one__content -->
								</div><!-- /.shop-one__item -->
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="shop-one__item">
									<div class="shop-one__image" style="background-color:#304332">
										<img src="assets/images/update-14-09-2021/shop/shop8.jpg" height="328px" alt="">
										<a class="shop-one__cart" href="cart.html"><i
												class=" icon-shopping-cart"></i></a>
									</div><!-- /.shop-one__image -->
									<div class="shop-one__content text-center">
										<h3 class="shop-one__title"><a href="/product">Harvester </a>
										</h3>
										<p class="shop-one__price">$20000</p><!-- /.shop-one__price -->
										<div class="shop-one__rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div><!-- /.shop-one__rating -->
									</div><!-- /.shop-one__content -->
								</div><!-- /.shop-one__item -->
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="shop-one__item" >
									<div class="shop-one__image" style="background-color:#304332">
										<span class="shop-one__sale">sale</span><!-- /.shop-one__sale -->
										<img src="assets/images/update-14-09-2021/shop/shop9.jpg" height="328px" alt="">
										<a class="shop-one__cart" href="cart.html"><i
												class=" icon-shopping-cart"></i></a>
									</div><!-- /.shop-one__image -->
									<div class="shop-one__content text-center">
										<h3 class="shop-one__title"><a href="/product">Tractor Spraying Pesticides</a>
										</h3>
										<p class="shop-one__price">$100000.00</p><!-- /.shop-one__price -->
										<div class="shop-one__rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div><!-- /.shop-one__rating -->
									</div><!-- /.shop-one__content -->
								</div><!-- /.shop-one__item -->
							</div> --}}

                    </div><!-- /.row -->
                    </form>

                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div>



    </section><!-- /.shop-one -->

@endsection
