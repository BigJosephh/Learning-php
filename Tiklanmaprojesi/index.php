<?php
include("baglan.php");
?>
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

    <table width="1000 " border="0" cellspacing="0" align="center">
        <tr height="30 ">
            <td align="left"><a href="index.php" style="text-decoration: none; color:black;">Anasayfa</a></td>
            <td align="right"><b>Goruntulenme Ve Hit Uygulamasi</b></td>
        </tr>
        <tr height="30" bgcolor="#990000">
            <td align="left" style="color: white;">&nbsp;Makale Basligi</td>
            <td align="right" style="color: white;">Gosterim Sayisi&nbsp;</td>
        </tr>

        <?php
        $Sorgu = $VeritabaniBaglantisi->prepare("SELECT * FROM Makaleler");
        $Sorgu->execute();
        $KayitSayisi = $Sorgu->rowCount();
        $Kayitlar = $Sorgu->fetchAll(PDO::FETCH_ASSOC);

        if ($KayitSayisi > 0) {
            foreach ($Kayitlar as $Satirlar) {
        ?>

                <tr height="30">
                    <td align="left"><a href="oku.php?id=<?php echo $Satirlar["id"];?>" style="color: black; text-decoration: none;">&nbsp;<?php echo $Satirlar["makalebasligi"]; ?></a></td>
                    <td align="right"><?php echo $Satirlar["gosterimsayisi"]; ?>&nbsp;</td>
                </tr>
        <?php
            }
        }
        ?>

    </table>
    <script src="" async defer></script>
</body>

</html>
<?php
$VeritabaniBaglantisi = null;
?>