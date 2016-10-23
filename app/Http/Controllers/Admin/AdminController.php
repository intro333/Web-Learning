<?php

namespace App\Http\Controllers\Admin;

use App\Lesson;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.panel');
    }

    public function showAddLesson()
    {
        return view('admin.addLesson');
    }

    public function addLesson(Request $request)
    {
//        dd($request->all());
        Lesson::create($request->all());
    }
}
