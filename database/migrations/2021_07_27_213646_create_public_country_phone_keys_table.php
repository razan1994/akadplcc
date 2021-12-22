<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicCountryPhoneKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_country_phone_keys', function (Blueprint $table) {
            $table->id();
            $table->longText('key')->references('country_key')->on('public_countries');
            $table->longText('name');
            $table->longText('nicename');
            $table->char('iso3')->nullable();
            $table->longText('numcode')->nullable();
            $table->longText('phonecode');
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
        Schema::dropIfExists('public_country_phone_keys');
    }
}
