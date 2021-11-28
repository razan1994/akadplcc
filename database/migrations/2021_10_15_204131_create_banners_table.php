<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();

            $table->longText('banner_1_url')->nullable();
            $table->longText('image_1')->nullable();
            $table->tinyInteger('status_1')->nullable()->comment = '1 => Active || 2 => Inactive';

            $table->longText('banner_2_url')->nullable();
            $table->longText('image_2')->nullable();
            $table->tinyInteger('status_2')->nullable()->comment = '1 => Active || 2 => Inactive';
            
            $table->longText('banner_3_url')->nullable();
            $table->longText('image_3')->nullable();
            $table->tinyInteger('status_3')->nullable()->comment = '1 => Active || 2 => Inactive';
            
            $table->longText('banner_4_url')->nullable();
            $table->longText('image_4')->nullable();
            $table->tinyInteger('status_4')->nullable()->comment = '1 => Active || 2 => Inactive';
            
            $table->longText('banner_5_url')->nullable();
            $table->longText('image_5')->nullable();
            $table->tinyInteger('status_5')->nullable()->comment = '1 => Active || 2 => Inactive';
            
            $table->longText('banner_6_url')->nullable();
            $table->longText('image_6')->nullable();
            $table->tinyInteger('status_6')->nullable()->comment = '1 => Active || 2 => Inactive';
            
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
        Schema::dropIfExists('banners');
    }
}
