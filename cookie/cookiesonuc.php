<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $gelenadi = $_POST["Isim"];
    $gelensoyadi = $_POST["Soyadi"];

    $gecerliliksuresi = time() + 86400;

    setcookie("ad", "$gelenadi", $gecerliliksuresi);
    setcookie("soyad", "$gelensoyadi", $gecerliliksuresi);



    ?>

    <a href="a3.php">Diger Sayfaya Git</a>

</body>

</html>