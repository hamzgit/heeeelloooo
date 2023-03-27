<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // create
    public function viewCategory()
    {
        $categories = Category::whereNull('category_id')->get();
        return view ('Backend.Product_Category.add_category',compact('categories'));
    }

    //store
    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
        );
        $create = Category::create($data);
        return redirect('/category/register');
    }

    //Category Table
    public function create() // viewtable
    {
        $categories = Category::where('status',"1")->get();
        return view('Backend.Product_Category.category_table', compact('categories'));

    }

    // Edit Category.
    public function edit(Request $request, Category $category)
    {
        $id = $request->id;
        $categories = Category::whereNull('category_id')->get();
        $category = Category::find($id);
        return view('Backend.Product_Category.edit_category', compact('categories','category'));

    }

    //Update Category.
    public function update(Request $request, Category $category)
    {
        $id = $request->id;
        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id
        );

        $category = Category::find($id);
        $category->update($data);
        return redirect()->route('create.category.table');

    }

    //Trash Category
    public function trash($id)
    {
        $category = Category::find($id);
        if(!is_null($category))
        {
            $category->delete();
            return redirect()->route('create.category.table');

        } else {

         return redirect()->route('create.trash.page');
        }
    }

        //---Create Trash Page/Table
        public function trashPage()
        {

        $categories = Category::onlyTrashed()->get();
        $data = compact('categories');
        return view('Backend.Product_category.trash_restore')->with($data);

        }

        //----Category Restore
        public function restore($id)
        {
        $categories = Category::withTrashed()->find($id);
        if(!is_null($categories))
        {
            $categories->restore();
            return redirect()->route('create.trash.page');

        } else {
            return redirect()->route('create.category.table');
        }

        }

        //----Category Force Delete
        public function forceDelete($id)
        {
            $categories = Category::withTrashed()->find($id);
            if(!is_null($categories))
            {
                $categories->forcedelete();
                return redirect()->route('create.trash.page');

            } else {
                return redirect('/category/trash');
            }

        }

}
