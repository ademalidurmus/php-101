<?php

// Metnin karakterlerini saymak icin
echo strlen('Ornek metin') . PHP_EOL; // 11
echo strlen('Örnek metin') . PHP_EOL; // 12
// Multibyte islemlerde PHP'nin mbstring kutuphanesi ile gelen ozel metodlari kullanabiliriz
echo mb_strlen('Örnek metin') . PHP_EOL; // 11

// explode ile bir metni belirtilen karakterden parcalarina ayirabilirsiniz
$sonuc = explode(' ', 'Ornek metin');
print_r($sonuc);
// Array
// (
//     [0] => Ornek
//     [1] => metin
// )

$sonuc = explode('-', 'ornek-yeni-metin');
print_r($sonuc);
// Array
// (
//     [0] => ornek
//     [1] => yeni
//     [2] => metin
// )

$sonuc = explode('st ', 'test tost cast');
print_r($sonuc);
// Array
// (
//     [0] => te
//     [1] => to
//     [2] => cast
// )


// Metni karakterlerine ayirarak dizi olusturma
$sonuc = str_split('test');
print_r($sonuc);
// Array
// (
//     [0] => t
//     [1] => e
//     [2] => s
//     [3] => t
// )

$sonuc = str_split('test', 2);
print_r($sonuc);
// Array
// (
//     [0] => te
//     [1] => st
// )


$ters = strrev('Ornek metin'); // multi byte desteklemez
echo $ters . PHP_EOL; // nitem kenrO


echo str_replace('at', 'ot', 'Ali ata bak.') . PHP_EOL; // Ali ota bak.
echo str_replace('at', 'ot', 'Ali ata bak. At yemiş mi otu?') . PHP_EOL; // Ali ota bak. At yemiş mi otu?

$degisen_oge_sayisi = 0;
echo str_replace('ornek', 'xxxxx', 'Ornek ornek ornek ornek.', $degisen_oge_sayisi) . PHP_EOL; // Ornek xxxxx xxxxx xxxxx.
echo "Yukaridaki islem dogrultusunda {$degisen_oge_sayisi} adet oge degistirme isleminden etkilendi.\n"; // ... 3 adet ...


$degisen_oge_sayisi = 0;
echo str_replace('ornek', 'xxxxx', 'Ornek ornek xxxxx xxxxx.', $degisen_oge_sayisi) . PHP_EOL; // Ornek xxxxx xxxxx xxxxx.
echo "Yukaridaki islem dogrultusunda {$degisen_oge_sayisi} adet oge degistirme isleminden etkilendi.\n"; // ... 1 adet ...



$degisen_oge_sayisi = 0;
echo str_replace(['Bir', 'ornek'], ['Xxx', 'xxxxx'], 'Bir ornek xxxxx xxxxx.', $degisen_oge_sayisi) . PHP_EOL; // Xxx xxxxx xxxxx xxxxx.
echo "Yukaridaki islem dogrultusunda {$degisen_oge_sayisi} adet oge degistirme isleminden etkilendi.\n"; // ... 2 adet ...


var_dump(is_numeric('test')); // bool(false)
var_dump(is_numeric('215241212')); // bool(true)


define('SAMPLE_CONSTANT', 'Ornek sabit degisken');
echo SAMPLE_CONSTANT . PHP_EOL; // Ornek sabit degisken

$ornek_1 = "123.2";
$ornek_2 = "2";
$ornek_2 += $ornek_1;
echo $ornek_2 . PHP_EOL;
