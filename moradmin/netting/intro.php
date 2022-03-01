<?php
include '../netting/baglan.php';
include '../include/helper.php';


if (isset($_POST['introguncelleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $subTitle = $_POST['subTitle'];
    $subTitleE = $_POST['subTitleE'] != "" ? $_POST['subTitleE'] : $_POST['subTitle'];
    $btnTitle = $_POST['btnTitle'];
    $btnTitleE = $_POST['btnTitleE'] != "" ? $_POST['btnTitleE'] : $_POST['btnTitle'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $metaDescription = $_POST['metaDescription'];
    $metaDescriptionE = $_POST['metaDescriptionE'] != "" ? $_POST['metaDescriptionE'] : $_POST['metaDescription'];
    $keywords = $_POST['keywords'];
    $keywordsE = $_POST['keywordsE'] != "" ? $_POST['keywordsE'] : $_POST['keywords'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);
    $link = $_POST['link'];
    $linkE = $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblintro", 'id', 1, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/intro");

        $sql = "UPDATE tblintro set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
        btnTitle = '$btnTitle',
        btnTitleE = '$btnTitleE',
        description = '$description',
        descriptionE = '$descriptionE',
        keywords = '$keywords',
        keywordsE = '$keywordsE',
        metaDescription = '$metaDescription',
        metaDescriptionE = '$metaDescriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE',
        link = '$link',
        linkE = '$linkE',
        img = '$img'  WHERE id= '1'";

    } else {
        $sql = "UPDATE tblintro set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
        btnTitle = '$btnTitle',
        btnTitleE = '$btnTitleE',
        description = '$description',
        descriptionE = '$descriptionE',
        keywords = '$keywords',
        keywordsE = '$keywordsE',
        metaDescription = '$metaDescription',
        metaDescriptionE = '$metaDescriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE',
        link = '$link',
        linkE = '$linkE' WHERE id= '1'";

    }

    if (mysqli_query($db, $sql)) {
        header("Location:../intro/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../intro/?durumguncelleme=no");
        exit();
    }
}



