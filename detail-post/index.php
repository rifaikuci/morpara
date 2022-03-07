<?php
include "../moradmin/include/helper.php";
include "../include/lang-control.php";
include "../moradmin/netting/baglan.php";


$seo = $_GET['seo'];
$item = null;

if($lang == "tr") {

    $item = tablogetir("tblposts", 'seoTitle', $seo,$db);
} else {
    $item = tablogetir("tblposts", 'seoTitleE', $seo,$db);

}

$ayar = tablogetir("tblayar", 'id', 1, $db);
$genel = tablogetir("tblgeneral", "id", 1, $db);

$keywords = $lang == "tr" ? $item['keywords'] : $item['keywordsE'];
$metaDescription = $lang == "tr" ? $item['metaDescription'] : $item['metaDescription'];
$logo = $genel['img'];
$page = "Posts";




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $lang == "tr" ? $ayar['title'] . " | " . $item['title'] : $ayar['titleE'] . " | " . $item['titleE']; ?></title>
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
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
<?php include "../include/script.php" ?>
</body>

</html>