<?php

require_once __DIR__ . "/../vendor/autoload.php";

use PHP101\OrnekProje\TCKNDogrulama;

$sonuc = TCKNDogrulama::formatDogruMu("12345678901");
echo $sonuc . PHP_EOL;

$kisi_bilgileri = [
    'tcNo'          => '12345678901',
    'name'          => 'Örnek İsim',
    'surName'       => 'Örnek Soyisim',
    'birthyear'     => '1992',
];
$sonuc = TCKNDogrulama::kisiDogruMu($kisi_bilgileri);
echo $sonuc;
