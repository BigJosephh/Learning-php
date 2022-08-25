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
                rowCount()   : MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun toplam kayit sayisini bulmak veya
                islem yapildiginda etkilenen kayit sayisini bulmak icin kullanilir.
            */

    try {
        $VeritabaniBaglantisi = new PDO("mysql::host=localhost;dbname=Deneme;charset=UTF8", "root", "root");
        echo "Veritabanina Baglandi! " . "<br/>" . "<br/>";
    } catch (PDOException $HataMesaji) {
        echo "Veritabanina baglanamadi! : " . "<br/>";
        echo "Hata Mesaji : " . $HataMesaji->getMessage();
        die();
    }

    $Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM users", PDO::FETCH_OBJ); 
    if ($Sorgu) {
        $KayitSayisi = $Sorgu->rowCount();
        echo  "Toplam kayit sayisi : " . $KayitSayisi;
    } else {
        echo "Sorgu islemi gerceklestirilemedi! ";
    }

    $VeritabaniBaglantisi = null;
    ?>
    <script src="" async defer></script>
</body>

</html>