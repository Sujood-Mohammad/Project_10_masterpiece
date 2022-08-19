@extends('Layout.master')

   @section('content')

<style>
    .ftco-navbar-light {
        background: #343a40 !important;
        position: absolute;
        left: 0;
        right: 0;
        z-index: 3;
        top: 0px  !important;


    }
    .wrapper{
        margin: 100px 0 ;
    }

    </style>

     @if($errors->any())
    <div class="alert alert-danger text-center" role="alert">
        {{ $errors->first() }}
    </div>
    @endif
     <img style='width: 100%; height:400px; position:absolute; ' src="{{ asset("assets/images/backgrounds/slider-3.jpg")}}" alt="">

            <section class="wrapper " style="margin-top: 450px;">
                <h2 class="text-center">Your Order</h2>
            <div class="card container" style="margin-top: 40px;">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th>Order ID</th>
                    <th>Status</th>
                    <th>Product Image </th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Date</th>
                    </tr>
                </thead>

                <tbody class="table-border-bottom-0">
                    @foreach ($orders as $id => $order)
                    <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$order->id}}</strong></td>
                    <td><span class="bg-label-{{$order->status == 0 ? 'warning' : 'success'}} me-1">{{$order->status == 0 ? 'Pending' : 'Approved'}}</span></td>
                    <td><img src="{{ asset('img/' . $order->product->product_image) }}" alt="" width="80px" height="80px"></td>
                    <td><i class="fab"></i> <strong>{{$order->product->product_name}}</strong></td>
                    <td>{{$order->product_quntity}}</td>
                    <td>{{$order->product->product_price}}</td>
                    <td>{{$order->total}}</td>
                    <td>{{$order->created_at}}</td>
                    </tr>

                    @endforeach

                </tbody>
                </table>
            </div>
            </div>
            </section>
@endsection
