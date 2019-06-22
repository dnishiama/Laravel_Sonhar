<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriCrianca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('CRI_CRIANCA', function (Blueprint $table) {
			$table->increments('CRI_ID');			
			$table->string('CRI_NOME',100)->nullable();
			$table->integer('CRI_IDADE')->nullable();
			$table->string('CRI_STATUS',7);
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
        Schema::dropIfExists('CRI_CRIANCA');
    }
}
