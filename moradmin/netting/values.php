<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['valuesekleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title'];
    $subTitle = $_POST['subTitle'];
    $subTitleE = $_POST['subTitleE'] != "" ? $_POST['subTitleE'] : $_POST['subTitle'];
    $class = $_POST['class'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $metaDescription = $_POST['metaDescription'];
    $metaDescriptionE = $_POST['metaDescriptionE'] != "" ? $_POST['metaDescriptionE'] : $_POST['metaDescription'];
    $keywords = $_POST['keywords'];
    $keywordsE = $_POST['keywordsE'] != "" ? $_POST['keywordsE'] : $_POST['keywords'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);
    $link = "#"; //base_url_front()."values-detail/?modul=".$seoTitle;
    $linkE = "#"; //base_url_front()."values-detail/?modul=".$seoTitleE;

    if ($_FILES['img']['size'] > 0) {

        $img = imageUpload("img", "asset/values");

        $sql = "INSERT INTO tblvalues (title , titleE, subTitle, subTitleE, class, 
                                        description, descriptionE, keywords, keywordsE, 
                                        metaDescription, metaDescriptionE, seoTitle, link, linkE, 
                                        seoTitleE, img) 
                        VALUES ('$title', '$titleE', '$subTitle', '$subTitleE', '$class',
                                '$description', '$descriptionE', '$keywords', '$keywordsE',
                                '$metaDescription', '$metaDescriptionE', '$seoTitle', '$link', '$linkE', 
                                '$seoTitleE', '$img')";

    } else {
        $sql = "INSERT INTO tblvalues (title , titleE, subTitle, subTitleE, class, 
                                        description, descriptionE, keywords, keywordsE, 
                                        metaDescription, metaDescriptionE, seoTitle, link, linkE, 
                                        seoTitleE) 
                        VALUES ('$title', '$titleE', '$subTitle', '$subTitleE', '$class',
                                '$description', '$descriptionE', '$keywords', '$keywordsE',
                                '$metaDescription', '$metaDescriptionE', '$seoTitle', '$link', '$linkE', 
                                '$seoTitleE')";
    }

    if (mysqli_query($db, $sql)) {
        header("Location:../values/?durumekle=ok");
        exit();
    } else {
        header("Location:../values/?durumekle=no");
        exit();
    }
}

if (isset($_POST['valuesguncelleme'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title'];
    $subTitle = $_POST['subTitle'];
    $subTitleE = $_POST['subTitleE'] != "" ? $_POST['subTitleE'] : $_POST['subTitle'];
    $class = $_POST['class'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $metaDescription = $_POST['metaDescription'];
    $metaDescriptionE = $_POST['metaDescriptionE'] != "" ? $_POST['metaDescriptionE'] : $_POST['metaDescription'];
    $keywords = $_POST['keywords'];
    $keywordsE = $_POST['keywordsE'] != "" ? $_POST['keywordsE'] : $_POST['keywords'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);
    $link = "#"; //base_url_front()."values-detail/?modul=".$seoTitle;
    $linkE = "#"; //base_url_front()."values-detail/?modul=".$seoTitleE;

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblvalues", 'id', $id, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/values");

        $sql = "UPDATE tblvalues set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
        class = '$class',
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
        $sql = "UPDATE tblvalues set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
        class = '$class',
        description = '$description',
        descriptionE = '$descriptionE',
        keywords = '$keywords',
        keywordsE = '$keywordsE',
        metaDescription = '$metaDescription',
        metaDescriptionE = '$metaDescriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE',
        link = '$link',
        linkE = '$linkE' WHERE id= '$id'";

    }

    if (mysqli_query($db, $sql)) {
        header("Location:../values/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../values/?durumguncelleme=no");
        exit();
    }
}

if (isset($_GET['valuessil'])) {

    $id = $_GET['valuessil'];

    $resimbul = tablogetir("tblvalues", 'id', $id, $db)['img'];
    unlink("../" . $resimbul);

    $sql = "DELETE FROM tblvalues  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../values/?durumsil=ok");
        exit();
    } else {
        header("Location:../values/?durumsil=no");
        exit();
    }
}


