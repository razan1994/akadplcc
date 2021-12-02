<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdSzeClrRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod_sze_clr_relations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('main_size_id');
            $table->bigInteger('main_color_id');
            $table->bigInteger('product_id');
            $table->integer('quantity');
            $table->decimal('update_price',10,3);
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
        Schema::dropIfExists('prod_sze_clr_relations');
    }
}
