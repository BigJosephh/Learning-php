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
                LIMIT     : MySQL sunucusunda database icerisinde bulunan herhangi bir tablonun islem esnasinda tum verilerini islemek
                yerine sadece belirtilen adet veya aralik kadar islemek istenildigini belirtmek icin kullanilir.

                ORDER BY  : MySQL sunucusunda database icerisinde bulunan herhangi bir tablonun verilerine islem esnasinda hangi sira 
                veya siralar dahilinde erisilmek istenildigini belirtmek icin kullanilir.
            */

            try {
                $VeritabaniBaglantisi = new PDO("mysql::host=localhost;dbname=Deneme;charset=UTF8", "root", "root");
                echo "Veri tabanindasiniz! " . "<br/>" . "<br/>";
            } catch (PDOException $Hata) {
                echo "Veritabanina baglanamadi!";
                echo "Hata Mesaji : " . $Hata->getMessage();
                die();
            }

            $Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM id LIMIT 31", PDO::FETCH_ASSOC);
                if ($Sorgu) {
                    foreach ($Sorgu as $Satirlar) {
                        echo "Kullanici Adi : " . " | " . $Satirlar["kullaniciadi"] . "<br/>";
                        echo "Kullanici Sifresi : " . " | " . $Satirlar["sifre"] . "<br/>";
                        echo "Emailadresi : " . " | " . $Satirlar["emailadresi"] . "<br/>";
                        echo "Adi Soyadi : " . " | " . $Satirlar["adisoyadi"] . "<br/>";
                        echo "Kayit Tarihi: " . " | " . $Satirlar["kayittarihi"] . "<br/><br/><br/>";
                    }
                }else{
                    echo "Sorguda hata var";
                }

            $VeritabaniBaglantisi = null;

    ?>
    <script src="" async defer></script>
</body>

</html>