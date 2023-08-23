<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Get Meta Value
    public function get_meta($id, $meta_key) {
        $meta = UserMeta::where('user_id', $id)->where('meta_key', $meta_key)->first();
        if($meta)
        return $meta->meta_value;
    }

    //Profile
    public function profile()
    {
        $user =  Auth::user();
        return view('frontend.dashboard.profile', compact('user'));
    }

    //Dashboard
    public function dashboard()
    {
        $user =  Auth::user();
        return view('frontend.dashboard.dashboard', compact('user'));
    }

    //Setting
    public function setting()
    {
        $user =  Auth::user();
        return view('frontend.dashboard.setting', compact('user'));
    }

    public function updateUserMeta($id, $meta_key, $meta_value)
    {
        $updateMeta = UserMeta::where('user_id', $id)->where('meta_key', $meta_key)->update([
            'meta_value' => $meta_value
        ]);
        return $updateMeta;
    }

    //Update Profile
    public function update_profile(Request $request)
    {
        $user =  Auth::user();
        $credentials = $request->validate([
            'name' => ['required'],
            'pin' => ['required', 'min:6', 'max:6'],
            'city' => ['required'],
            'state' => ['required'],
            'institute' => ['required']
        ]);

        $updateUser = User::where('id', $user->id)->update([
            'bio' => $request->bio,
            'name' => $request->name
        ]);

        $this->updateUserMeta($user->id, 'pin', $request->pin);
        $this->updateUserMeta($user->id, 'city', $request->city);
        $this->updateUserMeta($user->id, 'state', $request->state);
        $this->updateUserMeta($user->id, 'institute', $request->institute);

        return redirect()->to('profile');
    }

    //Update Password
    public function update_password(Request $request)
    {
        $validation = $request->validate([
            'currentpassword' => 'current_password',
            'newpassword' => ['required', 'min:8'],
            'retypenewpassword' => ['required', 'same:newpassword']
        ]);
        dd($validation);
        $user = User::where('id', Auth::id())->update([
            'password' => Hash::make($request->retypenewpassword)
        ]);

        return redirect()->to('logout');
    }

    //Update Social
    public function update_social(Request $request)
    {
        $facebook = UserMeta::updateOrCreate([
            'user_id' => Auth::id(),
            'meta_key' => 'facebook'
        ],[
            'meta_value' => $request->facebook
        ]);

        $twitter = UserMeta::updateOrCreate([
            'user_id' => Auth::id(),
            'meta_key' => 'twitter'
        ],[
            'meta_value' => $request->twitter
        ]);

        $linkedin = UserMeta::updateOrCreate([
            'user_id' => Auth::id(),
            'meta_key' => 'linkedin'
        ],[
            'meta_value' => $request->linkedin
        ]);

        $instagram = UserMeta::updateOrCreate([
            'user_id' => Auth::id(),
            'meta_key' => 'instagram'
        ],[
            'meta_value' => $request->instagram
        ]);

        return redirect()->to('profile');
    }

    //Admin Users List
    public function userList()
    {
        $users = User::where('role', 'user')->orderBy('created_at', 'DESC')->get();
        return view('admin.user.list', compact('users'));
    }

    //Admin User Info
    public function userInfo($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.user.single-user', compact('user'));
    }
}