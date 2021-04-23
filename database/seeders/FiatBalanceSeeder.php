<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiatBalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fiat_balances')->insert([
            [
                'user_id' => '1',
                'fiat_balance' => '1000',
                'fiat_id' => '1'

            ],
            [
                'user_id' => '2',
                'fiat_balance' => '10000',
                'fiat_id' => '2'
            ],
        ]);
    }
}
