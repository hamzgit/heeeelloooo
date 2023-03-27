<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    {
        $products = Products::get();
        $new_products = Products::limit(8)->latest()->get();
        return view('Frontend.index',compact('products', 'new_products'));
    }
}

