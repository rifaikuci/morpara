<?php
include "../moradmin/include/helper.php";
include "../include/lang-control.php";
include "../moradmin/netting/baglan.php";


$ayar = tablogetir("tblayar", 'id', 1, $db);
$genel = tablogetir("tblgeneral", "id", 1, $db);
$servicepage = tablogetir("tblservicepage", "id", 1, $db);

$keywords = $lang == "tr" ? $servicepage['keywords'] : $servicepage['keywordsE'];
$metaDescription = $lang == "tr" ? $servicepage['metaDescription'] : $servicepage['metaDescription'];
$logo = $genel['img'];
$page = "Services";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $lang == "tr" ? $ayar['title'] . " | Hizmetlerimiz  " : $ayar['titleE'] . " | Services"; ?></title>
    <meta content="<?php echo $metaDescription ?>" name="description">
    <meta content="<?php echo $keywords ?>" name="keywords">

    <?php include "../include/style.php" ?>
</head>
<body>

<?php include "../include/header.php" ?>
<?php include "main.php" ?>

<footer id="footer" class="footer">
    <?php include "../include/footer.php" ?>
</footer>
<?php include "../include/script.php" ?>
</body>

</html>