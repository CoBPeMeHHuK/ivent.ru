<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeReferencesPlatformActionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('references_platform_action', function (Blueprint $table) {
            $table->integer('platforms_id')->unsigned()->default(1);
            $table->foreign('platforms_id')->references('id')->on('platforms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('references_platform_action', function (Blueprint $table) {
            //
        });
    }
}
