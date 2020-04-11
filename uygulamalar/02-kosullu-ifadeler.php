<?php

$yil = "2021";
if ((int) $yil === 2021) {
    // echo 'Yil 2021';
} elseif ($yil === 2020) {
    // echo 'Yil 2020';
} else {
    // echo 'Yil 2020 veya 2021 degil';
}


// $degisken = 'ornek';
// switch ($degisken) {
//     case 'ornek-1':
//         echo 'Örnek 1';
//         break;

//     case 'ornek-2':
//         echo 'Örnek 2';
//         break;
    
//     default:
//         echo 'Bilinmeyen ornek';
//         break;
// }

$kosul = (1 == '1');
switch ($kosul) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

$metin = "Merhabsa, ornsek kullanima hosgeldisniz.";
switch (true) {
    case (stristr($metin, 'Merhaba')):
        echo "Cumlenin icerisinde Merhaba geciyor.\n";
        if (stristr($metin, 'ornek')) {
            echo "Cumlenin icerisinde ornek geciyor.\n";
        }
    case (stristr($metin, 'hosgeldiniz')):
        echo "Cumlenin icerisinde hosgeldiniz geciyor.\n";
        break;

    default:
        echo "Eslesen kelime bulunamadi.\n";
        break;
}


