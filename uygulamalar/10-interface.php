<?php

interface Canli
{
    public static function nefesAliyorMu();

    public function kacYasinda($dogum_yili);
    
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
    public static function nefesAliyorMu()
    {
        // code...
    }

    public function kacYasinda($dogum_yili)
    {
        // code...
    }

    public function tenRengi()
    {
        // code...
    }

    public function kanGrubu()
    {
        // code...
    }

    public function medeniHali()
    {
        // code...   
    }

    public function surununSahibiKim()
    {
        // code...
    }

    public function gunVeAyOlarakSoyle($dogum_yili, $dogum_gunu)
    {
        $this->kacYasinda($dogum_yili);
        // ...
    }
    
}

class Kopek implements CobanVeKopegi
{
    public function surununSahibiKim()
    {
        // code...
    }
}

new Coban();
new Kopek();
