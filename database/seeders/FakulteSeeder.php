<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakulteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakulteler=['Diş Hekimliği','Eczacılık','Eğitim','Fen','İnsani ve Sosyal Bilimler','İktisadi ve İdari Bilimler','İlahiyat','İletişim','Mimarlık','Mühendislik','Sağlık Bilimleri','Su Ürünleri','Spor Bilimleri','Teknoloji','Teknik Eğitim','Tıp','Veteriner'];
        $count=0;
        foreach ($fakulteler as $fakulte){
            $count++;
            DB::table('fakulte')->insert([
                'fakulte_id'=>$count,
                'fakulte_name'=>$fakulte,
                'akademi_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
