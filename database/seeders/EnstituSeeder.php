<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnstituSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enstituler=['Eğitim Bilimleri','Sağlık Bilimleri','Sosyal Bilimler','Fen Bilimleri'];
        $count=0;
        foreach ($enstituler as $enstitu){
            DB::table('enstitu')->insert([
                'enstitu_name'=>$enstitu,
                'akademi_id'=>2,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
