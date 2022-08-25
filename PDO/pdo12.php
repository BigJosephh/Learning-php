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
                INSERT INTO  : MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yeni bir kayit satiri ile birlikte
                verisini de / verilerini de eklemek icin kullanilir.
            */

            try {
                $VeritabaniBaglantisi = new PDO("mysql::host=localhost;dbname=Deneme;charset=UTF8", "root", "root");
                echo "Veritabanina Baglandi! " . "<br/>" . "<br/>";
            } catch (PDOException $HataMesaji) {
                echo "Veritabanina Baglanamadi! ";
                echo "Hata mesaji :" . $HataMesaji->getMessage();
                die();
            }
        
            $Ekle = $VeritabaniBaglantisi->query("INSERT INTO ozellikler (isim,yas,beceriler) values('Mustafa', '23', 'Bilgisayar Muhendisi') ");
            if($Ekle){
                echo "Kayit Eklendi! " . "<br/>";
            }else{
                echo "Kayit Eklenemedi! ";
            }

            $Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM ozellikler", PDO::FETCH_ASSOC);
            if($Sorgu){
                foreach($Sorgu as $Satirlar){
                    echo $Satirlar["id"] . " - " . $Satirlar["isim"] . " | " . $Satirlar["yas"] . " | " . $Satirlar["beceriler"] . "<br/>";
                }
            }else{
                echo "Veritabanina baglanamadi";
            }

            $VeritabaniBaglantisi = null;
        ?>
        
        <script src="" async defer></script>
    </body>
</html>