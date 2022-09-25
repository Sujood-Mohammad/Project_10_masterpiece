<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Coupon;
use App\Http\Requests\StoreCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('admin.coupons', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupon_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCouponRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouponRequest $request)
    {
        $request->validate([
            'coupon_code' => 'required',
            'discount' => 'required',
        ]);

        $coupon = new Coupon();
        $coupon->coupon_code = $request->coupon_code;
        $coupon->discount = $request->discount;
        $coupon->save();
        return redirect('admin/coupons')->with('success', 'Coupon Added Successfully');
    }

    public function applay(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required',
        ]);
        $coupons = Coupon::all();
        $coupon = Coupon::where('coupon_code', $request->coupon_code)->first();
        if ($coupon) {
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
            $discount = $coupon->discount;
            $total = $total - $discount;
            return view('Pages.checkout', compact('cart', 'total', 'discount', 'coupon', 'coupons'));
        } else {
            return redirect()->back()->withFailure(__('Coupon Code is not valid'));
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCouponRequest  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouponRequest $request, Coupon $coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coupon::destroy($id);
        return redirect('admin/coupons')->with('success', 'Coupon Deleted Successfully');
    }
}
