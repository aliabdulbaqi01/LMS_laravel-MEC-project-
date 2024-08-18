<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /*
     * show all data view
     */
   public function index() {

       $categories = Category::latest()->get();
       return view('admin.pages.categories.index', compact('categories'));
   }

   /*
    * return form
    */
   public function create() {
       dd('form');
       return view('admin.pages.categories.create');
   }

   /*
    * return edit form
    */
   public function edit(category $category) {
       dd($category);
   }

   /*
    * destroy the category
    */
    public function destroy(category $category) {

//        $category->delete();
        $category->save();
        $notification = array('message' => 'Category has been deleted', 'alert-type' => 'success');
        return back()->with($notification);
    }
}
