<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Spark",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345'),
            'email_verified_at' => '2021-03-02 11:15:24',
        ]);
    }
}
