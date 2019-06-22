<?php

use Illuminate\Database\Seeder;

class VOL_VOLUNTARIOTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $FUN_ID = DB::table('FUN_FUNCAO')->select('FUN_ID')->get();
        $INST_ID = DB::table('INST_INSTITUICAO')->select('INST_ID')->get();
        $faker = Faker\Factory::create();
	for($i=1; $i<=98; $i++) {
		DB::table('VOL_VOLUNTARIO')->insert( [
			'VOL_NOME' => $faker->company(),
			'VOL_RG' => rand(),
                        'VOL_CPF' => rand(),
			'VOL_DT_NASCIMENTO' => rand(),
			'VOL_TELEFONE' => rand(),
			'VOL_STATUS'=> $faker->text(100),
			'INST_ID' => $faker->randomElement($INST_ID)->INST_ID,
			'FUN_ID' => $faker->randomElement($FUN_ID)->FUN_ID,
			
			
] );
}
    }
}
