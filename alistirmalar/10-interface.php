<?php

interface Canli
{
    public static function nefesAliyorMu();

    public function kacYasinda(int $dogum_yili);
    
    public function tenRengi();

    public function kanGrubu();
    
    public function medeniHali();
}

interface CobanVeKopegi
{
    public function surununSahibiKim();
}

class Coban implements Canli,CobanVeKopegi
{
    const KAN_GRUBU = '0 Rh+';

    public static function nefesAliyorMu()
    {
        return 'Evet';
    }

    public function kacYasinda(int $dogum_yili)
    {
        return date('Y') - $dogum_yili;
    }

    public function tenRengi()
    {
        return 'Kumral';
    }

    public function kanGrubu()
    {
        return self::KAN_GRUBU;
    }

    public function medeniHali()
    {
        return 'Bekar';
    }

    public function surununSahibiKim()
    {
        return 'Hain Kostok';
    }

    public function dahaDetayliYasHesapla($dogum_yili, $ay)
    {
        $yas = $this->kacYasinda($dogum_yili);
        $yas .= $ay > 6 ? ',5' : '';
        return $yas;
    }
}

class Kopek implements CobanVeKopegi
{
    public function surununSahibiKim()
    {
        return 'Hav hav hav';
    }
}

$coban = new Coban();
echo $coban->kacYasinda(2005) . PHP_EOL;
echo $coban->kanGrubu() . PHP_EOL;
echo $coban->dahaDetayliYasHesapla(2005, 10) . PHP_EOL;

$kopek = new Kopek();
echo $kopek->surununSahibiKim();
