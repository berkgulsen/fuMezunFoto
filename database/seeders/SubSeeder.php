<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakulteler=['Diş Hekimliği','Eczacılık','Eğitim','Fen','İnsani ve Sosyal Bilimler','İktisadi ve İdari Bilimler','İlahiyat','İletişim','Mimarlık','Mühendislik','Sağlık Bilimleri','Su Ürünleri','Spor Bilimleri','Teknoloji','Teknik Eğitim','Tıp','Veteriner'];
        foreach ($fakulteler as $fakulte){
            DB::table('sub')->insert([
                'sub_name'=>$fakulte,
                'akademi_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        $enstituler=['Eğitim Bilimleri','Sağlık Bilimleri','Sosyal Bilimler','Fen Bilimleri'];
        foreach ($enstituler as $enstitu){
            DB::table('sub')->insert([
                'sub_name'=>$enstitu,
                'akademi_id'=>2,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        $yuksekokullar=['Yabancı Diller','Devlet Konservatuarı','Sivil Havacılık'];
        foreach ($yuksekokullar as $yuksekokul){
            DB::table('sub')->insert([
                'sub_name'=>$yuksekokul,
                'akademi_id'=>3,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        $meslekyuksekokullar=['Baskil','Elazığ Organize Sanayi Bölgesi','Karakoçan','Keban','Kovancılar','Sağlık Hizmetleri','Sivrice','Sosyal Bilimler','Teknik Bilimler'];
        foreach ($meslekyuksekokullar as $meslekyuksekokul){
            DB::table('sub')->insert([
                'sub_name'=>$meslekyuksekokul,
                'akademi_id'=>4,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
