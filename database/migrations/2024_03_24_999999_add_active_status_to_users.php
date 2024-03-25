<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveStatusToUsers extends Migration
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
            if (!Schema::hasColumn('youths', 'active_status')) {
                $table->boolean('active_status')->default(0);
            }

        });
        Schema::table('mentors', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('mentors', 'active_status')) {
                $table->boolean('active_status')->default(0);
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
            $table->dropColumn('active_status');
        });
        Schema::table('mentors', function (Blueprint $table) {
            $table->dropColumn('active_status');
        });
    }
}
