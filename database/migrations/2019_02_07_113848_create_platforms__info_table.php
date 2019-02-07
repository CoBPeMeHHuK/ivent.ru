<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatformsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platforms_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('price')->unsigned();
            $table->string('name');
            $table->integer('amount')->unsigned();
            $table->integer('age')->unsigned();
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platforms_info');
    }
}
