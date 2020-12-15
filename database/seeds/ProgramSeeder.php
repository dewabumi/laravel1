<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 200; $i++) {
            DB::table('program')->insert([
                'outlet'            => $faker->numberBetween(1, 100),
                'nama_program'      => $faker->company,
                'status_program'    => $faker->numberBetween(0, 1),
                'jadwal_program'    => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 year', $timezone = 'Asia/Jakarta'),
                'harga_program'     => $faker->numberBetween(500000, 1000000)
            ]);
        }
    }
}
