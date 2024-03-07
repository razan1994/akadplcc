<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('password')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->tinyInteger('user_status')->comment = '1 => Pendding || 2 => Active || 3 => Inactive';
            $table->tinyInteger('payment_status')->default(3)->comment = '1 => Pendding || 2 => Active || 3 => Inactive';

            $table->longText('device_id')->nullable();
            $table->tinyInteger('provider_status')->nullable()->comment("1 => facebook,Gmail || 2 => website Register");
            $table->tinyInteger('update_status')->nullable()->comment("1 => updated || 2 => not_updated");
            $table->longText('provider')->nullable();
            $table->longText('provider_id')->nullable();
            $table->longText('image_url')->nullable();
            $table->text('own_code')->nullable();
            $table->text('referral_code')->nullable();
            $table->integer('points')->default(0);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamp('name_updated_at')->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->string('session_id')->nullable();
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
        Schema::dropIfExists('students');
    }
}
