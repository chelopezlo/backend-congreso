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
            $table->string('rut', 15)->unique();
            $table->string('full_name', 200);
            $table->integer('gender', false, true);
            $table->date('birthday');
            $table->string('occupation');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->text('description');
            $table->string('facebook');
            $table->string('twitter');
            $table->timestamps();
            $table->softDeletes();
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
