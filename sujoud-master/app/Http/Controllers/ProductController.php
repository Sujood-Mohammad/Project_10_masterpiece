<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
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
        $categories = Category::all();
        return view('admin.product_create', compact('categories'));
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
            'product_image' => 'max:5048|required',
            'product_price' => 'required',
            'category_id' => 'required',
        ]);

        $newImageName = time() . '-' . $request->product_name . '.' . $request->product_image->extension();
        $request->product_image->move(public_path('img'), $newImageName);
        $product = Product::create([
            'product_name' => $request->input('product_name'),
            'product_description' => $request->input('product_description'),
            'product_image' => $newImageName,
            'product_price' => $request->input('product_price'),
            'category_id' => $request->input('category_id'),

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
        $sort = $request->query('sort');
        $rang_price = $request->query('rang_price');
        $min_price = $request->query('min_price');
        $max_price = $request->query('max_price');
        if ($category) {
            $products = Product::where('category_id', $category)->get();
        } else if ($sort == 'low_price') {
            $products = Product::orderBy('product_price', 'asc')->get();
        } else if ($sort == 'high_price') {
            $products = Product::orderBy('product_price', 'desc')->get();
        } else if ($sort == 'new') {
            $products = Product::orderBy('created_at', 'desc')->get();
        } else if ($sort == 'old') {
            $products = Product::orderBy('created_at', 'asc')->get();
        } else if ($rang_price) {
            $products = Product::whereBetween('product_price', [$min_price, $max_price])->get();
        }
        else {
            $products = Product::all();
        }
        return view('Pages.shop', compact('products', 'sort', 'rang_price', 'min_price', 'max_price'));

        // $category = (int)$request->query('category');
        // if ($category) {
        //     $products = Product::where('category_id', $category)->get();
        // } else {
        //     $products = Product::paginate(9);
        // }
        // return view('Pages.shop', compact('products'));
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
            'product_image' => 'max:5048|required',
            'product_price' => 'required',
            // 'category_id' => 'required',
        ]);

        $newImageName = time() . '-' . $request->product_name . '.' . $request->product_image->extension();
        $request->product_image->move(public_path('img'), $newImageName);

        $product = Product::where('id', $id)->update([
            'product_name' => $request->input('product_name'),
            'product_description' => $request->input('product_description'),
            'product_image' => $newImageName,
            'product_price' => $request->input('product_price'),
            // 'category_id' => $request->input('category_id'),
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
            $comments = Comment::where('product_id', $product_id)->get();
            $users = User::where('id', $products->user_id)->first();
            return view('Pages.product-details', compact('products','comments','users'));
        } else {
            return redirect('/')->with('error', 'Product not found');
        }
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::query()
            ->where('product_name', 'LIKE', "%{$search}%")
            ->get();
        if ($products->count() > 0) {
            return view('Pages.shop', compact('products', 'search'));
        } else {
            return redirect()->back()->with('fail', ' No Product Found ');
        }

    }

}
