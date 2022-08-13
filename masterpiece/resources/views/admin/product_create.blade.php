@php
$pageName = 'Manage Exams';
@endphp
@extends('admin.layouts.admin')
@section('content')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }

    </style>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Product</h4>
            </div>
               @if($errors->any())
    <div class="alert alert-danger text-center" role="alert">
        {{ $errors->first() }}
    </div>
@endif
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('admin.products.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Product Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="product_name" class="form-control" placeholder="Name"
                                                id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="fas fa-book"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-icon">Product Descreption</label>
                                        <div class="position-relative">
                                            <input type="text" name="product_description" class="form-control"
                                                placeholder="Descreption" id="email-id-icon">
                                            <div class="form-control-icon">
                                                <i class="fas fa-pencil-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                   <div class="col-12 col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-icon">Product Price</label>
                                        <div class="position-relative">
                                            <input type="text" name="product_price" class="form-control"
                                                placeholder="Descreption" id="email-id-icon">
                                            <div class="form-control-icon">
                                                <i class="fas fa-pencil-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                 </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="password-id-icon">Image</label>
                                        <div class="position-relative">
                                            <label for="image">
                                                <img src="{{ asset('img/Add_Image_icon.png') }}" alt="profile_photo"
                                                    style="cursor: pointer">
                                                <input type="file" id="image" name="product_image" class="form-control d-none">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Add</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
