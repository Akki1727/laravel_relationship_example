<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Mechanic extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mechanics')->insert([[
            'name'=>'maitrak',
           
        ],[
            'name'=>'ravi',
            
        ],[
            'name'=>'darshan',
            
        ]]);
    }
}
