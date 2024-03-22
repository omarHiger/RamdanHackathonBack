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

        Schema::create('funding_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('youth_id')->nullable();
            $table->bigInteger('admin_id')->nullable();
            $table->boolean('is_accepted')->default(false);
            $table->text('description');
            $table->decimal('amount');
            $table->string('file');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('funding_requests');
    }
};
