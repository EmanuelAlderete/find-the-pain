<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problemas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('nome')->nullable();
            $table->text('helper')->nullable();
            $table->text('image')->nullable();

            $table->integer('subparte_id')->unsigned()->nullable();
            $table->foreign('subparte_id')->references('id')->on('sub_partes')->onDelete('cascade');


        });


        Schema::create('problema_sintoma', function (Blueprint $table) {
           $table->increments('id');
           $table->timestamps();

           $table->integer('sintoma_id')->unsigned()->nullable();
           $table->foreign('sintoma_id')->references('id')->on('sintomas')->onDelete('cascade');

           $table->integer('problema_id')->unsigned()->nullable();
           $table->foreign('problema_id')->references('id')->on('problemas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problemas');
        Schema::dropIfExists('problema_sintoma');
    }
}
