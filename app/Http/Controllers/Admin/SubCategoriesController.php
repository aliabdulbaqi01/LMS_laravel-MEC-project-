<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    /*
     * show all data view
     */
    public function index() {

        $subCategories = SubCategory::latest()->get();
        return view('admin.pages.subcategories.index', compact('subCategories'));
    }

    /*
     * show
     */
    public function show(SubCategory $subCategory) {
        dd($subCategory);
    }

    /*
     * create
     */
    public function create() {
        $categories = Category::get();
        return view('admin.pages.subcategories.create', compact('categories'));
    }

    /*
     * store
     */
    public function store(Request $request) {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
        ]);
        SubCategory::Create([
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'slug' => strtolower(str_replace(' ', '-', $request->get('name'))),
        ]);
        $notification = array(
            'message' => 'Sub Category added successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('subcategories.index')->with($notification);
    }

    /*
     * edit
     */
    public function edit(SubCategory $subCategory) {
        dd('edit');



    }

    /*
     * destroy
     */
    public  function destroy(SubCategory $subCategory) {
        dd('destroy');
    }

}
