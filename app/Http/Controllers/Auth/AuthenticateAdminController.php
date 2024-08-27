<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticateAdminController extends Controller
{

    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.login');
    }


    public function store(LoginRequest $request) {

        $request->authenticate();
        if(auth()->user()->role == 'admin') {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
        }
        Auth::guard('web')->logout();
        $request->session()->flash('status', 'You are not authorized to access this page.');
       return back();

    }
}
