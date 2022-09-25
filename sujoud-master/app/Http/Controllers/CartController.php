<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user())
{
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

            return view('pages.cart', compact('cart', 'total', 'sub_total', 'shiping_cost', 'total_quntity'));
}
        else{
            return view('pages.cart');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        $request->validate([
            'product_id' => 'required',
            'product_quntity' => 'required',


        ]);

        $product = Product::find($request->input('product_id'));
        $cart = Cart::create([
            "user_id" => auth()->user()->id,
            'product_id' => $request->input('product_id'),
            'product_quntity' => $request->input('product_quntity'),
            'sub_total' => $request->product_price * $request->input('product_quntity'),
            'shiping_cost' => 20,
            'total' => $request->product_price * $request->input('product_quntity') + 20,
        ]);



        return redirect()->back()->with('success', 'Product added to cart successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = Cart::find($id);
        return view('pages.cart', compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {

        $cart = Cart::find($id);
        $cart->product_quntity = $request->quntity;
        $cart->sub_total = $request->product_price * $request->quntity;
        $cart->total = $request->product_price * $request->quntity + 20;
        $cart->save();
        return redirect()->back()->with('success', 'Cart updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */



    public function destroy($id)
    {
        Cart::destroy($id);
        return redirect()->back()->with('success', 'Deleted successfully');
    }

}
