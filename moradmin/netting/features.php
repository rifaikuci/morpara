<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['featuresekleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title'];
    $subTitle = $_POST['subTitle'];
    $subTitleE = $_POST['subTitleE'] != "" ? $_POST['subTitleE'] : $_POST['subTitle'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $metaDescription = $_POST['metaDescription'];
    $metaDescriptionE = $_POST['metaDescriptionE'] != "" ? $_POST['metaDescriptionE'] : $_POST['metaDescription'];
    $keywords = $_POST['keywords'];
    $keywordsE = $_POST['keywordsE'] != "" ? $_POST['keywordsE'] : $_POST['keywords'];
    $link = $_POST['link'];
    $linkE = $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];
    $seoTitle = seo($title);
    $seoTitleE = seo($title);

    if ($_FILES['img']['size'] > 0) {

        $img = imageUpload("img", "asset/deneme");

        $sql = "INSERT INTO tblfeatures (title , titleE, subTitle, subTitleE,
                                        description, descriptionE, keywords, keywordsE, 
                                        metaDescription, metaDescriptionE, seoTitle, 
                                        seoTitleE, link, linkE, img) 
                        VALUES ('$title', '$titleE', '$subTitle', '$subTitleE',
                                '$description', '$descriptionE', '$keywords', '$keywordsE',
                                '$metaDescription', '$metaDescriptionE', '$seoTitle', 
                                '$seoTitleE', '$link', '$linkE', '$img')";

    } else {
        $sql = "INSERT INTO tblfeatures (title , titleE, subTitle, subTitleE,
                                        description, descriptionE, keywords, keywordsE, 
                                        metaDescription, metaDescriptionE, seoTitle, 
                                        seoTitleE, link, linkE) 
                        VALUES ('$title', '$titleE', '$subTitle', '$subTitleE',
                                '$description', '$descriptionE', '$keywords', '$keywordsE',
                                '$metaDescription', '$metaDescriptionE', '$seoTitle', 
                                '$seoTitleE', '$link', '$linkE')";
    }

    if (mysqli_query($db, $sql)) {
        header("Location:../features/?durumekle=ok");
        exit();
    } else {
        header("Location:../features/?durumekle=no");
        exit();
    }
}

if (isset($_POST['featuresguncelleme'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title'];
    $subTitle = $_POST['subTitle'];
    $subTitleE = $_POST['subTitleE'] != "" ? $_POST['subTitleE'] : $_POST['subTitle'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $metaDescription = $_POST['metaDescription'];
    $metaDescriptionE = $_POST['metaDescriptionE'] != "" ? $_POST['metaDescriptionE'] : $_POST['metaDescription'];
    $keywords = $_POST['keywords'];
    $keywordsE = $_POST['keywordsE'] != "" ? $_POST['keywordsE'] : $_POST['keywords'];
    $link = $_POST['link'];
    $linkE = $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];
    $seoTitle = seo($title);
    $seoTitleE = seo($title);

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblfeatures", 'id', $id, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/deneme");

        $sql = "UPDATE tblfeatures set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
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
        img = '$img'  WHERE id= '$id'";

    } else {
        $sql = "UPDATE tblfeatures set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
        description = '$description',
        descriptionE = '$descriptionE',
        keywords = '$keywords',
        keywordsE = '$keywordsE',
        metaDescription = '$metaDescription',
        metaDescriptionE = '$metaDescriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE',
        link = '$link',
        linkE = '$linkE'  WHERE id= '$id'";

    }

    if (mysqli_query($db, $sql)) {
        header("Location:../features/?durumekle=ok");
        exit();
    } else {
        header("Location:../features/?durumekle=no");
        exit();
    }
}

if (isset($_GET['featuressil'])) {

    $id = $_GET['featuressil'];

    $resimbul = tablogetir("tblfeatures", 'id', $id, $db)['img'];
    unlink("../" . $resimbul);

    $sql = "DELETE FROM tblfeatures  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../features/?durumsil=ok");
        exit();
    } else {
        header("Location:../features/?durumsil=no");
        exit();
    }
}


