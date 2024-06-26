<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('youths', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('education_level',['تعليم ابتدائي','تعليم اعدادي','تعليم ثانوي','تعليم جامعي']);
            $table->string('location');
            $table->string('phone_number');
            $table->string('verification_code',100)->nullable();
            $table->integer('is_verified')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('youths');
    }
};
