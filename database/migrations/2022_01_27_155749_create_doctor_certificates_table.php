<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_certificates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('doctor_id');
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('institution_name_ar');
            $table->string('institution_name_en');
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
        Schema::dropIfExists('doctor_certificates');
    }
}
