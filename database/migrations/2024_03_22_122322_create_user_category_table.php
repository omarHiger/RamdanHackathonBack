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
        Schema::disableForeignKeyConstraints();

        Schema::create('user_category', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('user_type')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->enum('level',['مبتدئ','متوسط','متقدم'])->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('user_category');
    }
};
