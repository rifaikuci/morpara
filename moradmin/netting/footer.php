<?php
include '../netting/baglan.php';
include '../include/helper.php';


if (isset($_POST['footerguncelleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $metaDescription = $_POST['metaDescription'];
    $metaDescriptionE = $_POST['metaDescriptionE'] != "" ? $_POST['metaDescriptionE'] : $_POST['metaDescription'];
    $keywords = $_POST['keywords'];
    $keywordsE = $_POST['keywordsE'] != "" ? $_POST['keywordsE'] : $_POST['keywords'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblfooter", 'id', 1, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/footer");

        $sql = "UPDATE tblfooter set 
        title = '$title',
        titleE = '$titleE',
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
        $sql = "UPDATE tblfooter set 
        title = '$title',
        titleE = '$titleE',
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
        header("Location:../footer/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../footer/?durumguncelleme=no");
        exit();
    }
}



