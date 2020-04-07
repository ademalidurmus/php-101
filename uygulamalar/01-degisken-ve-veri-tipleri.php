<?php

/**
 * Degiskenler
 * 
 * - Degisken belirteci $ isaretidir
 * - **_** veya harf ile baslayabilir (Sayi ile baslayamaz, **-** veya ozel karakterler iceremez.) Orn: $_test_degisken, $ornek_degisken, $ornekDegisken, $OrnekDegisken
 * - Buyuk kucuk harf duyarliligi vardir
 **/
$ornek_degisken = 1;


/**
 * Ekrana metin yazdirma metodlari
 *
 * echo: metin veya sayisal ifadeleri ekrana yazdirir
 * print: metin veya sayisal ifadeleri ekrana yazdirir
 * print_r: metin, sayisal ifadeler ve **dizileri** ekrana yazdir.
 * var_dump: degisken degeri veya herhangi bir bilgiyi detayli olarak ekrana yazdirir.
 **/
echo 'Merhaba Ben Kadir :)';
// Bir alt sartira gecmek icin: \n PHP_EOL
echo '<br>';
echo 25000; // veri tipi integer
echo '<br>';
echo "25000"; // veri tipi string
echo '<br>';


$degisken = "Örnek metin";
echo $degisken;
echo '<br>';
echo 'Metnin ilk parcasi ' . $degisken . ' metnin ikinci parcasi';
echo '<br>';
$degisken = "Güncellendi";
echo "Metnin ilk parcasi {$degisken} metnin ikinci parcasi";
echo '<br>';
echo "Metnin ilk parcasi $degisken metnin ikinci parcasi"; // Bu sekilde de yazilabiliyor, fakat dogru olani degiskeni suslu parantez icerisinde yazmak.
echo '<br>';
echo 'Metnin ilk parcasi {$degisken} metnin ikinci parcasi';
echo '<br>';


echo '<br>';
print("Örnek metin print komutu ile yazildi.");
echo('<br>');
print_r("Örnek metin print_r komutu ile yazildi.");
echo('<br>');

echo "<pre>";

$dizi = []; // $dizi = array();
$dizi['test'] = 'test indisi';
$dizi['test_yeni'] = 'yeni test indisi';
print_r($dizi);
echo('<br>');

// degiskenlerdeki kurallar indexlerde de gecerli fakat indexler tire (-) icerebiliyor
$dizi = [];
$dizi[] = 'test';
print_r($dizi);

echo('<br>');
var_dump($dizi);
echo('<br>');
$dizi[] = 'test eklendi';
$dizi[] = 'test eklendi';
$dizi['test-index'] = 'test eklendi';
var_dump($dizi);


/**
 * VERI TIPLERI
 *
 * int: integer, sayisal
 * string: metinsel
 * bool: true veya false trunde deger alabilir
 * float (double): virgullu ifadeler
 * array: dizi
 * object: nesne
 **/
