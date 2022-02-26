<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('medicine_id');
            $table->bigInteger('category_id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->longText('description_en');
            $table->longText('description_ar');
            $table->longText('image');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('medicine_products');
    }
}
