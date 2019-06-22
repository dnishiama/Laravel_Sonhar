<?php

use Illuminate\Database\Seeder;

class CRI_CRIANCATableSeeder extends Seeder
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
	for($i=1; $i<=300; $i++) {
		DB::table('CRI_CRIANCA')->insert( [
			'CRI_NOME' => $faker->company(),
			'CRI_IDADE' => rand(7, 14),
                        'CRI_STATUS' => $faker->text(7),
			'INST_ID' => $faker->randomElement($INST_ID)->INST_ID,
			
			
] );
}
    }
}
