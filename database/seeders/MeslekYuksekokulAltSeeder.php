<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeslekYuksekokulAltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Baskil Meslek Yüksekokulu
        $bolumler=['Bitkisel ve Hayvansal Üretim'];
        foreach ($bolumler as $bolum){
            DB::table('meslekYuksekOkulAlt')->insert([
                'bolum_name'=>$bolum,
                'meslekYuksekokul_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        // Elazığ Organize Sanayi Meslek Yüksekokulu
        $bolumler=['Bilgisayar Programcılığı','Kaynak Teknolojisi','Kimya Teknolojileri','İnşaat Teknolojileri','Yapı Denetim Programı','Elektronik Teknolojisi','Giyim Üretim Teknolojileri','Elektrik ve Enerji','Endüstri Ürünleri Tasarımı'];
        foreach ($bolumler as $bolum){
            DB::table('meslekYuksekOkulAlt')->insert([
                'bolum_name'=>$bolum,
                'meslekYuksekokul_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Karakoçan Meslek Yüksekokulu
        $bolumler=['Gıda Teknolojisi','Çocuk Gelişimi','Yapı Denetimi','Tapu ve Kadastro','Bilgisayar Programcılığı'];
        foreach ($bolumler as $bolum){
            DB::table('meslekYuksekOkulAlt')->insert([
                'bolum_name'=>$bolum,
                'meslekYuksekokul_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Keban Meslek Yüksekokulu
        $bolumler=['Çevre Koruma ve Kontrol Programı','Elektrik Enerjisi Üretim İletim ve Dağıtımı','Geoteknik','Gıda Teknolojisi','İş Sağlığı ve Güvenliği','Peyzaj ve Süs Bitkileri Yetiştiriliciği',''];
        foreach ($bolumler as $bolum){
            DB::table('meslekYuksekOkulAlt')->insert([
                'bolum_name'=>$bolum,
                'meslekYuksekokul_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Kovancılar Meslek Yüksekokulu
        $bolumler=['Bilgisayar Programcılığı','Eczane Hizmetleri','İlk ve Acil Yardım','İşletme Yönetimi','Optisyenlik','Sağlık Kurumları İşletmeciliği'];
        foreach ($bolumler as $bolum){
            DB::table('meslekYuksekOkulAlt')->insert([
                'bolum_name'=>$bolum,
                'meslekYuksekokul_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sağlık Hizmetleri Meslek Yüksekokulu
        $bolumler=['Anestezi','Fizyoterapi','Odyometri','Otopsi','Tıbbi Dokümantasyon ve Sekreterlik','Tıbbi Görüntüleme Teknikleri','Tıbbi Laboratuvar Teknikleri'];
        foreach ($bolumler as $bolum){
            DB::table('meslekYuksekOkulAlt')->insert([
                'bolum_name'=>$bolum,
                'meslekYuksekokul_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sivrice Meslek Yüksekokulu
        $bolumler=['Harita ve Kadastro','Arıcılık','Atçılık ve Antrenörlüğü','Turizm ve Otel İşletmeciliği','Veterinerlik'];
        foreach ($bolumler as $bolum){
            DB::table('meslekYuksekOkulAlt')->insert([
                'bolum_name'=>$bolum,
                'meslekYuksekokul_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sosyal Bilimler Meslek Yüksekokulu
        $bolumler=['Adalet','Aşçılık','Bankacılık ve Sigortacılık','Büro Yönetimi ve Yönetici Asistanlığı','Dış Ticaret','Halkla İlişkiler ve Tanıtım','İşletme ','Muhasebe ve Verzi Uygulamaları','Pazarlama','Turizm ve Otel İşletmeciliği','Yerel Yönetimler'];
        foreach ($bolumler as $bolum){
            DB::table('meslekYuksekOkulAlt')->insert([
                'bolum_name'=>$bolum,
                'meslekYuksekokul_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Teknik Bilimler Meslek Yüksekokulu
        $bolumler=['Bilgisayar Programcılığı','Biyomedikal Cihaz Teknolojisi','Elektrik','Elektrik Teknolojisi','Grafik Tasarımı','İç Mekan Tasarımı','İnşaat Teknolojisi','İş Sağlığı ve Güvenliği','Makine','Makine Resim ve Konstrüksiyon','Mekatronik','Mimari Restorasyon','Otomotiv Teknolojisi','Radyo ve Televizyon Programcılığı'];
        foreach ($bolumler as $bolum){
            DB::table('meslekYuksekOkulAlt')->insert([
                'bolum_name'=>$bolum,
                'meslekYuksekokul_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
