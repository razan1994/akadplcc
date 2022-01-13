<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            // Standard Fields :
            // ================================================================
            $table->id();
            $table->longText('name_ar');
            $table->longText('name_en');
            $table->longText('alias_name_ar');
            $table->longText('alias_name_en');
            $table->longText('username')->unique();
            $table->longText('email')->unique();
            $table->longText('phone')->nullable();
            $table->longText('password')->nullable();
            $table->longText('profile_photo_path')->nullable();
            $table->tinyInteger('user_status')->default(1)->comment = '1 => Pendding || 2 => Active || 3 => Inactive';
            // Other Fields :
            // ================================================================
            $table->longText('player_id')->nullable();
            $table->longText('address_ar')->nullable();
            $table->longText('address_en')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            // Relations:
            // ================================================================
            $table->bigInteger('speciality_id')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('region_id')->nullable();
            $table->bigInteger('created_by')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
