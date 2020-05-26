<?php namespace OrnekProje\Kulanicilar;

class Kullanici
{
    private $isim;
    private $yaslar = [
        'Ahmet' => 5
    ];

    public function setName($isim)
    {
        $this->isim = $isim;
        return $this;
    }

    public function getAge()
    {
        return $this->yaslar[$this->isim] ?? 'Bulunamadi';
    }
}
