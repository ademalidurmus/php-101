<?php

abstract class Sehir
{
    public $nufus = 0;
    public $yuz_olcumu = 0;

    public function kalabalikMi()
    {
        return $this->yuz_olcumu / $this->nufus < 1 ? 'Evet' : 'Hayir';
    }
}

class Istanbul extends Sehir
{
    public $nufus = 15520000;
    public $yuz_olcumu = 5343000;
}

class Igdir extends Sehir
{
    public $nufus = 199442;
    public $yuz_olcumu = 3588000;
}

class Erzurum extends Sehir
{
    public $nufus = 767848;
    public $yuz_olcumu = 25066000;
}

// new Sehir();
// new Sehir() seklinde yeni bir nesne olusturulamiyorken bu class in extend edildigi Istanbul, Igdir, Erzurum class lari new ClassIsmi seklinde sorunsuz olusutulabiliyor.
$istanbul = new Istanbul;
echo $istanbul->kalabalikMi() . PHP_EOL;

$igdir = new Igdir;
echo $igdir->kalabalikMi() . PHP_EOL;

$erzurum = new Erzurum;
echo $erzurum->kalabalikMi() . PHP_EOL;
