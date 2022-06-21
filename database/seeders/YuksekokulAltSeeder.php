<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YuksekokulAltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Yabancı Diller Yüksekokulu
        $bolumler=['Yabancı Diller Yüksekokulu'];
        foreach ($bolumler as $bolum){
            DB::table('yuksekokulAlt')->insert([
                'bolum_name'=>$bolum,
                'yuksekokul_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Devlet Konservatuarı
        $bolumler=['Konservatuar'];
        foreach ($bolumler as $bolum){
            DB::table('yuksekokulAlt')->insert([
                'bolum_name'=>$bolum,
                'yuksekokul_id'=>2,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sivil Havacılık Yüksekokulu
        $bolumler=['Havacılık Elektrik ve Elektroniği','Uçak Bakım ve Onarım','Hava Trafik Kontrolü'];
        foreach ($bolumler as $bolum){
            DB::table('yuksekokulAlt')->insert([
                'bolum_name'=>$bolum,
                'yuksekokul_id'=>3,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
