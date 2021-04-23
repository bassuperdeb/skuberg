<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CyptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cyptos')->insert([
            [
                'cypto_name' => 'BTC'
            ],
            [
                'cypto_name' => 'DAI'
            ],
            [
                'cypto_name' => 'USDT'
            ]
        ]);
    }
}
