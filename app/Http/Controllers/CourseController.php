<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMeta;
use App\Models\Video;
use Carbon\Carbon;
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

    //Schedule
    public function schedule()
    {
        $resultDate = UserMeta::where('user_id', Auth::id())->where('meta_key', 'result_date')->first();
        $status = UserMeta::where('user_id', Auth::id())->where('meta_key', 'interview_status')->first();

        if($status)
        return redirect()->to('interview');
        else
        return view('frontend.course.schedule', compact('resultDate'));
    }

    //Calender
    public function calendar($date)
    {
        $date = new Carbon($date);
        $startOfCalendar = $date->copy()->startOfWeek(Carbon::SUNDAY);
        $endOfCalendar = $date->copy()->addDays(30)->endOfWeek(Carbon::SATURDAY);

        $html = '<div class="calendar">';

        $html .= '<div class="month-year">';
        $html .= '<span class="month">' . $date->format('M') . '-'.$endOfCalendar->format('M').'</span>';
        $html .= '<span class="year">' . $date->format('Y') . '</span>';
        $html .= '</div>';

        $html .= '<div class="days">';

        $dayLabels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        foreach ($dayLabels as $dayLabel)
        {
            $html .= '<span class="day-label">' . $dayLabel . '</span>';
        }

        while($startOfCalendar <= $endOfCalendar)
        {
            $extraClass = $startOfCalendar->format('m') == $date->format('m') && $startOfCalendar->format('j') <= $date->format('j') ? 'dull' : '';
            $extraClass .= $startOfCalendar->format('m') != $date->format('m') && $startOfCalendar->format('j') > $date->copy()->addDays(30)->format('j') ? 'dull' : '';
            $extraClass .= $startOfCalendar->isToday() ? ' today' : '';
            $extraClass .= $startOfCalendar->between($date->copy()->addDay(), $date->copy()->addDays(30)) && in_array($startOfCalendar->format('l'), ['Thursday', 'Sunday']) ? ' active' : '';

            $html .= '<span class="day '.$extraClass.'" data-date="'.$startOfCalendar->toDateString().'" data-js="'.$startOfCalendar->format('j').' '.$startOfCalendar->format('F').'"><span class="content">' . $startOfCalendar->format('j') . '</span></span>';
            $startOfCalendar->addDay();
        }
        $html .= '</div></div>';
        return $html;
    }

    //Book Interview
    public function book_interview(Request $request)
    {
        $interview = UserMeta::updateOrCreate([
            'user_id' => Auth::id(),
            'meta_key' => 'interview_booked'
        ],[
            'meta_value' => $request->interview
        ]);

        $interviewStatus = UserMeta::updateOrCreate([
            'user_id' => Auth::id(),
            'meta_key' => 'interview_status'
        ],[
            'meta_value' => 'pending'
        ]);

        return redirect()->to('interview');
    }

    //Interview
    public function interview()
    {
        $user = Auth::user();
        $interview = UserMeta::where('user_id', $user->id)->where('meta_key', 'interview_booked')->first();
        $status = UserMeta::where('user_id', Auth::id())->where('meta_key', 'interview_status')->first();

        if($interview)
        return view('frontend.interview', compact('interview', 'status'));
        else
        return redirect()->to('course');
    }

    //Accept Interview
    public function approve_interview(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $approved = UserMeta::where('user_id', $request->user_id)->where('meta_key', 'interview_status')->update([
            'meta_value' => 'booked'
        ]);

        return redirect()->to('admin/users/'.$request->user_id);
    }

    //Reject Interview
    public function reject_interview(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $approved = UserMeta::where('user_id', $request->user_id)->where('meta_key', 'interview_status')->update([
            'meta_value' => 'declined'
        ]);

        return redirect()->to('admin/users/'.$request->user_id);
    }

    //Approve as YETI
    public function accept_yeti(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $approved = UserMeta::where('user_id', $request->user_id)->where('meta_key', 'interview_status')->update([
            'meta_value' => 'accepted'
        ]);

        return redirect()->to('admin/users/'.$request->user_id);
    }

    //Reject as YETI
    public function reject_yeti(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $approved = UserMeta::where('user_id', $request->user_id)->where('meta_key', 'interview_status')->update([
            'meta_value' => 'rejected'
        ]);

        return redirect()->to('admin/users/'.$request->user_id);
    }

    //Certificate
    public function certificate()
    {
        $user = Auth::user();
    }
}
