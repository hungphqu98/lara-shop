<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function about()
    {
        return view('about'); 
    }

    public function index()
    {
        return view('index'); 
    }

    public function blog()
    {
        return view('blog'); 
    }

    public function contact()
    {
        return view('contact'); 
    }

    public function blogDetails()
    {
        return view('blog-details'); 
    }

    public function checkout()
    {
        return view('checkout'); 
    }

    public function shop()
    {
        return view('shop'); 
    }

    public function shopDetails()
    {
        return view('shop-details'); 
    }

    public function shoppingCart()
    {
        return view('shopping-cart'); 
    }

} 