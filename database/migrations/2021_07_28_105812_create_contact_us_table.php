<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->longText('facebook_url')->nullable();
            $table->longText('linkedin_url')->nullable();
            $table->longText('instagram_url')->nullable();
            $table->longText('twitter_url')->nullable();
            $table->longText('youtube_url')->nullable();
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
        Schema::dropIfExists('contact_us');
    }
}
