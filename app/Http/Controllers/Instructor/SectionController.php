<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseSectionRequest;
use App\Models\Course;
use App\Models\CourseSection;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display all section related to the course.
     */
    public function index(Course $course)
    {
        $sections = CourseSection::where('course_id', $course->id)->latest()->get();

        return view('instructor.pages.course.sections.index', compact('course', 'sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseSectionRequest $request)
    {

        CourseSection::create($request->only('course_id', 'section_title'));
        toastr()->success('Section created Successfully!');
        return redirect()->back();

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
}
