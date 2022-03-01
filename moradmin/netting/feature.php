<?php
include '../netting/baglan.php';
include '../include/helper.php';


if (isset($_POST['featureguncelleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $metaDescription = $_POST['metaDescription'];
    $metaDescriptionE = $_POST['metaDescriptionE'] != "" ? $_POST['metaDescriptionE'] : $_POST['metaDescription'];
    $keywords = $_POST['keywords'];
    $keywordsE = $_POST['keywordsE'] != "" ? $_POST['keywordsE'] : $_POST['keywords'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);
    $class = $_POST['class'];

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblfeature", 'id', 1, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/feature");

        $sql = "UPDATE tblfeature set 
        title = '$title',
        titleE = '$titleE',
        class = '$class',
        description = '$description',
        descriptionE = '$descriptionE',
        keywords = '$keywords',
        keywordsE = '$keywordsE',
        metaDescription = '$metaDescription',
        metaDescriptionE = '$metaDescriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE',
        img = '$img'  WHERE id= '1'";

    } else {
        $sql = "UPDATE tblfeature set 
        title = '$title',
        titleE = '$titleE',
        class = '$class',
        description = '$description',
        descriptionE = '$descriptionE',
        keywords = '$keywords',
        keywordsE = '$keywordsE',
        metaDescription = '$metaDescription',
        metaDescriptionE = '$metaDescriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE' WHERE id= '1'";
    }

    if (mysqli_query($db, $sql)) {
        header("Location:../feature/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../feature/?durumguncelleme=no");
        exit();
    }
}



