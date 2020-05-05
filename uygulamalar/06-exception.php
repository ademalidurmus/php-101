<?php

try {
    $kullanicidan_gelen_sayi = 'Ahmet';

    if (!is_numeric($kullanicidan_gelen_sayi)) {
        throw new \Exception('Hooop sayi numerik olmali');
    }

    echo 'Girmis oldugunuz sayi numeriktir.';
} catch (\Exception $e) {
    echo 'Hata olustu Hata: ' . $e->getMessage();
}
