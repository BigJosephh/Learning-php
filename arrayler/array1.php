<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Yusuf Mert Dereli</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
</head>

<body>
  <?php

  /*

    array_shifter() : Dizi icerisinde bulunan ilk elemani silmek icin kullanilir.Ayni zamanda dizi iceriginden sildigi elemanin
    degerini geriye dondurur.
    array_pop()     : Dizi icerisinde bulunan son  elemani silmek icin kullanilir.Ayni zamanda dizi iceriginden sildigi elemanin
    degerini geriye dondurur.

    */

  $ISIMLER = array("bir"  => "yusuf", "iki" => "mert", "uc" => "dereli");

  echo "<pre>";
  print_r($ISIMLER);
  echo "<pre>";

  array_shift($ISIMLER);

  echo "<pre>";
  print_r($ISIMLER);
  echo "<pre>";

  array_shift($ISIMLER);

  echo "<pre>";
  print_r($ISIMLER);
  echo "<pre>";


  ?>

  <script src="" async defer></script>
</body>

</html>