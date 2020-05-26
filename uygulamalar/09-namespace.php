<?php
// composer paket onetici kullanmadigimiz icin projeye dosyalari manuel dahil ediyoruz
require_once __DIR__ . "/09-namespace-kaynak-1.php";
require_once __DIR__ . "/09-namespace-kaynak-2.php";

use Dunya\Ulkeler\Ulke;
use OrnekProje\Kulanicilar\Kullanici;

$kullanici = new Kullanici();
echo "Mehmet'in yaşı: " . $kullanici->setName('Mehmet')->getAge() . PHP_EOL;
echo "Ahmet'in yaşı: " . $kullanici->setName('Ahmet')->getAge() . PHP_EOL;


$ulke = new Ulke('Türkiye');
echo "Türkiye'nin nüfusu: " . $ulke->getNufus() . PHP_EOL;

$ulke = new Ulke('Almanya');
echo "Almanya'nın nüfusu: " . $ulke->getNufus() . PHP_EOL;
