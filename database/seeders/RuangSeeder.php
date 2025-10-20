<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            \DB::table('ruang')->insert([
                'nama_tempat' => $faker->text($maxNbChars = 50),
                'alamat' => $faker->address,
                'kapasitas' => $faker->numberBetween(25, 250),
                'no_pengelola' => $faker->phoneNumber,
                'desc' => $faker->text($maxNbChars = 500),
                'harga' => $faker->numberBetween(50000, 1000000),
                'rating' => $faker->randomFloat($nbMaxDecimals = null, $min = 0, $max = 5),
            ]);
        }
    }
}
