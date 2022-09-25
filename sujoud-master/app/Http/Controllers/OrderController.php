<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::id()) {
            $cart = Cart::where('user_id', auth()->user()->id)->get();
            foreach ($cart as $key => $value) {
                $value->product = Product::find($value->product_id);
            }
            $total = 0;
            $sub_total = 0;
            $shiping_cost = 20;
            foreach ($cart as $key => $value) {
                $sub_total += $value->product->product_price * $value->product_quntity;
                $total = $sub_total + $shiping_cost;
            }
            $total_quntity = Cart::where('user_id', auth()->user()->id)->sum('product_quntity');

            return view('pages.checkout', compact('cart', 'total','total_quntity'));
        } else {
            return redirect()->route('login')->withFailure(__('You must login to see this page'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Order::all();
        return view('admin.orders', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreOrderRequest $request)
    {
            $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'state' => 'required',
        ]);

        $allcart = Cart::where('user_id', auth()->user()->id)->get();
        foreach ($allcart as $cart) {
            $cart->product = Product::find($cart->product_id);

            $order = Order::create([
                "user_id" => auth()->user()->id,
                'product_id' => $cart->product_id,
                'product_quntity' => $cart->product_quntity,
                'total' => $cart->product->product_price * $cart->product_quntity,
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'zip_code' => $request->input('zip_code'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                // 'timestamp' => now(),
            ]);
            Cart::where('user_id', auth()->user()->id)->delete();
        }
        return redirect('/')->with('success', 'Order placed successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    // public function show(Order $order)
    // {

    // }

    public function show(Order $orders){
        $orders = Order::where('user_id',auth()->user()->id)->get();
        foreach ($orders as $key => $value) {
            $value->product = Product::find($value->product_id);
        }
        return view('pages.order', compact('orders'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'order_status' => 'required',
        ]);

        $order = Order::find($id);
        $order->order_status = $request->input('order_status');
        $order->save();
        return redirect('admin/orders/create')->with('success', 'Order status updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect('admin/orders/create')->with('success', 'Order deleted successfully');
    }
}
