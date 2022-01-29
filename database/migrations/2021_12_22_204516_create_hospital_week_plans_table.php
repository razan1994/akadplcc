<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalWeekPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_week_plans', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->bigInteger('hospital_id');
            $table->longText('active_days')->nullable();
            $table->time('saterday_from')->nullable();
            $table->time('saterday_to')->nullable();
            $table->integer('every_saterday')->nullable();
            $table->time('sunday_from')->nullable();
            $table->time('sunday_to')->nullable();
            $table->integer('every_sunday')->nullable();
            $table->time('monday_from')->nullable();
            $table->time('monday_to')->nullable();
            $table->integer('every_monday')->nullable();
            $table->time('tuseday_from')->nullable();
            $table->time('tuseday_to')->nullable();
            $table->integer('every_tuseday')->nullable();
            $table->time('wednsday_from')->nullable();
            $table->time('wednsday_to')->nullable();
            $table->integer('every_wednsday')->nullable();
            $table->time('thursday_from')->nullable();
            $table->time('thursday_to')->nullable();
            $table->integer('every_thursday')->nullable();
            $table->time('friday_from')->nullable();
            $table->time('friday_to')->nullable();
            $table->integer('every_friday')->nullable();
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
        Schema::dropIfExists('hospital_week_plans');
    }
}
