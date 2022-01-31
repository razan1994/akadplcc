<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_specialities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('speciality_id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->longText('alias_name_ar');
            $table->longText('alias_name_en');
            $table->bigInteger('updated_by');
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
        Schema::dropIfExists('sub_specialities');
    }
}
