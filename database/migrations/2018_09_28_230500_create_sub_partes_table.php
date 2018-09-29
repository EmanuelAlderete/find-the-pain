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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_partes');
    }
}
