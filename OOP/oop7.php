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

    class Bir
    {
        public $IsimSoyIsim;
        public $AylikGelir;
        public $AylikGider;

        public function IsimGoster($AdSoyad)
        {
            return $this->IsimSoyIsim = $AdSoyad;
        }
        public function GelirGoster($GelirTutari)
        {
            return $this->AylikGelir = $GelirTutari;
        }
        public function GiderGoster($GiderTutari)
        {
            return $this->AylikGider = $GiderTutari;
        }
        public function GelirGiderHesaplamasi()
        {
            return $NetKazanc = $this->AylikGelir - $this->AylikGider;
        }
        public function YillikGelirGiderHesaplamasi()
        {
            return $YillikNetKazanc = ($this->AylikGelir - $this->AylikGider) * 12;
        }
    }

    $maas = new Bir;
    $gelir = $maas->GelirGoster(5000);
    $gider = $maas->GiderGoster(1000);
    $gelirgider = $maas->YillikGelirGiderHesaplamasi();
    echo $gelirgider;

    ?>
    <script src="" async defer></script>
</body>

</html>