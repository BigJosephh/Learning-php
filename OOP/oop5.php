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
        public     : Genel. Her yerden erisilebilir.
        private    : Ozel. Yalnizca sinif icerisinden erisilebilir.
        protected  : Korumali. Sinif icerisinden ve turetilen siniflardan erisilebilir.

        static     : Sabit. Sinif icerisindeki herhangi bir ozellik veya metoda sinif cagirilmadan erisilebilir.

        $this      : Bu sinifta seklinde sinifi isaret etmek icin kullanilir.
        self::     : Kendi sinifimda seklinde sinifi isaret etmek icin kullanilir.
        parent::   : Ebeveyn sinifimda seklinde sinifi isaret etmek icin kullanilir.
    */


    class Deneme
    {
        private $Isim = "Yusuf Mert";
        private const Soyisim = "Dereli";
        public function Bilgi()
        {
            $metin = "Isim Soy Isim :" . $this->Isim . " " . self::Soyisim . "<br/>";
            return $metin;
        }
    }

    $Nesne = new Deneme;
    echo $Nesne->Bilgi();
    ?>
    <script src="" async defer></script>
</body>

</html>