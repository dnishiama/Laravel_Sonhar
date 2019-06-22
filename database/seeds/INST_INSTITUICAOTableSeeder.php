<?php

use Illuminate\Database\Seeder;

class INST_INSTITUICAOTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();
	for($i=1; $i<=300; $i++) {
		DB::table('INST_INSTITUICAO')->insert( [
			'INST_NOME' => $faker->company(),
			'INST_ENDERECO' => $faker->text(100),
                        'INST_STATUS' => $faker->text(7),
			
			
] );
}
    }
}
