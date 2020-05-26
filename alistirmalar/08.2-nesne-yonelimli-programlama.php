<?php
class Arabalar
{

    protected $marka;
    protected $tarih;

    public $araba_firma;
    public function __construct($marka, $tarih)
    {
        echo "Yeni araba oluşturuldu \n";
        $this->setMarka($marka);
        $this->setTarih($tarih);    
    }

    public function arabaBilgisi()
    {
        echo 'Araba markası: '. $this->marka;
        echo 'Piyasaya çıktığı tarih'. $this->tarih;
    }

    public function setMarka($marka)
    {
        $this->marka = $marka;
    }
    public function setTarih($tarih)
    {
        $this->tarih = $tarih;
    }
}

$arac1= new arabalar("Şahin", "25 KL 25");
$arac1->arabaBilgisi();

$arac2= new arabalar ("Tofaş", "25 AKL 25");
$arac2->arabaBilgisi();