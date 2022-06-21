<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnstituAltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Eğitim Bilimleri Enstitüsü
        $bolumler=['Eğitim Yönetimi','Eğitim Programları','Türkçe Eğitimi','Sosyal Bilgiler Eğitimi','Fen Bilgisi Eğitimi','Matematik Eğitimi','Sınıf Eğitimi','Bilgisayar ve Öğretim Teknolojileri Eğitimi'];
        foreach ($bolumler as $bolum){
            DB::table('enstituAlt')->insert([
                'bolum_name'=>$bolum,
                'enstitu_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sağlık Bilimleri Enstitüsü
        $bolumler=['Beden Eğitimi ve Spor Anabilim Dalı','Tıp','Veterinerlik','Hemşirelik'];
        foreach ($bolumler as $bolum){
            DB::table('enstituAlt')->insert([
                'bolum_name'=>$bolum,
                'enstitu_id'=>2,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sosyal Bilimler Enstitüsü
        $bolumler=['Sosyal Bilimler Enstitüsü'];
        foreach ($bolumler as $bolum){
            DB::table('enstituAlt')->insert([
                'bolum_name'=>$bolum,
                'enstitu_id'=>3,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Fen Bilimleri Enstitüsü
        $bolumler=['Fen Bilimleri Enstitüsü'];
        foreach ($bolumler as $bolum){
            DB::table('enstituAlt')->insert([
                'bolum_name'=>$bolum,
                'enstitu_id'=>4,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
