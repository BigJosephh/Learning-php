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

    function ParaBirimi($Birim, $Tutar)
    {
        if ($Birim == "Turk Lirasi") {
            $Kur = 1;
        } elseif ($Birim == "Amerikan Dolari") {
            $Kur = 17.95;
        } elseif ($Birim == "Euro") {
            $Kur = 18.24;
        }

        return Hesapla($Kur, $Tutar);
    }

    function Hesapla($Alinan_Kur, $Alinan_Tutar)
    {
        $sonuc = $Alinan_Kur * $Alinan_Tutar;
        echo $sonuc;
    }

    ParaBirimi("Euro", 1000);
    ?>
    <script src="" async defer></script>
</body>

</html>