<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentResult extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_results')->insert([[
            'student_id'=>'1',
            'marks'=>'85',
            'updated_at'=>now(),
        ],[
            'student_id'=>'2',
            'marks'=>'75',
            'updated_at'=>now(),
        ],[
            'student_id'=>'3',
            'marks'=>'88',
            'updated_at'=>now(),
        ],[
            'student_id'=>'4',
            'marks'=>'95',
            'updated_at'=>now(),
        ],[
            'student_id'=>'4',
            'marks'=>'88',
            'updated_at'=>now(),
        ],[
            'student_id'=>'5',
            'marks'=>'45',
            'updated_at'=>now(),
        ],[
            'student_id'=>'5',
            'marks'=>'58',
            'updated_at'=>now(),
        ]]);
    }
}
