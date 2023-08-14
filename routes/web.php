<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//static Course
Route::get('/course-static', function () {
    return view('frontend.staticcourse');
});

Route::get('/course-sidebar', function () {
    return view('frontend.course_sidebar');
});

Route::get('/course-main-content', function () {
    return view('frontend.course_main_content');
});


//Homepage
Route::get('/', function () {
    return view('frontend.homepage');
});

//Authentication
Route::get('/login', function () {
    return view('frontend.login');
})->name('login');

Route::get('/register', function () {
    return view('frontend.register');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'authenticate');
});

Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/profile', 'profile');
        Route::get('/settings', 'setting');
        Route::get('/dashboard', 'dashboard');
        Route::post('/update-profile', 'update_profile');
        Route::post('/update-password', 'update_password');
        Route::post('/update-social', 'update_social');
    });
    Route::controller(CourseController::class)->group(function () {
        Route::get('/course', 'course');
        Route::post('/update_duration', 'update_duration');
        Route::post('/next_video', 'next_video');
    });
    Route::controller(QuizController::class)->group(function () {
        Route::get('/quiz', 'quiz');
        Route::get('/result', 'result');
        Route::post('/submit_quiz', 'submit_quiz');
    });
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', function(){
        return view('admin.dashboard');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'userList');
        Route::get('/users/{id}', 'userInfo');
        Route::post('/users/{id}', 'userUpdate');
        Route::get('/users/{id}/edit', 'userEdit');
    });
});

//404 
Route::fallback(function () {
    return view('404');
});