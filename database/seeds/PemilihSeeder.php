<?php

use Illuminate\Database\Seeder;

require_once 'vendor/autoload.php';

use Faker\Factory as Faker;

class PemilihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$nis = 120170001;
    	$faker = Faker::create('id_ID');
    	for($a=1;$a<30;$a++){

    		DB::table('pemilih')->insert([
    			'nama' => $faker->name,
    			'nis' => $nis++,
    			'jk' => $faker->randomElement(array('Laki-laki','Perempuan')),
    			'umur' => $faker->numberBetween(15, 20),
    			'alamat' => $faker->address,
    			'password' => bcrypt('pemilih')
    		]);
    	}

    }
}
