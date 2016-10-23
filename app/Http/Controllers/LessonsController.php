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

        $showLesson = Lesson::where('num', 2)->get();
//        dd($showLesson[0]['theme']);
        return view('part'.$part.'.lesson'.$lesson, compact('showLesson'));
    }


}
