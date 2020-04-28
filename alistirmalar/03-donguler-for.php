<?php

define(SADIK_TEST, "\n");

$mevsimler = array('ilkbahar', 'yaz', 'sonbahar', 'kış');

$mevsim_sayisi = count($mevsimler); 

for ($i=0; $i<$mevsim_sayisi; $i++) {
    echo $mevsimler[$i] . PHP_EOL . SADIK_TEST;
}

for ($i = 0; $i <= 100; $i += 2) {
    echo "Sayı {$i}\n";
}
