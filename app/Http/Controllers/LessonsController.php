<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

use App\Http\Requests;

class LessonsController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index() {

        return view('index');
    }

    public function testLesson() {
        return view('testLesson');
    }

    public function startLesson($part, $lesson) {

        $allLessons = Lesson::all();
        $showLesson = Lesson::where('lesson', $lesson)->where('part', $part)->get();
//        dd(count($allLessons));
        return view('part.lesson', compact('showLesson', 'allLessons'));
    }


}
