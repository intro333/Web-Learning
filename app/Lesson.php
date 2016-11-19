<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    protected $table = 'lessons';

    protected $fillable = [
        'id',
        'part',
        'lesson',
        'theme',
        'description',
        'text_html',
        'text_css',
        'text_jquery',
        'text_result',
    ];

//    public function descriptionForLessons()
//    {
//        return $this->hasMany('App\DescriptionForLesson');
//    }
}
