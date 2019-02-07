<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePlatformsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('platforms_info', function (Blueprint $table) {
            $table->integer('platforms_id')->unsigned()->default(1);
            $table->foreign('platforms_id')->references('id')->on('platforms');
            $table->integer('loc_id')->unsigned()->default(1);
            $table->foreign('loc_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('platforms_info', function (Blueprint $table) {
            //
        });
    }
}
