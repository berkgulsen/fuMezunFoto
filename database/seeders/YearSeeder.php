<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $years=[2020,2021,2022];
        foreach ($years as $year){
            DB::table('year')->insert([
                'year'=>$year,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
