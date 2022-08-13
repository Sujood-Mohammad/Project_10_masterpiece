<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    public function showproducts(Request $request)
    {

        $category = (int)$request->query('category');
        if ($category) {
            $products = Product::where('category_id', $category)->get();
        } else {
            $products = Product::all();
        }
        return view('Pages.shop', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_image' => 'mimes:jpg,png,jpeg|max:5048|required',
            'product_price' => 'required',
        ]);

        $newImageName = time() . '-' . $request->product_name . '.' . $request->product_image->extension();
        $request->product_image->move(public_path('img'), $newImageName);

        $product = Product::create([
            'product_name' => $request->input('product_name'),
            'product_description' => $request->input('product_description'),
            'product_image' => $newImageName,
            'product_price' => $request->input('product_price'),
        ]);
        return redirect('admin/products')->with('success', 'Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $category = (int)$request->query('category');
        if ($category) {
            $products = Product::where('category_id', $category)->get();
        } else {
            $products = Product::all();
        }
        return view('Pages.shop', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $products = Product::findOrFail($id);
        return view('admin.edit_product', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_image' => 'mimes:jpg,png,jpeg|max:5048|required',
            'product_price' => 'required',
        ]);

        $newImageName = time() . '-' . $request->product_name . '.' . $request->product_image->extension();
        $request->product_image->move(public_path('img'), $newImageName);

        $product = Product::where('id', $id)->update([
            'product_name' => $request->input('product_name'),
            'product_description' => $request->input('product_description'),
            'product_image' => $newImageName,
            'product_price' => $request->input('product_price'),
        ]);

        return redirect('admin/products')->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Product::destroy($id);
        return redirect('admin/products')->with('success', 'Deleted successfully');
    }

    function productview($product_id)
    {
        if (Product::where('id', $product_id)->exists()) {
            $products = Product::where('id', $product_id)->first();
            return view('Pages.product-details', compact('products'));
        } else {
            return redirect('/')->with('error', 'Product not found');
        }
    }
}
