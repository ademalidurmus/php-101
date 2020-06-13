<?php

namespace PHP101\OrnekProje;

use murataygun\TcKimlik;

class TCKNDogrulama
{
    public static function formatDogruMu($tckn)
    {
        $sonuc = "yanlış";
        if (TcKimlik::confirm($tckn)) {
            $sonuc = "doğru";
        }

        return "Belirtmiş olduğunuz T.C. Kimlik Numarası {$sonuc} formattadır.";
    }

    public static function kisiDogruMu($bilgiler)
    {
        $sonuc = "uyuşmamaktadır";
        if (TcKimlik::validate($bilgiler)) {
            $sonuc = "uyuşmaktadır";
        }

        return "Belirtmiş olduğunuz T.C. Kimlik Numarası ile kişi bilgileri {$sonuc}.";
    }
}
