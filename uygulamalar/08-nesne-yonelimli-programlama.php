<?php

class Greengrocery
{
    const FRUIT_TYPES = ['Elma', 'Armut', 'Muz', 'Ayva'];
    protected $amounts = [
        'Elma' => 14.5,
        'Muz' => 16,
        'Armut' => 2,
    ];
    private $secret_information = 'Disaridan degistirilemez bir veri';
    private static $count = 10;
    protected static $test = 'test';
}

class Fruit extends Greengrocery
{
    private $name;
    public static $origin = 'Türkiye';

    public function __construct($name)
    {
        // var_dump($this::$count);
        if (!in_array($name, $this::FRUIT_TYPES)) {
            throw new \UnexpectedValueException("Lütfen geçerli bir meyve ismi belirtiniz.", 1);
        }
        $this->name = $name;
    }

    public function getAmount()
    {
        if (!isset($this->amounts[$this->name])) {
            throw new \Exception("Belirtmiş olduğunuz meynin fiyatı tanımlı değil.", 2);
        }
        return $this->amounts[$this->name];
    }
}

$fruit = new Fruit('Elma');

print_r(Fruit::FRUIT_TYPES);
var_dump(Fruit::$origin);
Fruit::$origin = "Türkiye'de Üretilmiştir";
var_dump(Fruit::$origin);
// var_dump(Greengrocery::$test); // Error

try {
    $fruit = new Fruit('Ayva'); // Bu noktadan sonra exception firlayacagi icin sonraki satirdaki fiyat bilgisi ekrana yazilmaz
    echo "Amasya Elması'nın Fiyatı: " . $fruit->getAmount();
} catch (\UnexpectedValueException $e) { // Firlayan hata bildigimiz bir hata turunden ise yakaladik
    if ($e->getCode() == 1) { // Hata kodu bilgidimiz bir hata kodu ise (exception in ikinci parametresinde verdigimiz kod) tekrar yeni bir meyve objesi olusturduk
        $fruit = new Fruit('Ayva');
        echo "Armudun Fiyatı: " . $fruit->getAmount();
    } else {
        echo $e->getMessage() . ' Hata Kodu: ' . $e->getCode();
    }
} catch (\Exception $e) {
    echo $e->getMessage() . ' Hata Kodu: ' . $e->getCode();
}

//KADİR

class arabalar
{

    protected $marka;
    protected $tarih;

public $ArabaFirma;

public function __construct($marka,$tarih)
{
    echo 'Yeni araba oluşturuldu\n';
    $this->setMarka($marka);
    $this->setTarih($tarih);    
}

public function ArabaBilgisi()
{

    echo 'Araba markası: '.$this->marka;
    echo 'Piyasaya çıktığı tarih'.$this->tarih;
}

public function setMarka($marka)
{
    $this->marka = $marka;
}
public function setTarih($tarih)
{
    $this->tarih = $tarih;
}
}

$arac1= new arabalar("Şahin", "25 KL 25");
$arac1->ArabaBilgisi();

$arac2= new arabalar ("Tofaş", "25 AKL 25");
$arac2->ArabaBilgisi();
