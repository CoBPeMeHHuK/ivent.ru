<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeEventReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events_reviews', function (Blueprint $table) {
            $table->integer('event_id')->unsigned()->default(1);
            $table->foreign('event_id')->references('id')->on('type_event');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events_reviews', function (Blueprint $table) {
            //
        });
    }
}
