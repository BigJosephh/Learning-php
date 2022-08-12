<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>O O P</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php

    /*
                class  : Herhangi bir programlamada belirli bir veya daha fazla isi gerceklestirmek uzere onceden hazirlanan nesnelere verilen isimdir.
                new    : Daha onceden tanimlanmis olan herhangi bir sinifi cagirmak icin kullanilir.

                Kurallar  :
                1.Sinif isimleri her zaman anlamli olarak kullanilmalidir.
                2.Sinif isimleri icerisinde alfanumeril degerler (a-z A-Z 0-9) ve _(alt cizgi) kullanilabilir.
                3.Sinif isimleri mutlaka bir harf veya _(alt cizgi) ile baslamalidir.
                4.Sinif isimleri hicbir zaman bir rakam ile baslamaz.
                5.Sinif isimleri icersinde hicbir zaman bosluk, turkce karakter ve ozel karakterler kullanilmaz.
                6.Sinif isimleri tanimlanirken, PHP tarafinda kullanilmakta olan isimler / tanimlar kullanilmaz.
                7.Sinif isimleri hicbir zaman birden fazla kez kullanilmaz.(namespace (isim uzayi) durumu kullanilmasi durumunda birden fazla kez kullanilabilir)
                8.Sinif isimleri kucuk fark / buyuk harf duyarli degildir.
                9.Sinif isimleri kapsama / etki alani kurallarina tabidir.

                Yapisi :
                class Isim(){
                    Kod Bloklari;
                }
            */

    class IsimSoyisim
    {
        public $isim = "Yusuf Mertttttttttt";
        public const soyisim = "Dereli";
    }

    $sonuc = new IsimSoyisim;

    echo $sonuc->isim . "<br/>";
    echo IsimSoyisim::soyisim . "<br/>";
    // Eger class icerisinde const ile yani sabit ile tanimladiysak bunu iki tane noktali virgille yazdiriyoruz (cagiriyoruz).

    /* Eger class icerisinde degisteken tanimladiyak en basta classi callsin disinda bir degistene atiyoruz sonrasinda 
            $degistenismi-> class icindeki degisken ismi seklinda yaziyoruz */

    class Deneme
    {
        public function Egitim()
        {
            $yazi = "napan laagggggg";
            return $yazi;
        }
    }

    $deger = new Deneme;
    $metin = $deger->Egitim();
    echo $metin;
    ?>
    <script src="" async defer></script>
</body>

</html>