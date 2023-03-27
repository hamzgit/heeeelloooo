<?php

namespace App\Http\Controllers\Backend\Products;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Category;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     // ---- Create Product Category
    public function create()
    {
        $categories = Category::whereNotNull('category_id')->get();
        return view('Backend.Products.add_product', compact('categories'));
    }
    // ------------------------------

    // ---- Store Products
    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price

        );
    if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/uploads"), $fileName);
            $data['image'] = $fileName;
        }
        $create = Products::create($data);
        return redirect()->route('create.product');

    }
    // -------------------------

    // ---- Product Table
    public function table()
    {
        $products = Products::get();
        return view('Backend.Products.product_table', compact('products'));

    }

    // ---- Edit Product
    public function edit($id, Request $request)
    {
        $id = $request->id;
        $product = Products::findOrFail($id);
        $categories = Category::whereNotNull('category_id')->get();
        return view('Backend.Products.update_product', compact('product','categories'));

    }
    // -----------------

    // ---- Update Product
    public function update($id, Request $request)
    {
        $id = $request->id;
        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price

        );
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/uploads"), $fileName);
            $data['image'] = $fileName;
        }
        $create = Products::where('id', $id)->update($data);
        return redirect()->route('create.product.table');

    }
    // -------------------

    // ---- Trash Page
    public function trashPage()
    {
        $products = Products::onlyTrashed()->get();
        return view('Backend.Products.trash_product', compact('products'));

    }
    // -----------------------

    // ---- Trash Product
    public function trash($id)
    {
        $products = Products::find($id);
        if(!is_null($products))
        {
            $products->delete();
            return redirect()->route('create.product.table');

        } else {
            return redirect()->route('create.trash.product');

        }
    }
    // ------------------

    // ---- Restore Product
    public function restore($id)
    {
        $products = Products::withTrashed()->find($id);
        if(!is_null($products))
        {
            $products->restore();
            return redirect()->route('create.product.table');

        } else {

            return redirect()->route('create.trash.product');
        }

    }
    // --------------------

    // ----Force Delete Product
    public function delete($id)
    {
        $products = Products::withTrashed()->find($id);
        if(!is_null($products)) {

            $products->forcedelete();
            return redirect()->route('create.product.table');

        } else {

            return redirect()->route('create.trash.product');
        }

    }
    // ------------------------

    // ---- Add Extra Description
    public function details(Request $request)
    {
        $id = $request->id;
        $product = Products::where('id', $id)->with('ProductDetail')->first();
        return view ('Backend.Products.product_desc', compact('id', 'product'));
    }
    // --------------------------

    // ---- update Extra Description
    public function storeDetails(Request $request)
    {
        $id = $request->id;
        $data = array(
            'title' => $request->title,
            'product_id' => $id,
            'total_items' => $request->total_items,
            'description' => $request->description

        );

        $details = ProductDetail::updateOrCreate(
            ['product_id' => $id],
            $data

        );

        return redirect()->route('create.product.table');


    }
    // -----------------------------

}
