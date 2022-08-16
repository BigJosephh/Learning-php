<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Function 7</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
    echo "Burasi noramal bir dongu yapisidir." . "<br/>" . "<br/>";

    $dongu = 1;
    while ($dongu <= 20) {
        echo $dongu . "<br/>";
        $dongu++;
    }

    echo "<br/>" . "<br/>" . "Burasi Recursive (Kendi kendini cagiran) fonksiyon yapisidir." . "<br/>" . "<br/>";

    function Hesapla($sayi)
    {
        if ($sayi <= 20) {
            echo $sayi . "<br/>";
            Hesapla($sayi + 1);
        }
    }

    Hesapla(1);
    ?>
    <script src="" async defer></script>
</body>

</html>