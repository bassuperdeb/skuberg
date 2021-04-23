<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //
        DB::table('users')->insert([
            [
                'email' => 'test1@gmail.com',
                'password' => Hash::make('123456'),
                'mobile' => '0101010101',
                'referralID' => '11111'
            ],
            [
                'email' => 'test2@gmail.com',
                'password' => Hash::make('123456'),
                'mobile' => '0202020202',
                'referralID' => '222222'
            ]
        ]);
    }
}
