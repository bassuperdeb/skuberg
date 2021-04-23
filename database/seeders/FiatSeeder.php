<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fiats')->insert([
            [
                'fiat_name' => 'THB'
            ],
            [
                'fiat_name' => 'CNY'
            ],
            [
                'fiat_name' => 'USD'
            ]
        ]);
    }
}
