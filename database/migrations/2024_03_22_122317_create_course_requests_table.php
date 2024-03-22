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

        Schema::create('course_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('rating')->nullable();
            $table->boolean('is_accepted')->default(false);
            $table->foreignId('youth_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->text('goal');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('course_requests');
    }
};
