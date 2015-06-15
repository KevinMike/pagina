<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreinscripcionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('preinscripciones', function(Blueprint $table)
        {
            //$table->create();
            $table->increments('id');
            $table->string('dni',8);
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->string('telefono',15);
            $table->string('email',20);
            $table->integer('curso');
            $table->string('interes',10);
            $table->timestamps();
        });

        Schema::table('preinscripciones', function($table)
        {
            $table->foreign('curso')->references('id')->on('cursos');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('preinscripciones');
	}

}
