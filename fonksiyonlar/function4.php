<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Function 4</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php

    function TABLO($isim, $soyisim, $sehir, $meslek, $yas)
    {
        $Gelen_isim = $isim;
        $Gelen_soyisim = $soyisim;
        $Gelen_sehir = $sehir;
        $Gelen_meslek = $meslek;
        $Gelen_yas = $yas;

        $Kisi_Karti = "Adi :" . $Gelen_isim . "<br/>" . "Soyisim :" . $Gelen_soyisim . "<br/>" . "Sehir :" . $Gelen_sehir . "<br/>" . "Meslek: :" . $Gelen_meslek . "<br/>" . "Yas :" . $Gelen_yas;
        echo $Kisi_Karti;
    }

    TABLO("ahmet", "dereli", "konya", "doktor", 20);

    ?>
    <script src="" async defer></script>
</body>

</html>