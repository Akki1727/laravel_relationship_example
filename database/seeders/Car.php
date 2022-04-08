<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Car extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([[
            'mechanic_id'=>'1',
            'model'=>'x-model',
        ],[
            'mechanic_id'=>'5',
            'model'=>'y-model',
        ]]);
    }
}
