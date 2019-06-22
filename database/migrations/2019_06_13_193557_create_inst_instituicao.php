<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstInstituicao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       		Schema::create('INST_INSTITUICAO', function (Blueprint $table) {
				$table->increments('INST_ID');			
				$table->string('INST_NOME',100)->nullable();
				$table->string('INST_ENDERECO',100)->nullable();
				$table->string('INST_STATUS',7);
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
        Schema::dropIfExists('INST_INSTITUICAO');
    }
}
