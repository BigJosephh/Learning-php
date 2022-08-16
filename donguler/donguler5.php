<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DONGULER 5</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php

    /*

        break : Dongunun calismasini durdurmak ici kullanilir.

        */

    $degisken = 1;

    while ($degisken <= 40) {
        echo $degisken . "<br/>";
        $degisken++;

        if ($degisken % 10 == 0) {
            echo "Sayinin 10 a bolumunden kadan sifirdir.";
        }

        if ($degisken % 25 == 0) {
            echo "Sayinin 25 e bolumunden kadan sifirdir.";
            break;
        }
    }

    ?>
    <script src="" async defer></script>
</body>

</html>