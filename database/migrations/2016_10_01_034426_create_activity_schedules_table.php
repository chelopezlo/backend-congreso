<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitySchedulesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('from');
            $table->dateTime('to');
            $table->integer('activity_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('activity_id')->references('id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity_schedules');
    }
}
