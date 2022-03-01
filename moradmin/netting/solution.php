<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['solutionekleme'])) {

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
    $link = "#"; //base_url_front()."solution-detail/?modul=".$seoTitle;
    $linkE = "#"; //base_url_front()."solution-detail/?modul=".$seoTitleE;

    if ($_FILES['img']['size'] > 0) {

        $img = imageUpload("img", "asset/solution");

        $sql = "INSERT INTO tblsolution (title , titleE, subTitle, subTitleE, class, 
                                        description, descriptionE, keywords, keywordsE, 
                                        metaDescription, metaDescriptionE, seoTitle, link, linkE, 
                                        seoTitleE, img) 
                        VALUES ('$title', '$titleE', '$subTitle', '$subTitleE', '$class',
                                '$description', '$descriptionE', '$keywords', '$keywordsE',
                                '$metaDescription', '$metaDescriptionE', '$seoTitle', '$link', '$linkE', 
                                '$seoTitleE', '$img')";

    } else {
        $sql = "INSERT INTO tblsolution (title , titleE, subTitle, subTitleE, class, 
                                        description, descriptionE, keywords, keywordsE, 
                                        metaDescription, metaDescriptionE, seoTitle, link, linkE, 
                                        seoTitleE) 
                        VALUES ('$title', '$titleE', '$subTitle', '$subTitleE', '$class',
                                '$description', '$descriptionE', '$keywords', '$keywordsE',
                                '$metaDescription', '$metaDescriptionE', '$seoTitle', '$link', '$linkE', 
                                '$seoTitleE')";
    }

    if (mysqli_query($db, $sql)) {
        header("Location:../solution/?durumekle=ok");
        exit();
    } else {
        header("Location:../solution/?durumekle=no");
        exit();
    }
}

if (isset($_POST['solutionguncelleme'])) {

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
    $link = "#"; //base_url_front()."solution-detail/?modul=".$seoTitle;
    $linkE = "#"; //base_url_front()."solution-detail/?modul=".$seoTitleE;

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblsolution", 'id', $id, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/solution");

        $sql = "UPDATE tblsolution set 
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
        $sql = "UPDATE tblsolution set 
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
        header("Location:../solution/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../solution/?durumguncelleme=no");
        exit();
    }
}

if (isset($_GET['solutionsil'])) {

    $id = $_GET['solutionsil'];

    $resimbul = tablogetir("tblsolution", 'id', $id, $db)['img'];
    unlink("../" . $resimbul);

    $sql = "DELETE FROM tblsolution  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../solution/?durumsil=ok");
        exit();
    } else {
        header("Location:../solution/?durumsil=no");
        exit();
    }
}


