<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\UserMeta;
use App\Models\UserResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    //Quiz
    public function quiz()
    {
        $user =  Auth::user();
        $test = UserMeta::where('user_id', $user->id)->where('meta_key', 'current_test')->first();
        $questions = Question::where('test', (int)$test->meta_value)->get();
        return view('frontend.course.quiz', compact('questions', 'test'));
    }

    //Result
    public function result()
    {
        $user =  Auth::user();
        $test = UserMeta::where('user_id', $user->id)->where('meta_key', 'current_test')->first();
        $questions = Question::where('test', (int)$test->meta_value)->get();
        return view('frontend.course.result', compact('questions', 'test'));
    }

    //Submit Quiz
    public function submit_quiz(Request $request)
    {
        $user =  Auth::user();
        foreach($request->input() as $key => $val) {
            if($key != '_token'){
                $result = UserResult::updateOrCreate([
                    'user_id' => Auth::id(),
                    'question_id' => (int)$key
                ],[
                    'answered' => $val
                ]);
            }
        }
        $test = UserMeta::where('user_id', $user->id)->where('meta_key', 'current_test');
        if((int)$test->first()->meta_value < 3)
        $test->update([
            'meta_value' => (int)$test->first()->meta_value + 1
        ]);
        return redirect()->to('result');
    }
}
