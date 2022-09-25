<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Traits\GlobalTrait;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // use GlobalTrait;
    // public $carts;

    public function __construct()
    {
        // $this->middleware('auth');
     

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = Category::all();
        return view("Pages.index", compact("data"));
    }

}
