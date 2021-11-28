<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_sales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('user_type');
            $table->integer('product_count');
            $table->decimal('discount', 10, 3)->nullable();
            $table->bigInteger('promo_code_id')->nullable();
            $table->decimal('sub_total', 10, 3);
            $table->decimal('total', 10, 3);
            $table->tinyInteger('status')->comment = '1 => Pendding || 2 => Accepted || 3 => Rejected';
            $table->tinyInteger('payment_status')->nullable()->comment = '1 => Pennding || 2 => Accepted || 3 => Rejected';
            $table->tinyInteger('delivery_status')->nullable()->comment = '1 => Pendding || 2 => In Progress || 3 => Received';
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
        Schema::dropIfExists('cart_sales');
    }
}
