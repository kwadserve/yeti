<?php

namespace App\Http\Controllers;

use App\Models\UserMeta;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    //Course
    public function course()
    {
        $user =  Auth::user();
        $videoId = UserMeta::where('user_id', $user->id)->where('meta_key', 'last_video')->first();
        $videoTime = UserMeta::where('user_id', $user->id)->where('meta_key', 'last_video_time')->first();
        $test = UserMeta::where('user_id', $user->id)->where('meta_key', 'current_test')->first();
        $video = Video::where('id', (int)$videoId->meta_value)->first();
        $nextVideo = Video::where('test', (int)$test->meta_value)->where('serial', $video->serial + 1)->first();
        if((int)$videoTime->meta_value === $video->duration){
            
            if($nextVideo){
                $video = $nextVideo;
                $nextVideoTime = UserMeta::where('user_id', $user->id)->where('meta_key', 'last_video_time')->update(['meta_value' => 0]);
                $videoTime = UserMeta::where('user_id', $user->id)->where('meta_key', 'last_video_time')->first();
                $lastVideo = UserMeta::where('user_id', $user->id)->where('meta_key', 'last_video')->update(['meta_value' => $video->id]);
                return view('frontend.course.video', compact('videoTime', 'video', 'test'));
            } else {
                return redirect()->to('quiz');
            }            
        } else {
            return view('frontend.course.video', compact('videoTime', 'video', 'test'));
        }        
    }

    //Update Last Video Time
    public function update_duration(Request $request)
    {
        $videoTime = UserMeta::where('user_id', Auth::id())->where('meta_key', 'last_video_time');
        $videoTime->update(['meta_value' => $request->time]);
    }

    //Update Last Video
    public function next_video()
    {
        $videoId = UserMeta::where('user_id', Auth::id())->where('meta_key', 'last_video');
        if((int)$videoId->first()->meta_value <= 10)
        $videoId->update(['meta_value' => (int)$videoId->first()->meta_value + 1]);
        $videoTime = UserMeta::where('user_id', Auth::id())->where('meta_key', 'last_video_time');
        $videoTime->update(['meta_value' => 0]);
    }
}
