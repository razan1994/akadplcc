<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_sections', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_id');
            $table->longText('title_ar');
            $table->longText('title_en')->nullable();
            $table->longText('video')->nullable();
            $table->longText('section_image')->nullable();
            $table->longText('text_ar')->nullable();
            $table->longText('text_en')->nullable();
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
        Schema::dropIfExists('course_sections');
    }
}
