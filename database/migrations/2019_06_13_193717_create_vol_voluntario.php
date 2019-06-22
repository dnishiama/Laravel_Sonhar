<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolVoluntario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('VOL_VOLUNTARIO', function (Blueprint $table) {
			
			$table->increments('VOL_ID');
			$table->string('VOL_NOME',100);
			$table->integer('VOL_RG')->nullable();
			$table->integer('VOL_CPF')->nullable();
			$table->integer('VOL_DT_NASCIMENTO')->nullable();
			$table->integer('VOL_TELEFONE')->nullable();
			$table->string('VOL_STATUS');
			$table->integer('INST_ID')->unsigned();
			$table->integer('FUN_ID')->unsigned();
			$table->timestamps();

			$table->foreign('INST_ID')
				->references('INST_ID')
				->on('INST_INSTITUICAO');

			$table->foreign('FUN_ID')
				->references('FUN_ID')
				->on('FUN_FUNCAO');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('VOL_VOLUNTARIO');
    }
}
