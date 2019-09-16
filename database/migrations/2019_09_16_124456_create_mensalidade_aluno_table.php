<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMensalidadeAlunoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mensalidade_aluno', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_aluno')->index('id_aluno');
			$table->dateTime('data_pagamento');
			$table->integer('id_entrada_financeiro')->nullable()->index('id_entrada_financeiro');
			$table->string('recebido', 1)->default('N');
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
		Schema::drop('mensalidade_aluno');
	}

}
