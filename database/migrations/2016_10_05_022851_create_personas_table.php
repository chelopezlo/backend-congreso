<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut')->unique();
            $table->string('full_name');
            $table->boolean('gender');
            $table->date('birthday');
            $table->string('occupation');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->text('description');
            $table->string('facebook');
            $table->string('twitter');
            $table->integer('users_id')->unsigned();
            $table->boolean('is_leader');
            $table->integer('iglesias_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('iglesias_id')->references('id')->on('iglesias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personas');
    }
}
