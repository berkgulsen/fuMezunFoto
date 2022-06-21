<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YuksekokulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $yuksekokullar=['Yabancı Diller','Devlet Konservatuarı','Sivil Havacılık'];
        $count=0;
        foreach ($yuksekokullar as $yuksekokul){
            $count++;
            DB::table('yuksekokul')->insert([
                'yuksekokul_id'=>$count,
                'yuksekokul_name'=>$yuksekokul,
                'akademi_id'=>3,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
