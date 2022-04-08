<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Owner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('owners')->insert([[
                'name'=>'akshay',
                'car_id'=>'35'
            ],[
                'name'=>'dikshit',
                'car_id'=>'36'
            ]]);
    }
}
