<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail($product)
    {
    	return view('product');
    }

    public function searchPage(Request $req)
    {
    	return view('search');
    }

    public function wishlistPage(Request $req)
    {
    	return view('wishlist');
    }

    public function cart(Request $req)
    {
        return view('cart');
    }

    public function checkout(Request $req)
    {
        return view('checkout');
    }
}
