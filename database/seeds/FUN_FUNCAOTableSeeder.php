<?php

use Illuminate\Database\Seeder;

class FUN_FUNCAOTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();
	for($i=1; $i<=30; $i++) {
		DB::table('FUN_FUNCAO')->insert( [
			'FUN_DESCRICAO' => $faker->text(100),
			
			
			
] );
}
    }
}
