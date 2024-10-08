<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /*
     * Home Page
     */
    public function index() {
        $categories = Category::orderBy('name', 'ASC')->limit(6)->get();
        $courses = Course::where('status', 1)->orderBy('id', 'ASC')->limit(6)->get();


        return view('frontend.index', compact('categories', 'courses'));
    }

    /*
     * privacy policy Page
     */
    public function privacyPolicy() {
        return view('frontend.pages.privacy_policy');
    }

    /*
     * Terms and Condition Page
     */
    public function termsAndConditions() {
        return view('frontend.pages.terms_and_conditions');
    }
}
