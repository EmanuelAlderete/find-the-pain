<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubPartesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_partes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome')->nullable();
            $table->text('helper')->nullable();
            $table->text('image')->nullable();

            $table->integer('parte_id')->unsigned()->nullable();
            $table->foreign('parte_id')->references('id')->on('partes')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('sintoma_sub_parte', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('sintoma_id')->unsigned()->nullable();
            $table->foreign('sintoma_id')->references('id')->on('sintomas')->onDelete('cascade');

            $table->integer('subparte_id')->unsigned()->nullable();
            $table->foreign('subparte_id')->references('id')->on('sub_partes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_partes');
        Schema::dropIfExists('sintoma_sub_parte');
    }
}
