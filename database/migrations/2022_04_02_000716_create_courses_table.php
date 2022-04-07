<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->longText('title_ar');
            $table->longText('title_en')->nullable();
            $table->longText('desc_ar');
            $table->longText('desc_en')->nullable();
            $table->longText('teacher_ar');
            $table->longText('teacher_en')->nullable();
            $table->integer('section_count');
            $table->integer('section_time');
            $table->date('course_date');
            $table->tinyInteger('status')->comment('2 => Avtive || 1 => Stopped');
            $table->longText('main_image')->nullable();
            $table->longText('main_video')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
