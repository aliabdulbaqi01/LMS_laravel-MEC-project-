<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the instructor's profile form.
     */
    public function edit(Request $request): View
    {
        return view('instructor.pages.profile.edit', [
            'user' => $request->user(),
        ]);
    }
}
