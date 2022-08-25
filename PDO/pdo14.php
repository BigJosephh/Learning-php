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
        prepare()            : MySQL sunucundaki database icerisinde bulunan herhangi bir tabloya yapilacak isleme gore query hazirlamak 
        icin kullanilir.
    
        bindParam()          :MySQL sunucundaki database icerisinde bulunan herhangi bir tabloya yapilacak isleme prepare() metodu kulla-
        nilarak hazirlanmis olan query'yi derlemek icin kullanilir.

        bindValue()          : MySQL sunucundaki database icerisinde bulunan herhangi bir tabloya yapilacak isleme prepare() metodu kulla-
        nilarak hazirlanmis olan query'yi derlemek icin kullanilir.

            PDO::PARAM_BOOL  : Boolen
            PDO::PARAM_NULL  : Null
            PDO::PARAM_INT   : Integer
            PDO::PARAM_STR   : String

        execute()            : MySQL sunucundaki database icerisinde bulunan herhangi bir tabloya yapilacak isleme prepare() metodu kulla-
        nilarak hazirlanmis olan query'yi derlemek icin kullanilir.

        fetch()              : MySQL sunucundaki database icerisinde bulunan herhangi bir tablonun tekil veri okuma islemi icin prepare()
        metodu kullanilarak hazirlanmis, execue() metodu kullanilarak calistirilmis ve sonuclari ilinmis olan query'nin verilerini okumak
        icin kullanilir. Ayrica islenilirse verilere erisim seklide verilebilir.

        fetchAll()           : ySQL sunucundaki database icerisinde bulunan herhangi bir tablonun cogul veri okuma islemi icin prepare()
        metodu kullanilarak hazirlanmis, execue() metodu kullanilarak calistirilmis ve sonuclari ilinmis olan query'nin verilerini okumak
        icin kullanilir. Ayrica islenilirse verilere erisim seklide verilebilir.

            FETCH_ASSOC       : Tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide ilgili tablonun sutun isilmeri dizinin
            anahtari olarak tanimlanir ve ilgili verilere sutun isimleri ile erisilir.

            FETCH_NUM         : Tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide dizinin anahtarlari PHP tarafindan
            otomatik olarak tanimlanir (0,1,2,3...) ve ilgili verilere sutun sira numarasi ile erisilir.

            FETCH_BOTH        : Tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide dizinin anahtarlari hem ilgili tablonu
            sutun isimleri ile heme PHP tarafindan otomatik olarak tanimlanir. (0,1,2,3...) ve ilgili verilere sutun sira numarasi 
            ile erisilir.

            FETCH_OBJ         : Tablonun verilerini okuma islemi sirasinda olusturulacak olan nesnede ilgili tablonun sutun isimleri nesne-
            nin ozellikleri olarak tanimlanir ve ilgili verilere sutun isimleri ile erisilir.
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