<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDarkModeToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('youths', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('youths', 'dark_mode')) {
                $table->boolean('dark_mode')->default(0);
            }
        });

        Schema::table('mentors', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('mentors', 'dark_mode')) {
                $table->boolean('dark_mode')->default(0);
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
            $table->dropColumn('dark_mode');
        });

        Schema::table('mentors', function (Blueprint $table) {
            $table->dropColumn('dark_mode');
        });
    }
}
