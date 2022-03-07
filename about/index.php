<?php
include "../moradmin/include/helper.php";
include "../include/lang-control.php";
include "../moradmin/netting/baglan.php";


$ayar = tablogetir("tblayar", 'id', 1, $db);
$genel = tablogetir("tblgeneral", "id", 1, $db);
$about = tablogetir("tblabout", "id", 1, $db);

$keywords = $lang == "tr" ? $about['keywords'] : $about['keywordsE'];
$metaDescription = $lang == "tr" ? $about['metaDescription'] : $about['metaDescription'];
$logo = $genel['img'];
$page = "About";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $lang == "tr" ? $ayar['title'] . " | Hakkımızda" : $ayar['titleE'] . " | About "; ?></title>
    <meta content="<?php echo $metaDescription ?>" name="description">
    <meta content="<?php echo $keywords ?>" name="keywords">

    <?php include "../include/style.php" ?>
</head>
<body>

<?php include "../include/header.php" ?>
<?php include "main.php" ?>

<?php include "../include/clients.php" ?>
<footer id="footer" class="footer">
    <?php include "../include/map.php" ?>
    <?php include "../include/newsletter.php" ?>
    <?php include "../include/footer.php" ?>
</footer><?php include "../include/script.php" ?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
<?php include "../include/script.php" ?>
</body>

</html>