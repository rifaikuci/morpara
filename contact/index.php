<?php
include "../moradmin/include/helper.php";
include "../include/lang-control.php";
include "../moradmin/netting/baglan.php";


$ayar = tablogetir("tblayar", 'id', 1, $db);
$genel = tablogetir("tblgeneral", "id", 1, $db);
$servicepage = tablogetir("tblservicepage", "id", 1, $db);

$keywords = $lang == "tr" ? $genel['keywords'] : $genel['keywordsE'];
$metaDescription = $lang == "tr" ? $genel['metaDescription'] : $genel['metaDescription'];
$logo = $genel['img'];
$page = "Contact";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $lang == "tr" ? $ayar['title'] . " | İletişim  " : $ayar['titleE'] . " | Contact"; ?></title>
    <meta content="<?php echo $metaDescription ?>" name="description">
    <meta content="<?php echo $keywords ?>" name="keywords">

    <?php include "../include/style.php" ?>
</head>
<body>

<?php include "../include/header.php" ?>
<?php include "../include/values.php" ?>
<?php include "../include/contact.php" ?>
<?php include "../include/map.php" ?>



<footer id="footer" class="footer">
    <?php include "../include/footer.php" ?>
</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
<?php include "../include/script.php" ?>
</body>

</html>