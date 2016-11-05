<?php

namespace App\Http\Controllers\Admin;

use App\Lesson;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
//        dd($request->all());
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
        $lesson = Lesson::where('part', $request->input('part'))->where('lesson', $request->input('lesson'))->get();
        $lesson->first()->delete();
        return redirect('/admin/removeLesson');
    }

    //Шаблон.GET - Показать все лекции для редактирования. POST - Выбрать лекцию для редактирования.
    public function showEditLessons()
    {
        $lessons = Lesson::all();
        return view('admin.editLessons', compact('lessons'));
    }

    //Шаблон, где можно отредактировать выбранную лекцию
    public function showEditLesson($part, $lesson)
    {
        $lesson = Lesson::where('part', $part)->where('lesson', $lesson)->get();
        return view('admin.editLesson', compact('lesson'));
    }

    //Отредактировать лекцию в базе данных. метод POST
    public function editLesson($part, $numLesson, Request $request)
    {
        $lesson = Lesson::where('part', $part)->where('lesson', $numLesson);
        $lesson->update([
            'part'          =>  $request->input('part'),
            'lesson'        =>  $request->input('lesson'),
            'theme'         =>  $request->input('theme'),
            'description'   =>  $request->input('description'),
            'text_html'     =>  $request->input('text_html'),
            'text_css'      =>  $request->input('text_css'),
            'text_jquery'   =>  $request->input('text_jquery'),
            'text_result'   =>  $request->input('text_result'),
            'updated_at'    =>  Carbon::now()
        ]);

        return redirect('/admin/editLessons/' . $request->input('part') . '/' . $request->input('lesson'));
    }

}
