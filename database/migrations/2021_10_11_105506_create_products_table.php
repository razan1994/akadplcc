<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('super_category_id');
            $table->bigInteger('main_category_id');
            $table->bigInteger('sub_category_id');
            $table->string('name_ar')->unique();
            $table->string('name_en')->unique();
            $table->longText('main_description_ar')->nullable();
            $table->longText('main_description_en')->nullable();
            $table->longText('sub_description_ar')->nullable();
            $table->longText('sub_description_en')->nullable();
            $table->decimal('weight', 10, 2)->nullable();
            $table->decimal('sale_price', 10, 3);
            $table->tinyInteger('on_sale_price_status')->comment = '1 => Active || 2 => Inactive';
            $table->decimal('on_sale_price', 10, 3);
            $table->integer('quantity_available')->default(0);
            $table->integer('quantity_limit')->default(0);
            $table->longText('image')->nullable();
            $table->tinyInteger('status')->comment = '1 => Active || 2 => Inactive';
            $table->bigInteger('updated_by');
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
        Schema::dropIfExists('products');
    }
}
