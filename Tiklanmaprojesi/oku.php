<?php
include("baglan.php");

$Gelen_ID  = Filtre($_GET["id"]);

$HitSayma = $VeritabaniBaglantisi->prepare("UPDATE makaleler SET gosterimsayisi=gosterimsayisi+1 WHERE id = ?");
$HitSayma->execute([$Gelen_ID]);

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

        <?php
        

        $Sorgu = $VeritabaniBaglantisi->prepare("SELECT * FROM makaleler WHERE id = ?");
        $Sorgu->execute([$Gelen_ID]);
        $KayitSayisi = $Sorgu->rowCount();
        $Kayitlar = $Sorgu->fetch(PDO::FETCH_ASSOC);

        if ($KayitSayisi > 0) {
        ?>
            <tr height="30 ">
                <td colspan="2" align="left">
                    <h4><?php echo $Kayitlar["makalebasligi"] . "<br/>"; ?></h4>
                </td>
            </tr>
            <tr height="30 ">
                <td colspan="2" align="left">
                    <?php echo $Kayitlar["makaleicerigi"] . "<br/>"; ?>
                </td>
            </tr>
            <tr height="30 ">
                <td colspan="2" align="center">
                    Bu makale <?php echo $Kayitlar["gosterimsayisi"] ?> defa goruntulendi :
                </td>
            </tr>

        <?php
        } else {
            header("Location:index.php");
        }
        ?>
    </table>
    <script src="" async defer></script>
</body>

</html>
<?php
$VeritabaniBaglantisi = null;
?>