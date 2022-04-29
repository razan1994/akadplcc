<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id');
            $table->string('company_name')->nullable();
            $table->string('job_title')->nullable();
            $table->longText('experience')->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->tinyInteger('untill_now')->nullable()->comment('1 => Active | 2 => Not Active');
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
        Schema::dropIfExists('student_experiences');
    }
}
