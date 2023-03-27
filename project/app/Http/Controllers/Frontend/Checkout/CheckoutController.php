<?php

namespace App\Http\Controllers\Frontend\Checkout;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // ---- Product Checkout Page
    public function checkout()
    {
        return view('Frontend.checkout.Product_checkout');
    }
    // ---------------------------

    // ---- Bracelete page
    public function earings()
    {
        return view('Frontend.earings');

    }
    // -------------------

    // ---- rings page
    public function rings()
    {
        return view('Frontend.ring');

    }
    // -------------------

     // ---- rings page
     public function bracelet()
     {
         return view('Frontend.bracelet');

     }
     // -------------------

}
