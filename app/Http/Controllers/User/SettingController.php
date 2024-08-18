<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class SettingController extends Controller
{
    public function index(){
        $user = User::find(Auth::id());

        return view('user.pages.setting', compact('user'));
    }

    // update password
    public function updatePassword(UpdatePasswordRequest $request, User $user) {


        if(!Hash::Check($request->old_password, $user->password)) {
            $notification = array(
                'message' => 'The old password is incorrect.',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'The new password is successfully changed.',
            'alert-type' => 'success'
        );
        $user->update(['password' => Hash::make($request->new_password)]);
        $user->save();
        return back()->with($notification);
    }

    //update profile
    public function updateProfile(UpdateProfileRequest $request, User $user) {
        $user->update($request->only('name', 'email','username','phone', 'address'));

        if($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images'),$user->photo);
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images/'), $filename);
            $user->update(['photo' => $filename]);
        }
        $user->save();


        // send notification
        $notification = array(
            'message' => 'The profile updated successfully.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
