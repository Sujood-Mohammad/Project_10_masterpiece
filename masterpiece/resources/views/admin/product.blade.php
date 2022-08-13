@php
$pageName = 'Manage Products';
@endphp
@extends('admin.layouts.admin')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                    <h3>Manage Product</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @include('alerts.success')
        <section class="section">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between; align-items:center">
                    <div>Product Table</div>
                    <div>
                        <form action="/admin/products/create" method="GET">
                            <button class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Product Descreption</th>
                                <th>Product Price</th>
                                <th>Image</th>
                                <th>Adjustments</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->product_description }}</td>
                                    <td>{{ $product->product_price }}</td>

                                    <td>
                                        <img class="avatar me-2" style="object-fit: cover" width="50" height="50"
                                            src="{{ asset("img/$product->product_image") }}" alt="profile_photo">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.products.show', $product->id) }}"><i
                                                class="far fa-eye"></i></a>
                                        <a href="{{ route('admin.products.edit', $product->id) }}" class="ms-3 ">
                                            <i class="fas fa-cog"></i>
                                        </a>
                                        <form style="display: inline-block" method="POST"
                                            action="{{ route('admin.products.destroy', $product->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn text-primary"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
@section('scripts')

    <script src="{{ asset('assets/assets2/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endsection
