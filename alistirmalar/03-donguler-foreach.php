<?php

$padisah = array();
$padisah['Adı'] = 'Fatih sultan mehmet';
$padisah['Görevi'] = 'Ülke yönetme';
$padisah['Başarısı'] = 'İstanbul fethi';

foreach ($padisah as $isim => $deger) {
   echo "{$isim}: {$deger} <br>";
}

$dizi = array("Adi" => "Sadik", "Soyadi" => "ortaoglan", "Site" => "www.forumkktc.com");

foreach ($dizi as $key => $value) {
	echo "$key: $value <br/>";
}



/* Kadir'in yaptığı yer.
$sayilar=array(3, 5, 7, 9, 11);
$toplam = 0;

foreach($sayilar as $sayi){
$toplam = $toplam + $sayi;
}

echo $toplam;
*/
