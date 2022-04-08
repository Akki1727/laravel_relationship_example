<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class videos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('videos')->insert([[
          'name'=>'video1'
      ],[
          'name'=>'video2'
      ]]);
    }
}
