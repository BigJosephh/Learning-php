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
                COUNT  : MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirilecek olan sutununun toplam kayit
                sayisini bulmak icin kullanilir.

                MIN    : MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirilecek olan sutununun en kucuk dege-
                rini bulmak icin kullanilir.

                MAX    : MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirilecek olan sutununun en buyuk dege-
                rini bulmak icin kullanilir.

                SUM    : MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirilecek olan sutununun tum kayit de-
                gerlerinin toplamini bulmak icin kullanilir.

                AVG    : MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirilecek olan sutununun tum kayit de-
                gerlerinin ortalamasini bulmak icin kullanilir.
            */

    try {
        $VeritabaniBaglantisi = new PDO("mysql::host=localhost;dbname=Deneme;charset=UTF8", "root", "root");
        echo "Veritabanina Baglandi! " . "<br/>" . "<br/>";
    } catch (PDOException $HataMesaji) {
        echo "Veritabanina Baglanamadi! ";
        echo "Hata mesaji :" . $HataMesaji->getMessage();
        die();
    }

    $Sorgu = $VeritabaniBaglantisi->query("SELECT MAX(urunfiyari) AS EnBuyukYas  FROM siparisler");
    if ($Sorgu) {
        $KayitSayisi = $Sorgu->rowCount();
        echo "Toplam Veri Sayisi : " . $KayitSayisi . "<br/>" . "<br/>";
        if ($KayitSayisi > 0) {
            $Kayit = $Sorgu->fetch();
            echo "Sitenin en kucuk yas degeri : " . $Kayit["EnBuyukYas"];
        } else {
            echo "h";
        }
    } else {
        echo "Sorgu islemi gerceklestirilemedi! ";
    }

    $VeritabaniBaglantisi = null;
    ?>
    <script src="" async defer></script>
</body>

</html>