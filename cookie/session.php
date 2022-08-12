<?php
session_start();
?>
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
    /*
            session_start()  : session (oturum) baslatmak veya sessionlari (oturumlari) takip etmek icin kullanilir.!!! En ustte kullanilir!!!!
            session_destroy  : Daha onceden olusturulmus sessionlari (oturumlari) silmek icin kullanilir. 
        */

    $_SESSION["KullaniciAdi"] = "YUSUF";
    $_SESSION["KullaniciIkinciAdi"] = "MERT";
    $_SESSION["KullaniciSoyAdi"] = "DERE";
    $_SESSION["KullaniciSoyAdii"] = "LI";

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    ?>
    <script src="" async defer></script>
</body>

</html>