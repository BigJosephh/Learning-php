<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>O O P 10</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php

    class KullaniKayit
    {
        public $Isim;
        public $Soyisim;
        public $Yas;

        public function IsimEkle($Igir)
        {
            $this->Isim = $Igir;
            return $this;
        }
        public function SoyIsimEkle($SoyIgir)
        {
            $this->Soyisim = $SoyIgir;
            return $this;
        }
        public function yasEkle($yasG)
        {
            $this->Yas = $yasG;
            return $this;
        }
        public function olustur()
        {
            return "Kullanici Adi : " . $this->Isim . "Kullanici Soy Adi :" . $this->Soyisim . "Kullanici yasi : " . $this->Yas;
        }
    }

    $yazdir = new KullaniKayit;
    echo $yazdir->IsimEkle("Yusuf Mert ")->SoyIsimEkle(" Dereli ")->yasEkle("21")->olustur();

    ?>
    <script src="" async defer></script>
</body>

</html>