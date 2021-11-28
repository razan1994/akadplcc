<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThreeNewBannerToBanners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->longText('banner_7_url')->nullable();
            $table->longText('image_7')->nullable();
            $table->tinyInteger('status_7')->nullable()->comment = '1 => Active || 2 => Inactive';

            $table->longText('banner_8_url')->nullable();
            $table->longText('image_8')->nullable();
            $table->tinyInteger('status_8')->nullable()->comment = '1 => Active || 2 => Inactive';

            $table->longText('banner_9_url')->nullable();
            $table->longText('image_9')->nullable();
            $table->tinyInteger('status_9')->nullable()->comment = '1 => Active || 2 => Inactive';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            //
        });
    }
}
