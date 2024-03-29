<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunFuncao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('FUN_FUNCAO', function (Blueprint $table) {
			
			$table->increments('FUN_ID');		
			$table->string('FUN_DESCRICAO',100)->nullable();
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
        Schema::dropIfExists('FUN_FUNCAO');
    }
}
