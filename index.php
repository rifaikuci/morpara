<?php
include "moradmin/include/helper.php";
include "include/lang-control.php";
include "moradmin/netting/baglan.php";


$intro = tablogetir("tblintro", 'id', 1, $db);
$ayar = tablogetir("tblayar", 'id', 1, $db);
$genel = tablogetir("tblgeneral", "id", 1, $db);
$about = tablogetir("tblabout", "id", 1, $db);
$count = tablogetir("tblcount", "id", 1, $db);
$feature = tablogetir("tblfeature", "id", 1, $db);
$solutionpage = tablogetir("tblsolutionpage", "id", 1, $db);
$servicepage = tablogetir("tblservicepage", "id", 1, $db);
$valuespage = tablogetir("tblvaluespage", "id", 1, $db);

$keywords = $lang == "tr" ? $genel['keywords'] : $genel['keywordsE'];
$metaDescription = $lang == "tr" ? $genel['metaDescription'] : $genel['metaDescription'];
$logo = $genel['img'];
//$footer   = tablogetir("tblfooter", "id", 1, $db);
$page = "Home";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $lang == "tr" ? $ayar['title'] . " Ana Sayfa" : $ayar['titleE'] . " Home"; ?></title>
    <meta content="<?php echo $metaDescription ?>" name="description">
    <meta content="<?php echo $keywords ?>" name="keywords">

    <?php include "include/style.php" ?>
</head>
<body>

<?php include "include/header.php" ?>
<?php include "include/intro.php" ?>

<main id="main">
    <?php include "include/about.php" ?>
    <?php include "include/values.php" ?>
    <?php include "include/count.php" ?>

    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <?php include "include/features.php" ?>
            <?php include "include/solution.php" ?>
        </div>
    </section>

    <?php include "include/services.php" ?>
    <?php include "include/faq.php" ?>
    <?php include "include/gallery.php" ?>
    <?php include "include/testimonials.php" ?>
    <?php include "include/clients.php" ?>
    <?php include "include/posts.php" ?>
    <?php include "include/contact.php" ?>
</main>
<?php include "include/footer.php" ?>
<?php include "include/script.php" ?>
</body>

</html>