<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreinscriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('preinscriptions', function(Blueprint $table)
		{
			$table->create();
			$table->increments('id');
			$table->string('dni',8);
			$table->string('nombre',30);
			$table->string('apellido',30);
			$table->string('email');
			$table->string('curso');
			$table->string('interes');
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
		//
		Schema::drop('preinscriptions');
	}

}
