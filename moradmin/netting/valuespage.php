<?php
include '../netting/baglan.php';
include '../include/helper.php';


if (isset($_POST['valuespageguncelleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $subTitle = $_POST['subTitle'];
    $subTitleE = $_POST['subTitleE'] != "" ? $_POST['subTitleE'] : $_POST['subTitle']  ;
    $class = $_POST['class'];
    $classE = $_POST['classE'] != "" ? $_POST['classE'] : $_POST['class'] ;
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $metaDescription = $_POST['metaDescription'];
    $metaDescriptionE = $_POST['metaDescriptionE'] != "" ? $_POST['metaDescriptionE'] : $_POST['metaDescription'];
    $keywords = $_POST['keywords'];
    $keywordsE = $_POST['keywordsE'] != "" ? $_POST['keywordsE'] : $_POST['keywords'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);
    $link =  "#" ; //$_POST['link'];
    $linkE = "#"; // $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblvaluespage", 'id', 1, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/valuespage");

        $sql = "UPDATE tblvaluespage set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
        class = '$class',
        classE = '$classE',
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
        $sql = "UPDATE tblvaluespage set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
        class = '$class',
        classE = '$classE',
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
        header("Location:../valuespage/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../valuespage/?durumguncelleme=no");
        exit();
    }
}



