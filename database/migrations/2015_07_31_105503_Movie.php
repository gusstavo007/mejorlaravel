<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generes',function(Blueprint $table){
            $table -> increments('id');
            $table -> string('genre');
            $table -> timestamps();
        });

        Schema::create('movies',function(Blueprint $table){
            $table -> increments('id');
            $table->integer('genere_id')->unsigned();
            $table->foreign('genere_id')->references('id')->on('generes');
            $table -> string('name');
            $table -> string('cast');
            $table -> string('direction');
            $table -> string('duration');
            $table -> timestamps();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('generes');
       Schema::drop('movies');
    }
}
