<!DOCTYPE html>
<!--PHP SWITCH CASE KULLANIMI-->

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yusuf Mert Dereli</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php

    /*

        swirch   =  Kosul baslat 
        case     =  Kosul kontrol el
        breat    =  Kosul kontrolunu sonlandir
        default  =  Kosul olumsuzluklari sonucu

        Yapisi :
        switch(Kosul){
            case Kontrol ifedesi:
                Kod bloklari
            break;
            default: (Butun kosullar olumsuuz donerse)
                Kod bloklari

        }

        */

    $deger = 44444440;

    switch ($deger) {
        case ($deger > 40) and ($deger < 35):
            echo "Kod basariyla calisti <br>";
            break;
        case $deger == 5000:
            echo "Kod calisti";
            break;
        case ($deger > 0) and ($deger < 40):
            echo "Kod basariyla calistiiiiii!!!!!!!! <br>";
            break;
        default:
            echo "Girdiginiz deger ( {$deger} ) gecersiz";
    }

    ?>
    <script src="" async defer></script>
</body>

</html>