<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //Profile
    public function profile()
    {
        $user =  Auth::user();
        return view('frontend.dashboard.profile');
    }
}
