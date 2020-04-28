<?php
function Islemler($sayi1,$sayi2,$i=1) {
	switch($i) {
		case 1:
			return $sayi1+$sayi2;
		case 2:
			return $sayi1-$sayi2;
		case 3: 
			return $sayi1*$sayi2;
		case 4:
		return $sayi1/$sayi2;
		default:
			return "Geçersiz işlem.";
	
	}

    $islem = 1;
}
$sayi11 = 20;
$sayi22 = 400;

echo( Islemler($sayi11,$sayi22));

