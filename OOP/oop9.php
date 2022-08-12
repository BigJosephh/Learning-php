<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>O O P 9</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
    /*
            trait       : Siniflar icin ozellik ve method gruplarinin olusturulmasi icin kullanilir.
            use         : Daha onceden tanimlanmis olan ozellik veya metod grubunu, ilgili sinifa tanimlamak / uygulamak icin kullanilir.
            insteadof   : Sinif icin tanimlanmis olan ozellik veya metod grublarinda tercih / secim islemleri icin kullanilir.
            as          : Siniflar icin tanimlanmis olan ozellik ve metod grublarinda / metoda takma isim belirlemek veya gorunurluk atama islemleri icin kullanilir. 
        */

    trait AdSoyad
    {
        public $Isim    = "YUSUF MERT";
        public $SoyIsim = "DERELI";

    }
    trait Bilgi
    {
        public function Tanimlar()
        {
            $metin = "Merhabalar bugun gunlerden carsamba";
            return $metin;
        }
    }

    class Deneme
    {
        use AdSoyad, Bilgi;
    }

    $yazdir = new Deneme;

    echo $yazdir->Isim . " ";
    echo $yazdir->SoyIsim . "<br/>";
    echo $yazdir->Tanimlar();

    ?>
    <script src="" async defer></script>
</body>

</html>