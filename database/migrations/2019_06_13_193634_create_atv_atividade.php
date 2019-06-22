<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtvAtividade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('ATV_ATIVIDADE', function (Blueprint $table) {
			$table->increments('ATV_ID');			
			$table->integer('ATV_DATA')->nullable();
			$table->string('ATV_DESCRICAO',100)->nullable();
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
        Schema::dropIfExists('ATV_ATIVIDADE');
    }
}
