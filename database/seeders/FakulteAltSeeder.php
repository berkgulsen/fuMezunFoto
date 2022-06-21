<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakulteAltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Diş Hekimliği Fakültesi
        DB::table('fakulteAlt')->insert([
            'bolum_name'=>'Diş Hekimliği',
            'fakulte_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        //Eczacılık Fakültesi
        DB::table('fakulteAlt')->insert([
            'bolum_name'=>'Eczacılık',
            'fakulte_id'=>2,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        //Eğitim Fakültesi
        $bolumler=['Bilgisayar ve Öğretim Teknolojileri','Eğitim Programları ve Öğretim','Eğitim Yönetimi','Eğitimde Ölçme ve Değerlendirme','Rehberlik ve Psikolojik Danışmanlık','Güzel Sanatlar Öğretmenliği','Fen Bilgisi Öğretmenliği','Matematik Öğretmenliği','Okul Öncesi Öğretmenliği','Sınıf Öğretmenliği','Türkçe Öğretmenliği','Sosyal Bilgiler Öğretmenliği','İngilizce Öğretmenliği'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>3,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Fen Fakültesi
        $bolumler=['Biyoloji','Moleküler Biyoloji ve Genetik','Fizik','Kimya','Matematik','İstatistik'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>4,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //İnsani ve Sosyal Bilimler Fakültesi
        $bolumler=['Alman Dili ve Edebiyatı','İngiliz Dili ve Edebiyatı','Coğrafya','Çağdaş Türk Lehçeleri ve Edebiyatları','Mütercim Tercümanlık','Sosyoloji','Tarih','Sanat Tarihi','Türk Dili ve Edebiyatı'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>5,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //İktisadi ve İdari Bilimler Fakültesi
        $bolumler=['İktisat','İşletme','Siyaset Bilimi ve Kamu Yönetimi','Sosyal Hizmet','Çalışma Ekonomisi ve Endüstri İlişkileri','Maliye','Sağlık Yönetimi','Yönetim Bilişim Sistemleri'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>6,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //İlahiyat Fakültesi
        $bolumler=['İlahiyat'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>7,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //İletişim Fakültesi
        $bolumler=['Gazetecilik','Görsel İletişim ve Tasarımı','Halkla İlişkiler ve Tanıtım','Radyo, Televizyon ve Sinema',''];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>8,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Mimarlık Fakültesi
        $bolumler=['Mimarlık'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>9,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Mühendislik Fakültesi
        $bolumler=['Bilgisayar Mühendisliği','Biyomühendislik','Çevre Mühendisliği','Elektrik-Elektronik Mühendisliği','İnşaat Mühendisliği','Jeoloji Mühendisliği','Kimya Mühendisliği','Makine Mühendisliği','Mekatronik Mühendisliği','Metalurji ve Malzeme Mühendisliği','Yazılım Mühendisliği'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>10,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sağlık Bilimleri Fakültesi
        $bolumler=['Hemşirelik','Ebelik','Beslenme ve Diyetetik','Fizyoterapi ve Rehabilitasyon'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>11,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Su Ürünleri Fakültesi
        $bolumler=['Su Ürünleri Mühendisliği'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>12,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Spor Bilimleri Fakültesi
        $bolumler=['Spor Yöneticiliği','Beden Eğitimi ve Spor Öğretmenliği','Antrenörlük','Rekreasyon'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>13,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Teknoloji Fakültesi
        $bolumler=['Adli Bilişim Mühendisliği','Elektrik-Elektronik Mühendisliği','Enerji Sistemleri Mühendisliği','İnşaat Mühendisliği','Makine Mühendisliği','Mekatronik Mühendisliği','Metalurji ve Malzeme Mühendisliği','Otomotiv Mühendisliği','Yazılım Mühendisliği','UOLP Yazılım Mühendisliği'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>14,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Teknik Eğitim Fakültesi
        $bolumler=['Elektrik','Elektronik ve Bilgisayar','Makine','Metal'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>15,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Tıp Fakültesi
        $bolumler=['Tıp'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>16,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Veteriner Fakültesi
        $bolumler=['Veterinerlik'];
        foreach ($bolumler as $bolum){
            DB::table('fakulteAlt')->insert([
                'bolum_name'=>$bolum,
                'fakulte_id'=>17,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
