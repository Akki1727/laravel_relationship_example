<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([[
            'title'=>'This is my 1st post',
        ],[
            'title'=>'This is my 2nd post'
        ]]);
    }
}
