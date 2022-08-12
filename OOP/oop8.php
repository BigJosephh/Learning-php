<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>O O P 7</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
    /*
                abstract     : Belirtilecek olan herhangi bir sinifi, soyut sinif haline donusturebilmek icin kullanilir.
                interface    : Belirtilecek olan herhangi bir sinifi, soyut arayuz sinifi haline donusturebilmek icin kullanilir.
                implements   : Daha onceden olusturulmus olan herhangi bir arayuz sinifini, ilgili sinifa tanimlamak / uygulamak icin kullanilir.

                abstract     :
                1. Soyut metodlar icerebilir.
                2. Normal metodlar icerebilir.
                3. Ozellikler icerebilir.
                4. Sabitler icerebilir.
                5. public / private veya protected tanimlanabilir.
                6. Herhangi bir sinif sadece tek bir abstract icerebilir ve tureyebilir.

                interface    :
                1. Soyut metodlar icerebilir.
                2. public gorunurlugune sahip olmak kaydiyla normal metodlar icerebilir.
                3. Sabitler icerebilir.
                4. Herhangi bir sinifda birden fazla interface (arayuz) kullanilabilir.
            */

    abstract class Deneme
    {
        abstract public function Tanim($ParametreIcerigi); // Hata kodu dondurur, cunku soyut sinif icerisinde bulunan metodlar  muhakkak soyut siniflardan tureyen tum alt siniflarda da bulunmalidir.
        // ve olusturulan metodun sonunda suslu paranez degil direk nokrali virguj (;) olmalidir.
    }

    class Test extends Deneme
    {
        public function Tanim($ParametreIcerigi)
        {
        }
    }


    ?>
    <script src="" async defer></script>
</body>

</html>