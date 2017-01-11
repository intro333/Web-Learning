<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescriptionForLesson extends Model
{
    protected $table = 'description_for_lessons';

//    public $timestamps = false;

    protected $fillable = [
        'lesson_id',
        'part_id',
        'lesson_description',
        'text_html',
        'text_css',
        'text_jquery',
    ];

//    public function lessons()
//    {
//        return $this->belongsTo('App\Lesson');
//    }


}
