<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cart;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            if (auth()->user()) {
                $total_quntity = Cart::where('user_id', auth()->user()->id)->sum('product_quntity');
                $messages = Contact::latest()->get()->take(3);
                $latest_comment = Comment::latest()->get()->take(3);
                $comm = Comment::all();
                $cate = Category::all();
                $view->with('latest_comment', $latest_comment);
                $view->with('total_quntity', $total_quntity);
                $view->with('messages', $messages);
                $view->with('comm', $comm);
                $view->with('cate', $cate);
                Paginator::useBootstrap();
            }

            $comm = Comment::all();
            $view->with('comm', $comm);

        });

    }
}
