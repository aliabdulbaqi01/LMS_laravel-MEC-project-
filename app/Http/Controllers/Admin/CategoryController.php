<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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
       return view('admin.pages.categories.create');
   }

   /*
    * store the new category in the database
    */
    public function store(Request $request) {

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(370, 246);
            $img->toJpeg(80)->save(base_path('public/upload/categories/' . $name_gen));
            $save_url = 'upload/categories/' . $name_gen;
            Category::create([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-', $request->slug)),
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Category added successfully!',
                'alert-type' => 'success'
            );
        return redirect()->route('categories.index')->with($notification);
    }

   /*
    * return edit form
    */
   public function edit(category $category) {
       return view('admin.pages.categories.edit', compact('category'));
   }

   /*
    * update the current category
    */
    public function update(Request $request, category $category) {
        if($request->file('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(370, 246);
            $img->toJpeg(80)->save(base_path('public/upload/categories/' . $name_gen));
            $save_url = 'upload/categories/' . $name_gen;
            unlink($category->image);
            $category->update([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-', $request->name)),
                'image' => $save_url,
            ]);
            $category->save();

        }else {
            $category->update([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-', $request->name))
            ]);
            $category->save();
        }
        $notification = array(
            'message' => 'Category updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('categories.index')->with($notification);
    }

   /*
    * destroy the category
    */
    public function destroy(category $category) {
        dd($category);
        unlink($category->image);
        $category->delete();
        $notification = array('message' => 'Category has been deleted', 'alert-type' => 'success');
        return back()->with($notification);
    }
}
