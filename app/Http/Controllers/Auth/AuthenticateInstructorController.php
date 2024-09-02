<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateInstructorController extends Controller
{
    //
    /*
     * Display Login view
     */
    public function create() {
        return view('instructor.login');
    }

    /*
     * handle an incoming authenticated request
     */
    public function store(LoginRequest $request) {

        $request->authenticate();
        if(auth()->user()->role == 'instructor') {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::INSTRUCTOR_DASHBOARD);
        }
        Auth::guard('web')->logout();
        $request->session()->flash('status', 'You are not authorized to access this page.');
        return back();

    }

    /*
     * logout
     */
    public function destroy(Request $request) {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('instructor.login');
    }
}
