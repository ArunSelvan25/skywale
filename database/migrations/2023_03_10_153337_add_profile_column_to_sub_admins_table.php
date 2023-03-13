<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileColumnToSubAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_admins', function (Blueprint $table) {
            if (!Schema::hasColumn('sub_admins', 'profile')) {
                $table->string('profile',50)->after('password')->nullable();
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
        Schema::table('sub_admins', function (Blueprint $table) {
            if (Schema::hasColumn('sub_admins', 'profile')) {
                $table->dropColumn('profile');
            }
        });
    }
}
