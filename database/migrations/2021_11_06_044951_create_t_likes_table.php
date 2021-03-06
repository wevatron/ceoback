<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTLikesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_likes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('t_evento_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->integer('dislike');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('t_evento_id')->references('id')->on('t_eventos');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_likes');
    }
}
