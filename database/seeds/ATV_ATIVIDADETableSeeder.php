<?php

use Illuminate\Database\Seeder;

class ATV_ATIVIDADETableSeeder extends Seeder
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
	for($i=1; $i<=10; $i++) {
		DB::table('ATV_ATIVIDADE')->insert( [
			'ATV_ID' => rand(1, 10),
			'ATV_DATA' => $faker->randomNumber(),
                        'ATV_DESCRICAO' => $faker->text(100),
			'INST_ID' => $faker->randomElement($INST_ID)->INST_ID,
			
			
] );
}
    }
}
