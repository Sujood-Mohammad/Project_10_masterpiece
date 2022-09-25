@php
$pageName = 'Manage Comments';
@endphp
@extends('admin.layouts.admin')
@section('title', $pageName)
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                    <h3>Manage Comments</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Comments</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @include('alerts.success')
        <section class="section">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between; align-items:center">
                    <div>Users Table</div>
                    {{-- <a href="/admin/coupons/create"><button class="btn btn-primary">Add Coupon</button></a> --}}
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product</th>
                                <th>User</th>
                                <th>Comment</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td>{{ $comment->product->product_name }}</td>
                                    <td>{{ $comment->user->name }}</td>
                                    <td>{{ $comment->text }}</td>
                                    <td>
                                          {{-- select status for comment --}}
                                            <form action="{{ route('admin.comments.update', $comment->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <select name="status" id="status" class="form-select" aria-label="Default select example" onchange="this.form.submit()">
                                                    <option value="Pending" {{ $comment->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="Approved" {{ $comment->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                    <option value="Rejected" {{ $comment->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                                                </select>
                                            </form>
                                    </td>
                                    <td>

                                         <form style="display: inline-block" method="POST"
                                            action="{{ route('admin.comments.destroy', $comment->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn text-primary"><i class="far fa-trash-alt" style="color:#6b9818"></i></button>
                                        </form>
                                        {{-- <form style="display: inline-block" method="POST"
                                            action="{{ route('admin.comments.update', $comment->id) }}">
                                            @csrf
                                            @method('put')
                                            <select name="status" id="status" class="form-select" style="width: 100px" onchange="this.form.submit()">
                                                <option value="0" {{ $comment->status == 0 ? 'selected' : '' }}>Pending</option>
                                                <option value="1" {{ $comment->status == 1 ? 'selected' : '' }}>Approved</option>
                                                <option value="2" {{ $comment->status == 2 ? 'selected' : '' }}>Rejected</option>
                                            </select>
                                        </form> --}}

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
