<?php

/**
 * for
 * foreach
 * while
 * do while
 */

for ($i = 0; $i <= 10; $i += 2) {
    // echo "Sayi {$i}\n";
}

// Sonsuz dongu
// for ($i = 0; $i <= 10; $i -= 2) { 
    // echo "Sayi {$i}\n";
// }

// for ($i = 10; $i >= 0; $i -= 2) { 
//     echo "Sayi {$i}\n";
// }

/**
 * 0'dan 10'a kadar olan sayilarin tek ve cift olarak ayristirilmasi
 */
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


foreach ($dizi as $indis => $sayilar) {
    foreach ($sayilar as $sayi) {
        echo "{$sayi} {$indis} sayidir\n";
    }
}