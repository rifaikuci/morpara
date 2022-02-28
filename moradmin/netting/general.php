<?php
include '../netting/baglan.php';
include '../include/helper.php';


if (isset($_POST['generalguncelleme'])) {

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
    $link = $_POST['link'];
    $linkE = $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblgeneral", 'id', 1, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/general");

        $sql = "UPDATE tblgeneral set 
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
        link = '$link',
        linkE = '$linkE',
        img = '$img'  WHERE id= '1'";

    } else {
        $sql = "UPDATE tblgeneral set 
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
        link = '$link',
        linkE = '$linkE' WHERE id= '1'";

    }

    if (mysqli_query($db, $sql)) {
        header("Location:../general/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../general/?durumguncelleme=no");
        exit();
    }
}



