<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($x = 1; $x <= 10; $x++){
        	DB::table('pengunjungs')->insert([
        		'nama_pengunjung' => $faker->name,
        		'no_hp' => $faker->phoneNumber,
        		'alamat' => $faker->address
        	]);
        }
    }
}
