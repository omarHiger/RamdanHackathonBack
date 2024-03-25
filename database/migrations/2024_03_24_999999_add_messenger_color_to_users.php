<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMessengerColorToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('youths', function (Blueprint $table) {
            if (!Schema::hasColumn('youths', 'messenger_color')) {
                $table->string('messenger_color')->nullable();
            }
        });

        Schema::table('mentors', function (Blueprint $table) {
            if (!Schema::hasColumn('mentors', 'messenger_color')) {
                $table->string('messenger_color')->nullable();
            }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('youths', function (Blueprint $table) {
            $table->dropColumn('messenger_color');
        });

        Schema::table('mentors', function (Blueprint $table) {
            $table->dropColumn('messenger_color');
        });
    }
}
