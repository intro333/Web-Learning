<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LessonsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {


        return view('index');
    }

    public function startLesson($part, $lesson) {

        return view('part'.$part.'.lesson'.$lesson);
    }
}
