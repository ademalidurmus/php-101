<?php

function fonksiyonIsmi($parametre, $bir_diger_parametre)
{
    // Yapilacak islemler
}

function yasHesaplama($dogum_tarihi)
{
    $diff = neKadarZamanGecti($dogum_tarihi);
    return $diff->format("%y"); // belirtilen tarih ile simdiki zaman arasinda kac yil oldguunu soyler
}

function neKadarZamanGecti($tarih)
{
    return date_diff(date_create($tarih), date_create()); // Belirtilen tarih ile simdiki zaman arasindaki farki soyleyecek date_diff objesini olusturur.
}
// $yas = yasHesaplama('2019-02-02');
// echo "Bugun itibariyle yasiniz: {$yas}\n";
// $yas = yasHesaplama('1995-02-02');
// echo "Bugun itibariyle yasiniz: {$yas}";

/**
 * Sayet fonksiyon kullanmasaydik ve yas hesaplamak isteseydik
 **/
// $diff = date_diff(date_create('2019-02-02'), date_create());
// $yas = $diff->format("%y");
// echo "Bugun itibariyle yasiniz: {$yas}\n";
// $diff = date_diff(date_create('2019-02-02'), date_create());
// $yas = $diff->format("%y");
// echo "Bugun itibariyle yasiniz: {$yas}\n";

function isimleriDoldur($musteri_adi, $temsilci_adi)
{
    global $sablon; // Fonksiyon disinda tanimlanmis bir degikeni fonksiyon icerisinde kullanabilmek uzere cagiriyoruz.
    return sprintf($sablon, $musteri_adi, $temsilci_adi); // Verilen parametreleri belirtilen sablona sirasi ile uyguluyoruz.
}
$sablon = "Merhaba, %s. Ben %s, sana nasil yardimci olabilirim?"; // Degisken fonksiyondan sonra tanimlanmis olsa dahi fonksiyon icerisinde kullanilabiliyor.
// echo isimleriDoldur('Sadık', 'Kadir'); // Degiskenleri belirtip ilgili sablona uygun cumle olusturulmasi icin fonksiyonu kullandik.

/**
 * Fonksiyonun aldigi parametrelerin veri tipini asagidaki sekilde sinirlandirabilirsiniz.
 */
function veriTipiBelirtilmisFonksiyon(string $degisken_ismi, int $diger_parametre)
{
    // code...
}
veriTipiBelirtilmisFonksiyon('test', 25);
// veriTipiBelirtilmisFonksiyon(['test'], 25); // ilk parametrenin string veri tipinde olmasi gerekirken array olarak verdigimiz icin hata verir.

function varsayilanDegereSahipParametre(string $isim, int $dogum_yili = null)
{
    $metin = "Merhaba, {$isim}.";
    if (!is_null($dogum_yili)) {
        $metin .= " {$dogum_yili} yilinda dogdum demistin, degil mi?";
    }
    echo $metin;
}
// varsayilanDegereSahipParametre('Sadık'); // Merhaba, Sadık.
// varsayilanDegereSahipParametre('Kadir', 1995); // Merhaba, Kadir. 1995 yilinda dogdum demistin, degil mi?
