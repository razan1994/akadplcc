<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_wallet_orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->nullable()->unsigned();
            $table->bigInteger('payment_wallet_id')->nullable()->unsigned();
            $table->string('wallet_name')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('type')->nullable();
            $table->float('amount')->default(0);
            $table->enum('status', ['pending', 'paid', 'rejected'])->default('pending');
            $table->string('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_wallet_orders');
    }
};
