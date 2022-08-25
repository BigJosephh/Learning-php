<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    try {
        $VeritabaniBaglantisi = new PDO("mysql::host=localhost;dbname=Deneme;charset=UTF8", "root", "root");
        //echo "Veritabanina bagland! " . "<br/>";
    } catch (PDOException $Hata) {
        echo "Veritabanina baglanamadi! " . "<br/>";
        echo "Veritabani Hatasi : " . $Hata->getMessage(); 
        die();
    }

    function Filtre($Deger){
        $Bir = trim($Deger);  // $Degerin icerisinde herhangi bir bosluk varsa silmesi icin.
        $Iki = strip_tags($Bir); // Herhangi bir siseme zarar vermesini isteyebilir diye butun htmll taglarini yok ediyoruz.
        $Uc =  htmlspecialchars($Iki , ENT_QUOTES); // Iki de eger tirnak varsa yok ediliyor.
        $Sonuc = $Uc;
        return $Sonuc;
    }
    ?>
</body>
</html>