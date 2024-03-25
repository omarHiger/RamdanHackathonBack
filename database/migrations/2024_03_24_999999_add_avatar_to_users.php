<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarToUsers extends Migration
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
            if (!Schema::hasColumn('youths', 'avatar')) {
                $table->string('avatar')->default(config('chatify.user_avatar.default'));
            }
        });

        Schema::table('mentors', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('mentors', 'avatar')) {
                $table->string('avatar')->default(config('chatify.user_avatar.default'));
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
            $table->dropColumn('avatar');
        });

        Schema::table('mentors', function (Blueprint $table) {
            $table->dropColumn('avatar');
        });
    }
}
