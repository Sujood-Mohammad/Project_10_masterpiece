<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CouponController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// contact us
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'save'])->name('contact.store');
//
Auth::routes();
Route::get('productdetails/{prod_id}', [ProductController::class, 'productview']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('Pages.about');
});
Route::get('/contact', function () {
    return view('Pages.contact');
});


// Route::get('')

// Route::get('add-to-cart/{id}', 'CartController@addToCart');


// Route::get('/product/{id}', [ProductController::class, 'showproducts']);
Route::get('/product', [ProductController::class, 'show']);

// Route::get('/shop', function () {
//     return view('Pages.shop');
// });
Route::post('/product', [ProductController::class, 'search'])->name('product.search');
Route::resource('/cart', CartController::class);


Route::resource('/order', OrderController::class);

Route::resource('/comment', CommentController::class);

Route::get('/productdetails', function () {
    return view('Pages.product-details');
});

Route::get('/checkout', function () {
    return view('Pages.checkout');
});


Route::post('/coupon', [CouponController::class, 'applay'])->name('applay');


// for admin
Route::name('admin.')->prefix('admin')->middleware(['auth', 'role'])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('coupons', CouponController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('comments', CommentController::class);
});

// user profile routes
Route::get('/editprofile/{user}', ['App\Http\Controllers\UserController', 'editProfile'])->name('pages.editprofile');

Route::post('/updateprofile/{user}', ['App\Http\Controllers\UserController', 'updateProfile'])->name('pages.updateProfile');
// Route::post('/comment/{user}', ['App\Http\Controllers\CommentController', 'store'])->name('comment.store');

Route::get('/profile/{user}', ['App\Http\Controllers\UserController', 'showProfile']);

// Route::get('items/{id}', 'App\Http\Controllers\OrderController@orderItems');
// Route::get('order', 'App\Http\Controllers\OrderController@order');
// Route::get('order/items/{id}', 'App\Http\Controllers\OrderController@profileItems');
