<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Function 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php

    /*

    Fonksiyon : Herhangi bir programlamada belirli bir veya daha fazla isi gerceklestirmek uzere onceden hazirlanan kucuk pronram parcaciklarina verilen isimdir.
    Kurallar  :
    1.Fonksiyon isimleri her zaman anlamli olarak kullanilmalidir.
    2.Fonksiyon isimleri icerisinde alfanumeril degerler (a-z A-Z 0-9) ve _(alt cizgi) kullanilabilir.
    3.Fonksiyon isimleri mutlaka bir harf veya _(alt cizgi) ile baslamalidir.
    4.Fonksiyon isimleri hicbir zaman bir rakam ile baslamaz.
    5.Fonksiyon isimleri icersinde hicbir zaman bosluk, turkce karakter ve ozel karakterler kullanilmaz.
    6.Fonksiyon isimleri tanimlanirken, PHP tarafinda kullanilmakta olan isimler / tanimlar kullanilmaz.
    7.Fonksiyon isimleri hicbir zaman birden fazla kez kullanilmaz.
    8.Fonksiyon isimleri kucuk fark / buyuk harf duyali degildir.
    9.Fonksiyon isimleri kapsama / etki alani kurallarina tabidir.

    Yapisi    :
    function Isim(Parametre veya Parametreler){
        Kod Bloklari
    }
    */
    $degisken = "Yusuf Mert Dereli";
    $degisken2 = "Bilgisayar Muhendisi";

    function YaziYaz()
    {
        global $degisken;
        global $degisken2;

        echo $degisken . " - " . $degisken2;
    }

    YaziYaz();

    ?>
    <script src="" async defer></script>
</body>

</html>