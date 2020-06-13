<?php

final class OrnekSinif
{
    function ornekMetod()
    {
        return "Merhaba, bu cümle final class içerisindeki ornekMethod isimli sınıf tarafından döndürüldü.";
    }
}

$ornek = new OrnekSinif();
echo $ornek->ornekMetod();

/**
 * Final class lar extend edilemezler. Asagidaki kod blogu acik oldugu durumda uygulama calismayacaktir.
 **/
// class YeniOrnekSinif extends OrnekSinif
// {
//     function yeniOrnekMetod()
//     {
//         return "Merhaba, bu cümle YeniOrnekSinif sınıfı içerisindeki yeniOrnekMethod isimli sınıf tarafından döndürüldü.";
//     }
// }
