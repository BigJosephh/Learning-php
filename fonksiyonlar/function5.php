<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php

    /*
            func_num_args    : Fonksiyona gonderilen parametre sayisini buklmak icin kullanilir.
            func_get_args    : Fonksiyona gonderilen parametre degerlerini alarak yeni bir olursturmak icin kullanilir.
            func_get_arg     : Fonksiyona gonderilen parametre degerlerini bir dizi olarak kabul ederek, belirtilecek olan anahtara ait elemanin 
                               degerini dondurmek icin kullanilir.

        */

    function BILGILER()
    {
        $gelen_parametre_sayisi = func_num_args();
        echo "Fonksiyona gelen parametre sayisi :" . " " . $gelen_parametre_sayisi . "<br/>";

        $gelen_parametre_degeri = func_get_args();

        echo "<pre/>";
        print_r($gelen_parametre_degeri);
        echo "<pre/>";

        $gelen_parametre_anahtari = func_get_arg(3);

        echo $gelen_parametre_anahtari;
    }

    BILGILER("ahmet", "mehmet", "memet", "mehmakjsdasdsdkjsandasdkjnt", "me3measdasdasdsdsdt", "mhmet", "ehmet", "mehmet");

    ?>
    <script src="" async defer></script>
</body>

</html>