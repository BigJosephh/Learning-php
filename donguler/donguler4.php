<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DONGULER 4</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php

    /*
        foreach = Diziler icin dongu islemleri baslatir
        Yapisi:
        foreach(Dizi Degiskeni as Anahtar Atanacak Degisken => Eleman Atanacak Degisken){
            Kod Bloklari
        }
        */
    // foreach in icerisinde kullanilan 'as' ata anlamindadir.


    $RENKLER = array("Mavi", "Turuncu", "Yesil", "Siyah", "Lavicert");

    print_r($RENKLER);
    echo "<br/>";
    echo "<br/>";


    foreach ($RENKLER as $deger) {
        echo $deger . "<br/>";
    }

    foreach ($RENKLER as $anahtardegeri => $elemandegeri) {
        echo "Anahtar Degeri : <strong>" .  $anahtardegeri . "</strong>  Eleman Degeri :<strong>" . $elemandegeri . "</strong><br/>";
    }

    ?>
    <script src="" async defer></script>
</body>

</html>