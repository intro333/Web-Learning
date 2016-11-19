<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\DescriptionForLesson;
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
        return view('part.lesson', compact('showLesson', 'allLessons'));
    }

    /*Ajax POST показать описание с помощью кнопки "что-здесь"*/
    public function showDescription(Request $request) {
        $description = DescriptionForLesson::where('part_id', '=', $request->input('part_id'))
                                            ->where('lesson_id', '=', $request->input('lesson_id'))
                                            ->lists($request->input('attr'));
echo $description[0];
    }
}
