<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
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

    //Update Profile
    public function update_profile(Request $request)
    {
        $user =  Auth::user();
        return view('frontend.dashboard.setting', compact('user'));
    }

    //Admin Users List
    public function userList()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('admin.user.list', compact('users'));
    }

    //Admin User Info
    public function userInfo($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.user.single', compact('user'));
    }
}