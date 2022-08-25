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



                          //   ....................  UPDATE KODLARINI YAZMAK ICIN TEKRAR BURAYA DON ..............







            /*
                REPLACE  : MySQL sunucusundaki database icersinde bulunun herhangi bir tabloun herhangi bir kaydini iceren satirindaki /
                satirlarindaki sutuna ait veriyi tam veya kismi olarak degistirmek icin kullanilir.
            */

            try {
                $VeritabaniBaglantisi = new PDO("mysql::host=localhost;dbname=Deneme;charset=UTF8", "root", "root");
                echo "Veritabanina Baglandi! " . "<br/>" . "<br/>";
            } catch (PDOException $HataMesaji) {
                echo "Veritabanina Baglanamadi! ";
                echo "Hata mesaji :" . $HataMesaji->getMessage();
                die();
            }
                      
            $VeritabaniBaglantisi = null;
        ?>
        <script src="" async defer></script>
    </body>
</html>