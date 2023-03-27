<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Products;
use Auth;
use Illuminate\Http\Request;


class CartController extends Controller
{

    // ---- Product Single Cart
    public function cart(Request $request)
    {
        $id = $request->id;
        $product = Products::where('id', $id)->with('ProductDetail')->first();
        $category_id = $product->category_id;
        $related_products = Products::where('category_id', $category_id)->get();
        return view('Frontend.checkout.cart', compact('product', 'related_products'));

    }
    // ---------------------

    // ----------- Product Single Cart Store
    public function cartStore(Request $request) {

        $data = array (
            'product_id' => $request->product_id,
            'qty' => $request->qty,
            'user_id' => Auth::user()->id,
        );
        Cart::create($data);
        return redirect()->route('product.add.to.cart');

    }

    // -----------------------------------------


        // ---- Shopping Cart/Add to cart page
        public function addtoCart() {
            $carts = [];
            if ( Auth::user() ) {

                $user_id = Auth::user()->id;
                $carts = cart::where('user_id', $user_id)->get();
            }
            return view('Frontend.checkout.shopping_cart', compact('carts'));
        }
        //------------------------------------

        // ----  add.to.cart delete
        public function destroy($id){

            $cart = cart::find($id);
            if(!is_null($cart))
            {
                $cart->delete();
                return redirect()->back();
            }
        }
        //-------------------------


        // checking ///////////







}
