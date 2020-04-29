<?php
function HelloWorld($sayi) {
	for($i=1;$i<=$sayi;$i++) {
		echo 'Merhaba Dünya'."\n";
	

    }

}

HelloWorld(5);

/* Kadir'in yaptığı yer.
function toplam()
{
	$cevap = 0;
	for($sayi = 0; $sayi <= 10; $sayi++){
		
	$cevap = $cevap + $sayi;
	
	}	
	echo "CEVABINIZ=$cevap";
}
toplam();

//Çift sayıyı bulduk
function deger(){
	
	$sayi=2;
	if($sayi%2==0){
		return "Sayı Çift'tir.";
	}
	else{
		return "Sayı Tek'tir.";
		
	}
}

echo deger();

//Tek sayıyı bulduk
function deger(){
	
	$sayi=5;
	if($sayi%2==0){
		return "Sayı Çift'tir.";
	}
	else{
		return "Sayı Tek'tir.";
		
	}
}

echo deger();
*/