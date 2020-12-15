<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'GO Pusat',
            'email'     => 'official.go.pusat@gmail.com',
            'username'  => 'gopw36_1',
            'password'  => 'password123'
        ]);
    }
}
