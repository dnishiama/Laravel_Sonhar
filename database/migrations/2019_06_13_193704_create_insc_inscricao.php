<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscInscricao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       	Schema::create('INSC_INSCRICAO', function (Blueprint $table) 
		{
			$table->increments('INSC_ID');			
			$table->string('INSC_NOME',100)->nullable();
			$table->integer('INSC_RG')->nullable();
			$table->integer('INSC_CPF')->nullable();
			$table->integer('INSC_DT_NASCIMENTO')->nullable();
			$table->integer('INSC_TELEFONE')->nullable();
			$table->integer('INSC_DT_FORMACAO')->nullable();
			$table->integer('INSC_PRESENCA_FORMACAO')->nullable();
			$table->integer('INST_ID')->unsigned();	
			$table->timestamps();
					
			$table->foreign('INST_ID')
				->references('INST_ID')
				->on('INST_INSTITUICAO');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('INSC_INSCRICAO');
    }
}
