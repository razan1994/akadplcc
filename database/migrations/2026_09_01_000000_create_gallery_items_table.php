<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gallery_items', function (Blueprint $table): void {
            $table->id();
            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->enum('type', ['image', 'video']);
            $table->string('file_path');
            $table->string('poster_path')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->unsignedTinyInteger('status')->default(2)->comment('1 = inactive, 2 = active');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['status', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gallery_items');
    }
};
