<?php

class Adam
{
    public $adsoyad="Sadık Ortaoğlan";
    public $yas;

    public function goster(){
        printf("%s adlı kişinin yaşı: %s <br>\n",$this->adsoyad,$this->yas);
}
  }

class Alan extends Adam
{
    public $isi="İşsiz";
}
// $kisi=new Adam;
// $kisi->adsoyad="Ahmet aras";
// $kisi->yas=25;
// $kisi->goster();
// print_r($kisi);
$kisi1=new Alan;
$kisi1->adsoyad="Kadir Ortaoğlan";
$kisi1->yas=27;
$kisi1->isi="Python Uzmanı";
printf($kisi1->adsoyad. ' adlı kişi '. $kisi1->yas. 'yaşındadır ve Mesleği'.$kisi1->isi);
