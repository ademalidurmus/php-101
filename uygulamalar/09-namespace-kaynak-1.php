<?php namespace Dunya\Ulkeler;

class Ulke
{
    public $isim;
    private $nufus = [
        'Türkiye' => 82000000,
        'Almanya' => 83020000,
    ];

    public function __construct($isim)
    {
        $this->isim = $isim;
    }

    public function getNufus()
    {
        return $this->nufus[$this->isim] ?? 'Bulunamadi';
    }
}
