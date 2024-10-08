<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseGoal;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();
        $courses = Course::where('instructor_id',$id)->orderBy('id','desc')->get();
        return view('instructor.pages.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new courses.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('instructor.pages.course.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (!is_null($request->file('course_image'))){
        $image_path = '/upload/courses/images/';
        $video_path = '/upload/courses/videos/';
        $manager = new ImageManager(new Driver());
        $image_gen = hexdec(uniqid()) . '.' . $request->file('course_image')->getClientOriginalExtension();
        $image= $manager->read($request->file('course_image'));
        $image->resize(370, 246);

        $image->toJpeg(80)->save(public_path($image_path). $image_gen);
        $save_image = $image_path . $image_gen;

        }

        if (!is_null($request->file('video'))){
        $video = $request->file('video');
        $video_name = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension();
        $video->move(public_path($video_path), $video_name);
        $save_video = $video_path . $video_name;

        }
        // saving video
        $course_id = Course::Create([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'instructor_id' => Auth::user()->id,
            'course_title' => $request->course_title,
            'course_name' => $request->course_name,
            'course_name_slug' => strtolower(str_replace(' ', '-', $request->course_name)),
            'description' => $request->description,
            'video' => $save_video ?? null,
            'label' => $request->label,
            'duration' => $request->duration,
            'resources' => $request->resources,
            'certification' => $request->certificate,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'prerequisites' => $request->prerequisites,
            'bestseller' => $request->bestseller,
            'featured' => $request->featured,
            'highest_rated' => $request->highestrated,
            'status' => 1,
            'course_image' => $save_image ?? null,
        ]);

        /// Course Goals Add Form
        $goles = Count($request->course_goals);
        if ($goles != NULL) {
            for ($i=0; $i < $goles; $i++) {
                $gcount = new CourseGoal();

                $gcount->course_id = $course_id;
                $gcount->goal_name = $request->course_goals[$i];
                $gcount->save();
            }
        }
        /// End Course Goals Add Form
        toastr()->success('courses added successfully');
            return redirect()->route('instructor.courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * get sub category (ajax).
     */
    public function GetSubCategory($category_id){
        $subCategories = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subCategories);
    }// End Method
}
