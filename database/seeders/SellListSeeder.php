<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sell_lists')->insert([
            [
                'user_id' => '1',
                'cypto_id' => '2',
                'No'=>'0.0005',
                'price'=>'50000',
                'fiat_id'=>'1',
                'limit' => '1000 - 1000000'
            ],
            [
                'user_id' => '1',
                'cypto_id' => '3',
                'No'=>'0.0005',
                'price'=>'90000',
                'fiat_id'=>'2',
                'limit' => '9000 - 9990000'
            ]
        ]);
    }
}
