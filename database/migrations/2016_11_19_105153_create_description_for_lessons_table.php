<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescriptionForLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('description_for_lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('part_id');
            $table->integer('lesson_id');
            $table->text('lesson_description');
            $table->text('text_html');
            $table->text('text_css');
            $table->text('text_jquery');

//            $table->foreign('part_id')->references('part')->on('lessons')->onDelete('cascade');
//            $table->foreign('lesson_id')->references('lesson')->on('lessons')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('description_for_lessons');
    }
}
