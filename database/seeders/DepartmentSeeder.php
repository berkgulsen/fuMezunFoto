<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Diş Hekimliği Fakültesi
        DB::table('department')->insert([
            'department_name'=>'Diş Hekimliği',
            'sub_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        //Eczacılık Fakültesi
        DB::table('department')->insert([
            'department_name'=>'Eczacılık',
            'sub_id'=>2,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        //Eğitim Fakültesi
        $bolumler=['Bilgisayar ve Öğretim Teknolojileri','Eğitim Programları ve Öğretim','Eğitim Yönetimi','Eğitimde Ölçme ve Değerlendirme','Rehberlik ve Psikolojik Danışmanlık','Güzel Sanatlar Öğretmenliği','Fen Bilgisi Öğretmenliği','Matematik Öğretmenliği','Okul Öncesi Öğretmenliği','Sınıf Öğretmenliği','Türkçe Öğretmenliği','Sosyal Bilgiler Öğretmenliği','İngilizce Öğretmenliği'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>3,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Fen Fakültesi
        $bolumler=['Biyoloji','Moleküler Biyoloji ve Genetik','Fizik','Kimya','Matematik','İstatistik'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>4,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //İnsani ve Sosyal Bilimler Fakültesi
        $bolumler=['Alman Dili ve Edebiyatı','İngiliz Dili ve Edebiyatı','Coğrafya','Çağdaş Türk Lehçeleri ve Edebiyatları','Mütercim Tercümanlık','Sosyoloji','Tarih','Sanat Tarihi','Türk Dili ve Edebiyatı'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>5,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //İktisadi ve İdari Bilimler Fakültesi
        $bolumler=['İktisat','İşletme','Siyaset Bilimi ve Kamu Yönetimi','Sosyal Hizmet','Çalışma Ekonomisi ve Endüstri İlişkileri','Maliye','Sağlık Yönetimi','Yönetim Bilişim Sistemleri'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>6,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //İlahiyat Fakültesi
        $bolumler=['İlahiyat'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>7,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //İletişim Fakültesi
        $bolumler=['Gazetecilik','Görsel İletişim ve Tasarımı','Halkla İlişkiler ve Tanıtım','Radyo, Televizyon ve Sinema',''];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>8,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Mimarlık Fakültesi
        $bolumler=['Mimarlık'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>9,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Mühendislik Fakültesi
        $bolumler=['Bilgisayar Mühendisliği','Biyomühendislik','Çevre Mühendisliği','Elektrik-Elektronik Mühendisliği','İnşaat Mühendisliği','Jeoloji Mühendisliği','Kimya Mühendisliği','Makine Mühendisliği','Mekatronik Mühendisliği','Metalurji ve Malzeme Mühendisliği','Yazılım Mühendisliği'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>10,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sağlık Bilimleri Fakültesi
        $bolumler=['Hemşirelik','Ebelik','Beslenme ve Diyetetik','Fizyoterapi ve Rehabilitasyon'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>11,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Su Ürünleri Fakültesi
        $bolumler=['Su Ürünleri Mühendisliği'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>12,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Spor Bilimleri Fakültesi
        $bolumler=['Spor Yöneticiliği','Beden Eğitimi ve Spor Öğretmenliği','Antrenörlük','Rekreasyon'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>13,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Teknoloji Fakültesi
        $bolumler=['Adli Bilişim Mühendisliği','Elektrik-Elektronik Mühendisliği','Enerji Sistemleri Mühendisliği','İnşaat Mühendisliği','Makine Mühendisliği','Mekatronik Mühendisliği','Metalurji ve Malzeme Mühendisliği','Otomotiv Mühendisliği','Yazılım Mühendisliği','UOLP Yazılım Mühendisliği'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>14,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Teknik Eğitim Fakültesi
        $bolumler=['Elektrik','Elektronik ve Bilgisayar','Makine','Metal'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>15,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Tıp Fakültesi
        $bolumler=['Tıp'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>16,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Veteriner Fakültesi
        $bolumler=['Veterinerlik'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>17,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Eğitim Bilimleri Enstitüsü
        $bolumler=['Eğitim Yönetimi','Eğitim Programları','Türkçe Eğitimi','Sosyal Bilgiler Eğitimi','Fen Bilgisi Eğitimi','Matematik Eğitimi','Sınıf Eğitimi','Bilgisayar ve Öğretim Teknolojileri Eğitimi'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>18,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sağlık Bilimleri Enstitüsü
        $bolumler=['Beden Eğitimi ve Spor Anabilim Dalı','Tıp','Veterinerlik','Hemşirelik'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>19,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sosyal Bilimler Enstitüsü
        $bolumler=['Sosyal Bilimler Enstitüsü'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>20,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Fen Bilimleri Enstitüsü
        $bolumler=['Fen Bilimleri Enstitüsü'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>21,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        $bolumler=['Yabancı Diller Yüksekokulu'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>22,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Devlet Konservatuarı
        $bolumler=['Konservatuar'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>23,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sivil Havacılık Yüksekokulu
        $bolumler=['Havacılık Elektrik ve Elektroniği','Uçak Bakım ve Onarım','Hava Trafik Kontrolü'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>24,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Baskil Meslek Yüksekokulu
        $bolumler=['Bitkisel ve Hayvansal Üretim'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>25,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        // Elazığ Organize Sanayi Meslek Yüksekokulu
        $bolumler=['Bilgisayar Programcılığı','Kaynak Teknolojisi','Kimya Teknolojileri','İnşaat Teknolojileri','Yapı Denetim Programı','Elektronik Teknolojisi','Giyim Üretim Teknolojileri','Elektrik ve Enerji','Endüstri Ürünleri Tasarımı'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>26,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Karakoçan Meslek Yüksekokulu
        $bolumler=['Gıda Teknolojisi','Çocuk Gelişimi','Yapı Denetimi','Tapu ve Kadastro','Bilgisayar Programcılığı'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>27,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Keban Meslek Yüksekokulu
        $bolumler=['Çevre Koruma ve Kontrol Programı','Elektrik Enerjisi Üretim İletim ve Dağıtımı','Geoteknik','Gıda Teknolojisi','İş Sağlığı ve Güvenliği','Peyzaj ve Süs Bitkileri Yetiştiriliciği',''];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>28,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Kovancılar Meslek Yüksekokulu
        $bolumler=['Bilgisayar Programcılığı','Eczane Hizmetleri','İlk ve Acil Yardım','İşletme Yönetimi','Optisyenlik','Sağlık Kurumları İşletmeciliği'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>29,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sağlık Hizmetleri Meslek Yüksekokulu
        $bolumler=['Anestezi','Fizyoterapi','Odyometri','Otopsi','Tıbbi Dokümantasyon ve Sekreterlik','Tıbbi Görüntüleme Teknikleri','Tıbbi Laboratuvar Teknikleri'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>30,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sivrice Meslek Yüksekokulu
        $bolumler=['Harita ve Kadastro','Arıcılık','Atçılık ve Antrenörlüğü','Turizm ve Otel İşletmeciliği','Veterinerlik'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>31,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Sosyal Bilimler Meslek Yüksekokulu
        $bolumler=['Adalet','Aşçılık','Bankacılık ve Sigortacılık','Büro Yönetimi ve Yönetici Asistanlığı','Dış Ticaret','Halkla İlişkiler ve Tanıtım','İşletme ','Muhasebe ve Verzi Uygulamaları','Pazarlama','Turizm ve Otel İşletmeciliği','Yerel Yönetimler'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>32,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

        //Teknik Bilimler Meslek Yüksekokulu
        $bolumler=['Bilgisayar Programcılığı','Biyomedikal Cihaz Teknolojisi','Elektrik','Elektrik Teknolojisi','Grafik Tasarımı','İç Mekan Tasarımı','İnşaat Teknolojisi','İş Sağlığı ve Güvenliği','Makine','Makine Resim ve Konstrüksiyon','Mekatronik','Mimari Restorasyon','Otomotiv Teknolojisi','Radyo ve Televizyon Programcılığı'];
        foreach ($bolumler as $bolum){
            DB::table('department')->insert([
                'department_name'=>$bolum,
                'sub_id'=>33,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
