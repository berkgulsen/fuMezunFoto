@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <ul class="big-submenu column4">
                <li style="display:flex;flex-direction: column;">
                    <div style="display: block;width: 100%;">
                        <img style="width: 12px" src="https://www.firat.edu.tr/front/images/shape.png" alt="">
                        <span class="submenu-title">FAKÜLTELER</span>
                    </div>
                    <ul>
                        <li>
                            <a href="{{url('foto-ekle')}}" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Diş Hekimliği Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://eczacilikf.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Eczacılık Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://egitimf.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Eğitim Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://ff.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Fen Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://isbf.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>İnsani ve Sosyal Bilimler Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://iibf.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>İktisadi ve İdari Bilimleri Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://ilahiyatf.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>İlahiyat Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://iletisimf.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>İletişim Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://mimarlikf.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Mimarlık Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://mf.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Mühendislik Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://saglikf.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Sağlık Bilimleri Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://suuf.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Su Ürünleri Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://sbf.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Spor Bilimleri Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://tf.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Teknoloji Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://tef.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Teknik Eğitim Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://tip.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Tıp Fakültesi
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://veterinerf.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Veteriner Fakültesi
                            </a>
                        </li>
                    </ul>
                </li>

                <li style="display:flex;flex-direction: column;">
                    <div style="display: block;width: 100%;">
                        <img style="width: 12px" src="https://www.firat.edu.tr/front/images/shape.png" alt="">
                        <span class="submenu-title">ENSTİTÜLER</span>
                    </div>
                    <ul>
                        <li>
                            <a target="_blank" href="http://egitim.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Eğitim Bilimleri Enstitüsü
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://saglik.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Sağlık Bilimleri Enstitüsü
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://sosyal.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Sosyal Bilimler Enstitüsü
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://fen.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Fen Bilimleri Enstitüsü
                            </a>
                        </li>
                    </ul>
                </li>

                <li style="display:flex;flex-direction: column;">
                    <div style="display: block;width: 100%;">
                        <img style="width: 12px" src="https://www.firat.edu.tr/front/images/shape.png" alt="">
                        <span class="submenu-title">YÜKSEKOKULLAR</span>
                    </div>
                    <ul>
                        <li>
                            <a target="_blank" href="http://yabancidiller.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Yabancı Diller Yüksekokulu
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://kyo.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Devlet Konservatuvarı
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://sivilhavacilik.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Sivil Havacılık Yüksekokulu
                            </a>
                        </li>
                    </ul>
                </li>

                <li style="display:flex;flex-direction: column;">
                    <div style="display: block;width: 100%;">
                        <img style="width: 12px" src="https://www.firat.edu.tr/front/images/shape.png" alt="">
                        <span class="submenu-title">MESLEK YÜKSEKOKULLARI</span>
                    </div>
                    <ul>
                        <li>
                            <a target="_blank" href="http://baskil.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Baskil Meslek Yüksekokulu
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://sanayi.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Elazığ Organize Sanayi Bölgesi Meslek Yüksekokulu
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://karakocan.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Karakoçan Meslek Yüksekokulu
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://keban.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Keban Meslek Yüksekokulu
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://kovancilar.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Kovancılar Meslek Yüksekokulu
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://saglikmyo.firat.edu.tr/" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Sağlık Hizmetleri Meslek Yüksekokulu
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://sivrice.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Sivrice Meslek Yüksekokulu
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://sosyalmyo.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Sosyal Bilimler Meslek Yüksekokulu
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://teknik.firat.edu.tr/tr" style="pointer-events: all;">
                                <i class="fa fa-chevron-right"></i>Teknik Bilimler Meslek Yüksekokulu
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
@endsection
