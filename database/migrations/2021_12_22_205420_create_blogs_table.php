<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->bigInteger('user_id');
            $table->longText('title_ar');
            $table->longText('title_en');
            $table->longText('desc_ar');
            $table->longText('desc_en');
            $table->longText('alias_name_ar');
            $table->longText('alias_name_en');
            $table->longText('image');
            $table->tinyInteger('status')->comment = '1 => Active  || 2 => Not Active ';
            $table->softDeletes();
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
        Schema::dropIfExists('blogs');
    }
}
