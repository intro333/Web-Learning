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

    //Главная панель
    public function index()
    {
        return view('admin.panel');
    }

    //Шаблон для добавления лекции
    public function showAddLesson()
    {
        return view('admin.addLesson');
    }

    //Добавляем лекцию в базу lessons методом POST
    public function addLesson(Request $request)
    {
        Lesson::create($request->all());
        return redirect('/admin/addLesson');
    }

    //Шаблон для удаления лекций
    public function showRemoveLesson()
    {
        $lessons = Lesson::all();
        return view('admin.removeLesson', compact('lessons'));
    }

    //Удаляем лекцию из базы lessons методом POST
    public function removeLesson(Request $request)
    {
        $lesson = Lesson::where('num', $request->input('num'))->get();
        $lesson->first()->delete();
        return redirect('/admin/removeLesson');
    }

    //Шаблон для редактирования лекций
    public function showEditLessons()
    {
        $lessons = Lesson::all();
        return view('admin.editLessons', compact('lessons'));
    }

    //Редактируем лекцию в базе данных
    public function editLesson(Request $request)
    {
        dd($request->all());
    }

}
