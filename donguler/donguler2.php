<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
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
        do while = donguyu baslatir

        Yapisi:

        do{
            Kod Bloklari
        }while(Kosul ifadesi);
        
        */


    $sayilar = 1;
    $rakam = 1;

    while ($sayilar < 30) {
        echo "merhabalar" . "<br/>";
        $sayilar++;
    }

    do {
        echo "merhabalarrrrrr" . "<br/>";
        $rakam++;
    } while ($rakam < 30);


    ?>

    <script src="" async defer></script>
</body>

</html>