<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 100; $i++) {
            DB::table('outlet')->insert([
                'regencies'     => $faker->numberBetween(1101, 9471),
                'outlet_name'   => $faker->company,
                'outlet_alamat' => $faker->address,
                'outlet_status' => $faker->numberBetween(0, 1)
            ]);
        }
    }
}
