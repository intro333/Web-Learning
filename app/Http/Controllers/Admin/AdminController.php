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

    //Шаблон.Выбор лекции для редактирования
    public function showEditLessons()
    {
        $lessons = Lesson::all();
        return view('admin.editLessons', compact('lessons'));
    }

    //Выбрать лекцию для редактирования. метод POST.
//    public function editLessons(Request $request)
//    {
//        return redirect('admin/editLessons/'.$request->input('num'));
//    }

    //Шаблон, где можно отредактировать выбранную лекцию
    public function showEditLesson($num)
    {
        $lesson = Lesson::where('num', $num)->get();
//        dd($lesson[0]['num']);
        return view('admin.editLesson', compact('lesson'));
    }

    //Отредактировать лекцию в базе данных. метод POST
    public function editLesson($num, Request $request)
    {
        $lesson = Lesson::where('num', $num);
        $lesson->update([
            'num'           =>  $request->input('num'),
            'theme'         =>  $request->input('theme'),
            'description'   =>  $request->input('description'),
            'text_html'     =>  $request->input('text_html'),
            'text_css'      =>  $request->input('text_css'),
            'text_jquery'   =>  $request->input('text_jquery'),
            'updated_at'    =>  Carbon::now()
        ]);

        return redirect('/admin/editLessons/'.$num);
    }

}
