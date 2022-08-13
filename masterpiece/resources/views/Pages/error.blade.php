@extends('Layout.master')

@section('content')

        <!--Page Header Start-->
        <section class="page-header clearfix"
            style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner text-center clearfix">
                    <ul class="thm-breadcrumb">
                        <li><a href="index-main.html">Home</a></li>
                        <li>404 Error</li>
                    </ul>
                    <h2>404 Error</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <!--Start Error Page One-->
        <section class="error-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__wrapper text-center">
                            <div class="error-page__big-title">
                                <h2>404</h2>
                            </div>
                            <div class="error-page__content">
                                <h2>Sorry, We Can't Find that Page!</h2>
                                <p>The page you are looking for was moved, removed, renamed or never existed.</p>
                            </div>
                            <div class="error-page__search">
                                <form class="search-form" action="#">
                                    <input placeholder="Search here" type="text">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </form>
                            </div>
                            <div class="error-page__btn">
                                <a href="index-main.html" class="thm-btn">Back to home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Error Page One-->



     @endsection
