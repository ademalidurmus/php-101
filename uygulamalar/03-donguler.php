<?php

/**
 * for
 * foreach
 * while
 * do while
 */




// for dongusu 
/*
for ($i = 0; $i <= 10; $i += 2) {
    echo "Sayi {$i}\n";
}
*/




// Sonsuz dongu
/*
for ($i = 0; $i <= 10; $i -= 2) { 
    echo "Sayi {$i}\n";
}
*/





// 10'dan geriye dogru 2'ser 2'ser saydirma
/*
for ($i = 10; $i >= 0; $i -= 2) { 
    echo "Sayi {$i}\n";
}
*/






/**
 * 0'dan 10'a kadar olan sayilarin tek ve cift olarak ayristirilmasi
 */
$dizi = [
    'tek' => [],
    'cift' => [],
];

for ($i = 0; $i < 10; $i++) {
    if (($i % 2) === 0) {
        $dizi['cift'][] = $i;
    } else {
        $dizi['tek'][] = $i;
    }
}
// print_r($dizi);
//Cikti
/*
(
    [tek] => Array
        (
            [0] => 1
            [1] => 3
            [2] => 5
            [3] => 7
            [4] => 9
        )

    [cift] => Array
        (
            [0] => 0
            [1] => 2
            [2] => 4
            [3] => 6
            [4] => 8
        )

)
 */


// Simdi bu islemi else kullanmadan yapalim
$dizi = [
    'tek' => [],
    'cift' => [],
];
for ($i = 0; $i < 10; $i++) {
    $indis = 'tek';
    if (($i % 2) === 0) {
        $indis = 'cift';
    }
    $dizi[$indis][] = $i;
}
// print_r($dizi);


/*
foreach ($dizi as $indis => $sayilar) {
    foreach ($sayilar as $sayi) {
        echo "{$sayi} {$indis} sayidir\n";
    }
}
*/



$yiyecekler = [
    'elma' => 'meyve',
    'armut' => 'meyve',
    'muz' => 'meyve',
    'marul' => 'sebze'
];
// Yiyecek isimleri turlerini ekrana yazdirmak icin asagidaki yontemi kullanabiliriz.
/*
foreach ($yiyecekler as $isim => $tur) {
    echo "{$isim} bir {$tur}dir.\n";
}
*/


$yiyecekler = [
    'meyveler' => ['elma', 'armut', 'muz'],
    'sebzeler' => ['marul', 'pırasa', 'brokoli'],
];
// Dongu icinde dogrudan ekrana yazdirirsak ikinci donuste hatali sonuc ekrana yazdirmis oluruz.
/*
$kullanicidan_gelen_bilgi = 'elma';
foreach ($yiyecekler as $tur => $ogeler) {
    if (in_array($kullanicidan_gelen_bilgi, $ogeler)) {
        echo "Belirttiginiz oge ({$kullanicidan_gelen_bilgi}) {$tur} listesinde.\n";
    } else {
        echo "Belirttiginiz oge listede yok.\n";
    }
}
*/
/**
 * Cikti:
 * 
 * Belirttiginiz oge (elma) meyveler listesinde.
 * Belirttiginiz oge listede yok.
 */





// Sadece ogeyi buldugumuzda buldugumuzu aklimizda tutarsak o zaman daha tutarli sonuc vermis oluruz.
$kullanicidan_gelen_bilgi = 'elma';
$sonuc = "Belirttiginiz oge listede yok.\n";
foreach ($yiyecekler as $tur => $ogeler) {
    if (in_array($kullanicidan_gelen_bilgi, $ogeler)) {
        $sonuc = "Belirttiginiz oge ({$kullanicidan_gelen_bilgi}) {$tur} listesinde.\n";
    }
}
// echo $sonuc; // Cikti: Belirttiginiz oge (elma) meyveler listesinde.


/**
 * Bir bilgiyi belirtilen dizi icerisinde arayip sayet bulur ise sonuc olarak ilgili bilginin indexini doner
 * Sayet bulamazsa o zaman false doner
 **/

// echo array_search(['elma', 'armut', 'muz'], $yiyecekler); // cikti: meyveler
// echo array_search('brokoli', $yiyecekler['sebzeler']); // cikti: 2

// var_dump(array_search('olmayan bir meyve', $yiyecekler['meyveler'])); // cikti: bool(false)

// sonsuz dongu
/*
while (true) {
}
*/

// dongu hic calismaz
/*
while (false) {
}
*/

// sonsuz dongu
/*
$isim = 'kadir';
while ($isim == 'kadir') {
}
*/

// dongu bir kere calisir
/*
$isim = 'kadir';
while ($isim == 'kadir') {
    echo "Isim: {$isim}\n";
    $isim = 'sadik';
}
*/

// 0'dan 20'ye kadar (20 dahil) sayilari ekrana yazdirma
/*
$i = 0;
while ($i <= 20) {
    echo $i . PHP_EOL; // "{$i}\n"
    $i++;
}
*/


/*
$uyeler = ['kadir', 'sadik', 'adem'];
$i = 0;
while ($i <= count($uyeler)) {
    echo "Uye adi: {$uyeler[$i]}\n";
    $i++;
}
*/



// bir kere calisir ve ekrana Test yazar. Cunku do while dongusu kosul saglanmasa bile en az bir kere calisir. Daha uygun ifade ile once kod calisip sonra kosul kontrol edildigi icin once kekrana yaziyi yazip ardindan kosulu kontrol ediyor.
/*
do {
    echo 'Test';
    # code...
} while (false);
*/



// sonsuz dongu
/*
do {
    $i = 0; // Cunku sayinin degerini her zaman 0'a esitliyoruz
    echo "Sayi {$i}\n";
    $i++;
} while ($i <= 10);
*/



// 0'dan 10'a kadar (10 dahil) sayilarin ekrana yazdirilmasi
$i = 0; // baslangic degerini 0 olarak al
do {
    echo "Sayi {$i}\n"; // ekrana yazdir
    $i++; // segeri 1'er 1'er artir
} while ($i <= 10); // sayi 10'a esit veya saha kucuk ise donguyu basa sar