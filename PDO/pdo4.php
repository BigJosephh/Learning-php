<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>P D O 4</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
    /*
                exec()  : MySQL sunucusuna PDO ile acilmis olan baglanti dahilinde yeni bir sorgu islemi yapmak icin kullanilir. Ayrica 
                istenilirse sorgu isleminde etkilenen kayit sayisini bulmak icin kullanilir.

                query() :MySQL sunucusuna PDO ile acilmis olan baglanti dahilinde yeni bir sorgu islemi yapmak icin kullanilir. Ayrica 
                istenilirse sorgu islemi sonucunda donen tum veri degerlerini bulur ve buldugu degerlerden yeni bir dizi olusturarak,
                olusturdugu dizi degerini geir dondurur.

                FETCH_ASSOC : Tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide ilgili tablonun sutun isilmeri dizinin
                anahtari olarak tanimlanir ve ilgili verilere sutun isimleri ile erisilir.

                FETCH_NUM   : Tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide dizinin anahtarlari PHP tarafindan
                otomatik olarak tanimlanir (0,1,2,3...) ve ilgili verilere sutun sira numarasi ile erisilir.

                FETCH_BOTH  : Tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide dizinin anahtarlari hem ilgili tablonu
                sutun isimleri ile heme PHP tarafindan otomatik olarak tanimlanir. (0,1,2,3...) ve ilgili verilere sutun sira numarasi 
                ile erisilir.

                FETCH_OBJ   : Tablonun verilerini okuma islemi sirasinda olusturulacak olan nesnede ilgili tablonun sutun isimleri nesne-
                nin ozellikleri olarak tanimlanir ve ilgili verilere sutun isimleri ile erisilir.
                
            */

    try {
        $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=deneme;charset=UTF8", "root", "root");
        echo "Veritabanina baglanti kuruldu! ";
    } catch (PDOException $HataMesaji) {
        echo "Veritabanina baglanti kurulamadi! ";
        echo "Hata aciklamasi : " . $HataMesaji->getMessage();
        die();
    }

    $Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM ID", PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($Sorgu);
    echo "</pre>";

    $VeritabaniBalantisi = null;
    ?>
    <script src="" async defer></script>
</body>

</html>