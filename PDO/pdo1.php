<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>P D O 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php

    /*
                getAvilableDrivers()  :PHP yazlimlari icerisinde sisteme tanimli olan ve kullanilabilir PDO sureculeri listesini bulur ve 
                buldugu degerlerden yeni birliste olusturarak,olusturdugu degeri geriye dondurur.
            */
    $degerler = PDO::getAvailableDrivers();
    echo "<pre/>";
    print_r($degerler);
    echo "<pre/>";
    ?>
    <script src="" async defer></script>
</body>

</html>