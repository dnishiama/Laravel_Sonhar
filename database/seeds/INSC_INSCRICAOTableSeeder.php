<?php

use Illuminate\Database\Seeder;

class INSC_INSCRICAOTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $INST_ID = DB::table('INST_INSTITUICAO')->select('INST_ID')->get();
        $faker = Faker\Factory::create();
	for($i=1; $i<=98; $i++) {
		DB::table('INSC_INSCRICAO')->insert( [
			'INSC_NOME' => $faker->company(),
			'INSC_RG' => rand(),
                        'INSC_CPF' => rand(),
			'INSC_DT_NASCIMENTO' => rand(),
			'INSC_TELEFONE' => rand(),
			'INSC_DT_FORMACAO' => rand(),
			'INSC_PRESENCA_FORMACAO' => rand(),
			'INST_ID' => $faker->randomElement($INST_ID)->INST_ID,
			
			
] );
}
    }
}
