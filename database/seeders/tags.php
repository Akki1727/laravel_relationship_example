<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([[
            'name'=>'tag1'
        ],[
            'name'=>'tag2'
        ],[
            'name'=>'tag3'
        ],[
            'name'=>'tag4'
        ],[
            'name'=>'tag5'
        ],[
            'name'=>'tag6'
        ],[
            'name'=>'tag7'
        ]]);
    }
}
