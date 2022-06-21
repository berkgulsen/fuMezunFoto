<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AkademiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $akademiler=['Fakülteler','Enstitüler','Yüksekokullar','Meslek Yüksekokulları'];
        $count=0;
        foreach ($akademiler as $akademi){
            $count++;
            DB::table('akademi')->insert([
                'akademi_id'=>$count,
                'akademi_name'=>$akademi,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
