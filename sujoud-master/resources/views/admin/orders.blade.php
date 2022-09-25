@php
$pageName = 'Manage Orders';
@endphp
@extends('admin.layouts.admin')
@section('title', $pageName)
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                    <h3>Manage Orders</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Orders</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @include('alerts.success')
        <section class="section">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between; align-items:center">
                    <div>Orders Table</div>
                    {{-- <a href="/admin/coupons/create"><button class="btn btn-primary">Add Coupon</button></a> --}}
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                 <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->user->email }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->address }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                         {{-- select order_status for order --}}
                                        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <select name="order_status" id="order_status" class="form-select" aria-label="Default select example" onchange="this.form.submit()">
                                                <option value="0" {{ $order->order_status == 0 ? 'selected' : '' }}>Pending</option>
                                                <option value="1" {{ $order->order_status == 1 ? 'selected' : '' }}>Approved</option>
                                                <option value="2" {{ $order->order_status == 2 ? 'selected' : '' }}>Rejected</option>
                                            </select>
                                        </form>

                                    </td>

                                    <td>
                                          <form style="display: inline-block" method="POST"
                                            action="{{ route('admin.orders.destroy', $order->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn text-primary"><i class="far fa-trash-alt" style="color:#6b9818"></i></button>
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
