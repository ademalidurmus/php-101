<?php

$padisah = array();
$padisah['Adı'] = 'Fatih sultan mehmet';
$padisah['Görevi'] = 'Ülke yönetme';
$padisah['Başarısı'] = 'İstanbul fethi';

foreach ($padisah as $isim => $deger) {
   echo "{$isim}: {$deger}\n";
}

$dizi = array("Adi" => "Sadik", "Soyadi" => "ortaoglan", "Site" => "www.forumkktc.com");

foreach ($dizi as $key => $value) {
	echo "$key: $value <br/>";
}
