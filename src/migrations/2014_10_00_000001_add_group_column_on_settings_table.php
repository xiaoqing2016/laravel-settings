<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGroupColumnOnSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('app_settings', function (Blueprint $table) {
            //$table->dropUnique('settings_name_unique');
            $table->string('group')->default('default');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_settings', function (Blueprint $table) {
            $table->dropColumn('group');
        });
    }
}
