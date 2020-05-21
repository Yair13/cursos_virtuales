<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAspirantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirantes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Nombres')->nullable();
            $table->string('Apellidos')->nullable();
            $table->string('Email')->nullable();
            $table->string('Telefono')->nullable();
            $table->string('Programa');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aspirantes');
    }
}
