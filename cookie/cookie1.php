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
    // setcookie()   : Belirtilecek olan degerler dogrultusunda cookie (cerez) olusturmak veya silmek icin kullaniir.
    // Parametreler  : 1.Parametre -> Cereza adi, 2.Parametre -> Cerez Degeri, 3.Parametre -> Cerez Yasam Degeri.

    $YasamSuresi = time() + (60 * 60 * 5);
    setcookie("KullaniciAdi", "Yusuf Mert", $YasamSuresi);
    setcookie("KullaniciSoyadi", "Dereli", $YasamSuresi);
    setcookie("MeslekAdi", "Bilgisayar Muhendisi", $YasamSuresi);

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    ?>
    <script src="" async defer></script>
</body>

</html>