<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeslekYuksekokulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meslekyuksekokullar=['Baskil','Elazığ Organize Sanayi Bölgesi','Karakoçan','Keban','Kovancılar','Sağlık Hizmetleri','Sivrice','Sosyal Bilimler','Teknik Bilimler'];
        $count=0;
        foreach ($meslekyuksekokullar as $meslekyuksekokul){
            DB::table('meslekyuksekokul')->insert([
                'meslekyuksekokul_name'=>$meslekyuksekokul,
                'akademi_id'=>4,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
