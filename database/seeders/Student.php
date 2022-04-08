<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Student extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([[
            'id'=>'1',
            'name'=>'akshay',
            'email'=>'akshay@gmail.com',
            'number'=>'7485961230',
            'updated_at'=>now(),
            
        ],[
            'id'=>'2',
            'name'=>'dikshit',
            'email'=>'dikshit@gmail.com',
            'number'=>'7412589630',
            'updated_at'=>now(),
        ],[
            'id'=>'3',
            'name'=>'akki',
            'email'=>'akki@gmail.com',
            'number'=>'8521479630',
            'updated_at'=>now(),
        ],[
            'id'=>'4',
            'name'=>'ganesh',
            'email'=>'ganesh@gmail.com',
            'number'=>'8965741230',
            'updated_at'=>now(),
        ],[
            'id'=>'5',
            'name'=>'krishiv',
            'email'=>'krishiv@gmail.com',
            'number'=>'7458963210',
            'updated_at'=>now(),
        ]]);
    }
}
