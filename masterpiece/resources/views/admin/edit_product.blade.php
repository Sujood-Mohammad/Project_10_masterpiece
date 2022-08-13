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

                <h4 class="card-title">Edit {{ $products->product_name }} Product</h4>
            </div>

               @if($errors->any())
    <div class="alert alert-danger text-center" role="alert">
        {{ $errors->first() }}
    </div>
@endif
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('admin.products.update', $products->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Product Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="product_name" class="form-control"
                                                value="{{ $products->product_name }}" placeholder="Name" id="first-name-icon">
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
                                            <input type="text" name="product_description" value="{{ $products->product_description }}"
                                                class="form-control" placeholder="Descreption" id="email-id-icon">
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
                                            <input type="text" name="product_price" value="{{ $products->product_price }}"
                                                class="form-control" placeholder="Descreption" id="email-id-icon">
                                            <div class="form-control-icon">
                                                <i class="fas fa-pencil-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                {{-- @php $counter=1; @endphp
                                @foreach ($exam->questions as $item)
                                    <div class="col-12 col-md-6">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Question {{ $counter }} Point</label>
                                            <div class="position-relative">
                                                <input type="text" value="{{ $item->question_point }}"
                                                    name="question_point{{ $counter }}" class="form-control"
                                                    placeholder="Question Point" id="email-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Question {{ $counter }}</label>
                                            <div class="position-relative">
                                                <textarea class="ckeditor" name="question_content{{ $counter }}"
                                                    id="editor">
                                                                {{ $item->question_content }}
                                                            </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Question {{ $counter }} Options</label>
                                            <div class="position-relative">
                                                <input type="text" value="{{ $item->question_options }}"
                                                    name="question_options{{ $counter }}" class="form-control"
                                                    placeholder="split it with ," id="email-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="fas fa-cogs"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Correct Answer {{ $counter }}</label>
                                            <div class="position-relative">
                                                <input type="text" value="{{ $item->correct_answer }}"
                                                    name="correct_answer{{ $counter }}" class="form-control"
                                                    placeholder="Correct Answer" id="email-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php $counter++; @endphp
                                    <div
                                        style="height: 10px; background-color:rgba(67,94,190,0.5); width:100%; margin:30px 0">
                                    </div>
                                @endforeach --}}
                                <div class="col-12 col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="password-id-icon">Image</label>
                                        <div class="position-relative">
                                            <label for="image" style="position: relative;">
                                                <img src="{{ asset("img/$products->product_image") }}" width='100' height="100"
                                                    alt="profile_photo" style="cursor: pointer; object-fit:cover;">
                                                <input type="file" id="image" name="product_image" class="form-control d-none">
                                                <img style="position: absolute; cursor: pointer; bottom:-10px; left:70%"
                                                    src="{{ asset('img/plus.png') }}" width="50" height="50" alt="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
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
