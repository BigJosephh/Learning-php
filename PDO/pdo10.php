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
                INNER JOIN      : MySQL sunucusundaki database icerisinde bulunan herhalde iki veya daha fazla tablonun eslesen degerle-
                rinin birbiri ile iliskilendirilmesi icin kullanilir.

                LEFT JOIN       : MySQL sunucusundaki database icerisinde bulunan herhalde iki veya daha fazla tablonun soldaki tabloya
                gore birbiri ile iliskilendirilmesi icin kullanilir.

                RIGHT JOIN      : MySQL sunucusundaki database icerisinde bulunan herhalde iki veya daha fazla tablonun sagdaki tabloya
                gore birbiri ile iliskilendirilmesi icin kullanilir.

                NATURAL JOIN    : MySQL sunucusundaki database icerisinde bulunan herhalde iki veya daha fazla tablonun eslesen degerle-
                rinin birbiri ile otomatik iliskilendirilmesi icin kullanilir.

                USING           : MySQL sunucusundaki database icerisinde bulunan herhalde iki veya daha fazla tablonun birbirleri ile
                iliskilendirilmesi sirasinda ortak sutun kosulunu tanimlamak / belirtmek icin kullanilir.

                ON              : MySQL sunucusundaki database icerisinde bulunan herhalde iki veya daha fazla tablonun birbirleri ile
                iliskilendirilmesi sirasinda sutun kosulunu tanimlamak / belirtmek icin kullanilir.
            */

    try {
        $VeritabaniBaglantisi = new PDO("mysql::host=localhost;dbname=Deneme;charset=UTF8", "root", "root");
        echo "Veri tabanindasiniz! " . "<br/>" . "<br/>";
    } catch (PDOException $Hata) {
        echo "Veritabanina baglanamadi!";
        echo "Hata Mesaji : " . $Hata->getMessage();
        die();
    }

    $Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM users INNER JOIN siparisler ON users.id = siparisler.uyeid", PDO::FETCH_ASSOC);
    if ($Sorgu) {
        $KayitSayisi = $Sorgu->rowCount();
        if ($KayitSayisi > 0) {
            foreach ($Sorgu as $Satirlar) {
                echo $Satirlar["id"] . " | " .  $Satirlar["kullaniciadi"] . " | " .  $Satirlar["sifre"] . " | " . $Satirlar["emailadresi"]
                    . " | " . $Satirlar["adisoyadi"] . " | " . $Satirlar["kayittarihi"] . " | " . $Satirlar["onaydurumu"] . " | "
                    . $Satirlar["yoneticiaciklamasi"] . $Satirlar["uyeid"] . " | " . $Satirlar["urunadi"] . " | "
                    . $Satirlar["urunfiyari"] . "<br/>" . "<br/>";
            }
        } else {
            echo "Kayit sayisi bulunamadi! ";
        }
    } else {
        echo " Sorgu calismadi! ";
    }

    $Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM users LEFT JOIN siparisler ON users.id = siparisler.uyeid", PDO::FETCH_ASSOC);
    if ($Sorgu) {
        $KayitSayisi = $Sorgu->rowCount();
        if ($KayitSayisi > 0) {
            foreach ($Sorgu as $Satirlar) {
                echo $Satirlar["id"] . " | " .  $Satirlar["kullaniciadi"] . " | " .  $Satirlar["sifre"] . " | " . $Satirlar["emailadresi"]
                    . " | " . $Satirlar["adisoyadi"] . " | " . $Satirlar["kayittarihi"] . " | " . $Satirlar["onaydurumu"] . " | "
                    . $Satirlar["yoneticiaciklamasi"] . $Satirlar["uyeid"] . " | " . $Satirlar["urunadi"] . " | "
                    . $Satirlar["urunfiyari"] . "<br/>" . "<br/>";
            }
        } else {
            echo "Kayit sayisi bulunamadi! ";
        }
    } else {
        echo " Sorgu calismadi! ";
    }


    $VeritabaniBaglantisi = null;
    ?>
    <script src="" async defer></script>
</body>

</html>