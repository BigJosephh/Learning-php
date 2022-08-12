<!DOCTYPE html>
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

    array_unshift()  : Dizinin en basina yeni eleman vey elemanlar eklemek icin kullanilir.Ayni zamanda eklenecek olan eleman 
    veya elemanlarin dizeye dahil edilmesi ile dize icerigindeki toplam eleman sayisi degerini geriye dondurur
    array_push()     : Dizinin en sonuna yeni eleman vey elemanlar eklemek icin kullanilir.Ayni zamanda eklenecek olan eleman 
    veya elemanlarin dizeye dahil edilmesi ile dize icerigindeki toplam eleman sayisi degerini geriye dondurur
    
    */

    $ISIMLER = array("bir"  => "yusuf", "iki" => "mert", "uc" => "dereli");

    echo "<pre>";
    print_r($ISIMLER);
    echo "<pre>";

    array_unshift($ISIMLER, "BIGJOSEPH");

    echo "<pre>";
    print_r($ISIMLER);
    echo "<pre>";


    ?>

    <script src="" async defer></script>
</body>

</html>