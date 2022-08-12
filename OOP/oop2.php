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
                __construct  : Belirtilecek olan sinifa, yapici metod tanimlamak icin kullanlir.
                __destruct   : Belirtilecek olan sinifa, yikici metod tanimlamak icin kullanlir.
           */

    class Deneme
    {
        public function __construct()
        {
            echo "Sinif calisti ve yapici method devreye girdi.<br/><br/>";
        }

        public $isim = "yusuf mert";
        public $soyisim = "dereli<br/><br/>";

        public function yazdir()
        {
            $metin = "Mehaba ben yusuf mert dereli<br/><br/>";
            return $metin;
        }
        public function __destruct()
        {
            echo "Sinif icerisindeki tum ozellik ve methotlarin calismasi tamamlandigi icin yikici metod devreye girdi.<br/>";
        }
    }

    $goster = new deneme;
    echo $goster->yazdir() . "" . $goster->soyisim;
    ?>
    <script src="" async defer></script>
</body>

</html>