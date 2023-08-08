<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use App\Mail\SuccessfullyRegistered;

class AuthController extends Controller
{
    //LogIn
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->remember_me)) {
            $request->session()->regenerate();

            return redirect()->to('/course');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ])->onlyInput('email');
    }

    //Register
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        auth()->login($user);

        event(new Registered($user));

        if(Auth::check()){
            $user_meta = UserMeta::create([
                'user_id' => Auth::id(),
                'meta_key' => 'pin',
                'meta_value' => $request->pin
            ]);

            $user_meta = UserMeta::create([
                'user_id' => Auth::id(),
                'meta_key' => 'state',
                'meta_value' => $request->state
            ]);

            $user_meta = UserMeta::create([
                'user_id' => Auth::id(),
                'meta_key' => 'city',
                'meta_value' => $request->city
            ]);

            $user_meta = UserMeta::create([
                'user_id' => Auth::id(),
                'meta_key' => 'institute',
                'meta_value' => $request->institute
            ]);

            $user_meta = UserMeta::create([
                'user_id' => Auth::id(),
                'meta_key' => 'last_video',
                'meta_value' => 1
            ]);

            $user_meta = UserMeta::create([
                'user_id' => Auth::id(),
                'meta_key' => 'last_video_time',
                'meta_value' => 0
            ]);

            $user_meta = UserMeta::create([
                'user_id' => Auth::id(),
                'meta_key' => 'current_test',
                'meta_value' => 1
            ]);
        }

        return redirect()->to('/course');
    }

    //Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/login')
            ->withSuccess('You have logged out successfully!');;
    }
}
