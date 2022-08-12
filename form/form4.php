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
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    if (!$_POST) {
    ?>
        <form action="form4.php" method="POST">
            Adiniz Soyadiniz : <input type="text" name="AdSoyad"><br><br>
            Telefon Numaraniz : <input type="text" name="Telefon"><br><br>
            E-Mail Adresiniz : <input type="text" name="Email"><br><br>
            Mesajiniz : <textarea name="Mesaj"></textarea><br><br>
            <input type="submit" value="Gonder">
        </form>
    <?php
    } else {
        $GelenAdsoyadDegeri = $_POST["AdSoyad"];
        $GelenTelefonDegeri = $_POST["Telefon"];
        $GelenEmailDegeri   = $_POST["Email"];
        $GelenMesajDegeri   = $_POST["Mesaj"];

        echo "Adiniz Soyadiniz :" . $GelenAdsoyadDegeri . "<br/>";
        echo "Telefon Numarniz :" . $GelenTelefonDegeri . "<br/>";
        echo "E-Mail Adresiniz :" . $GelenEmailDegeri . "<br/>";
        echo "Mesajiniz :" . $GelenMesajDegeri . "<br/>";
    }

    ?>

    <script src="" async defer></script>
</body>

</html>