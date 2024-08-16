<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /*
     * Home Page
     */
    public function index() {
        return view('frontend.index');
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
