<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>P D O 3</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
    try {
        $VeritabaniBaglantisiBir = new PDO("mysql:host=localhost;dbname=Deneme;charset=UTF8", "root", "root");
        $VeritabaniBaglantisiIki = new PDO("mysql:host=localhost;dbname=phpDeneme;charset=UTF8", "root", "root");
        echo "Veritabani baglantilari kuruldu! <br/> ";
    } catch (PDOException $HataMesaji) {
        echo "Veritabani baglatisina baglanamadi! <br/> ";
        echo "veritabani icin hata aciklamasi  " . $HataMesaji->getMessage();
        die;
    }


    $VeritabaniBaglantisiBir = null;
    $VeritabaniBaglantisiIki = null;

    ?>
    <script src="" async defer></script>
</body>

</html>