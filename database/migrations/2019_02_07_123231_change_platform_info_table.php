<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePlatformInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('platform_info', function (Blueprint $table) {
            $table->integer('platforms_id')->unsigned()->default(1);
            $table->foreign('platforms_id')->references('id')->on('platforms');
            $table->integer('loc_id')->unsigned()->default(1);
            $table->foreign('loc_id')->references('id')->on('locations');
            $table->integer('room_id')->unsigned()->default(1);
            $table->foreign('room_id')->references('id')->on('platform_rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('platform_info', function (Blueprint $table) {
            //
        });
    }
}
