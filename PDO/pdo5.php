<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>P D O 5</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
    /*
                query()    : MySQL sunucusuna PDO ile acilmis olan baglanti dahilinde yeni bir sorgu islemi yapmak icin kullanilir. Ayrica 
                istenilirse sorgu islemi sonucunda donen tum veri degerlerini bulur ve buldugu degerlerden yeni bir dizi olusturarak,
                olusturdugu dizi degerini geir dondurur.

                fetch()    : MySQL sunucusundaki databse icerisinde bulunan herhalde bir tablonun tekil veri okuma islemi icin query metodu
                kullanilarak hazirlanmis olan query'in verilerini okumak icin kulanilir. Ayrica istenilirse veriele erisim seklide be-
                lirtilebilir

                fetchAll() : MySQL sunucusundaki databse icerisinde bulunan herhalde bir tablonun cogul veri okuma islemi icin query metodu
                kullanilarak hazirlanmis olan query'in verilerini okumak icin kulanilir. Ayrica istenilirse veriele erisim seklide be-
                lirtilebilir

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
        $VeritabaniBaglantisi = new PDO("mysql::host=localhost;dbname=Deneme;charset=UTF8", "root", "root");
        echo "Verotabanina Baglandi! ";
    } catch (PDOException $HataMesaji) {
        echo "Veritabanina baglanamadi! : " . "<br/>";
        echo "Hata Mesaji : " . $HataMesaji->getMessage();
        die();
    }

    $Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM users"); // ("SELECT isim,yas FROM id") => bu sekilde yaparsak id tablosunda sadece isim ve yas degerlerinialir.
    if ($Sorgu) {
        foreach ($Sorgu as $Satirlar) {
            echo "<pre>";
            print_r($Satirlar);
            echo "</pre>";
        }
    } else {
        echo "Sorgu islemi gerceklestirilemedi! ";
    }


    $Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM users"); // ("SELECT isim,yas FROM id") => bu sekilde yaparsak id tablosunda sadece isim ve yas degerlerinialir.
    if ($Sorgu) {
        foreach ($Sorgu as $Satirlar) {
            echo "Kullanici Adi : " . $Satirlar["kullaniciadi"] . "<br/>";
            echo "Kullanici Sifresi : " . $Satirlar["sifre"] . "<br/>";
            echo "Emailadresi : " . $Satirlar["emailadresi"] . "<br/>";
            echo "Adi Soyadi : " . $Satirlar["adisoyadi"] . "<br/>";
            echo "Kayit Tarihi: " . $Satirlar["kayittarihi"] . "<br/>";

        }
    } else {
        echo "Sorgu islemi gerceklestirilemedi! ";
    }

    $VeritabaniBaglantisi = null;

    ?>
    <script src="" async defer></script>
</body>

</html>