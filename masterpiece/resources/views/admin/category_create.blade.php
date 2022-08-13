@php
$pageName = 'Manage Categories';
@endphp
@extends('admin.layouts.admin')
@section('content')
    <div class="col-md-8 offset-md-2 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Vertical Form with Icons</h4>
            </div>

        @if($errors->any())
    <div class="alert alert-danger text-center" role="alert">
        {{ $errors->first() }}
    </div>
@endif
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('admin.categories.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Name</label>
                                        <div class="position-relative">
                                            <input type="text" name="name" class="form-control" placeholder="Name"
                                                id="first-name-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">

                                    <div class="form-group has-icon-left">
                                        <label for="email-id-icon">Descreption</label>
                                        <div class="position-relative">
                                            <input type="text" name="description" class="form-control"
                                                placeholder="Descreption" id="email-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="password-id-icon">Number of Questions</label>
                                        <div class="position-relative">
                                            <input type="number" name="exam_num_qus" class="form-control"
                                                placeholder="Number of Questions" id="password-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="password-id-icon">Image</label>
                                        <div class="position-relative">
                                            <label for="image">
                                                 {{-- <img src="{{ asset("img/$category->image") }}" width="100" height="100"
                                                    alt="profile_photo" style="cursor: pointer; object-fit:cover;"> --}}
                                                <input type="file" id="image" name="image" class="form-control d-none">
                                                <img src="{{ asset('img/Add_Image_icon.png') }}" alt="profile_photo"
                                                    style="cursor: pointer">
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
