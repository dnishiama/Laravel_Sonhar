<?php

use Illuminate\Database\Seeder;

class HIS_HISTORICOTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $VOL_ID = DB::table('VOL_VOLUNTARIO')->select('VOL_ID')->get();
	$CRI_ID = DB::table('CRI_CRIANCA')->select('CRI_ID')->get();
        $ATV_ID = DB::table('ATV_ATIVIDADE')->select('ATV_ID')->get();
        $faker = Faker\Factory::create();
	for($i=1; $i<=500; $i++) {
		DB::table('HIS_HISTORICO')->insert( [
			'VOL_ID'=> $faker->randomElement($VOL_ID)->VOL_ID,
			'CRI_ID' => $faker->randomElement($CRI_ID)->CRI_ID,
			'ATV_ID' => $faker->randomElement($ATV_ID)->ATV_ID,
			
			
] );
    }
}
}
