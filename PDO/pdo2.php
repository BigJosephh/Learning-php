<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>P D O 2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php

    /*
                PDO()           : Kendisine verilen parametreler dogrultusunda, MySQL sunucusunda yeni bir baglanti acmak icin kullanilir.
                PDO()Exception  : MySQL sunucusunda yeni bir baglanti acma islemi sirasinda olasi bir hata ile karsilasmasi durumunda haayi
                                  yakalamak icin kullanilir
                getMessage()    : MySQL sunucusunda yeni bir baglanti acma islemi sirasinda olasi bir hata ile karsilasmasi durumunda hata
                                  aciklama degeri bularak, buldugu degeri geriye dondurur.
            */


    try {
        // Hata olabicek veya yanlis caslisabileceginden suphelendigimiz kod bloklarini buraya yazariz.
        $VeritabaniBalantisi = new PDO("mysql:host=localhost;dbname=deneme;charset=UTF8", "root", "root");
        echo "Veritabanina baglanti kuruldu";
    } catch (PDOException $HataMesaji) {
        // Yukarida yakalanan haanin duzeltilmesi icin yazilir.
        echo "Hata aciklamasi : " . $HataMesaji->getMessage();
        die;
    }


    echo "<pre>";
    print_r($VeritabaniBalantisi);
    echo "<pre>";

    $VeritabaniBalantisi = null;
    ?>
    <script src="" async defer></script>
</body>

</html>