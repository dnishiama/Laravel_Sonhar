<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHisHistorico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('HIS_HISTORICO', function (Blueprint $table) {
			$table->integer('VOL_ID')->unsigned();
			$table->integer('CRI_ID')->unsigned();
			$table->integer('ATV_ID')->unsigned();
			$table->timestamps();
			
			$table->foreign('VOL_ID')
			->references('VOL_ID')
			->on('VOL_VOLUNTARIO');
			
			$table->foreign('CRI_ID')
				->references('CRI_ID')
				->on('CRI_CRIANCA');
			
			$table->foreign('ATV_ID')
				->references('ATV_ID')
				->on('ATV_ATIVIDADE');			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HIS_HISTORICO');
    }
}
