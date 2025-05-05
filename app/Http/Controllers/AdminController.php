<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
       $category = new Category;
       $category -> category_name = $request -> category;
       $category -> save();
       toastr()->timeOut(10000)->closeButton()->addSuccess('Category Added Successfully');
       return redirect() -> back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data -> delete();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Deleted Successfully');
        return redirect() -> back();
    }

    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);
        $data -> category_name = $request -> category;
        $data -> save();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Updated Successfully');
        return redirect('/view_category');
    }

    public function add_product()
    {
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request)
    {
        $product = new Product;
        $product -> title = $request -> title;
        $product -> description = $request -> description;
        $product -> price = $request -> price;
        $product -> quantity = $request -> quantity;
        $product -> category = $request -> category;

        // image upload
        $image = $request->file('image');
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('product', $image_name);
            $product->image = $image_name;
        }

        $product->save();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Added Successfully');
        return redirect() -> back();

    }

}
