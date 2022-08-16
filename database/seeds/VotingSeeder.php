<?php

use Illuminate\Database\Seeder;

require_once 'vendor/autoload.php';

use Faker\Factory as Faker;



class VotingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$mytime = Carbon\Carbon::now();


    	$nis = 120170001;
    	$faker = Faker::create('id_ID');
    	for($a=7;$a<32;$a++){

    		DB::table('voting')->insert([
    			'kandidat_id' => $faker->randomElement(array('2','4','5')),
    			'pemilih_id' => $a,
    			'created_at' => $mytime->toDateTimeString()
    		]);
    	}

    }
}
