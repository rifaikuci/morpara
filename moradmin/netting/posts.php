<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['postsekleme'])) {

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
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);
    $link = "#"; //base_url_front()."posts-detail/?modul=".$seoTitle;
    $linkE = "#"; //base_url_front()."posts-detail/?modul=".$seoTitleE;

    if ($_FILES['img']['size'] > 0) {

        $img = imageUpload("img", "asset/posts");

        $sql = "INSERT INTO tblposts (title , titleE, subTitle, subTitleE, 
                                        description, descriptionE, keywords, keywordsE, 
                                        metaDescription, metaDescriptionE, seoTitle, link, linkE, 
                                        seoTitleE, img) 
                        VALUES ('$title', '$titleE', '$subTitle', '$subTitleE',
                                '$description', '$descriptionE', '$keywords', '$keywordsE',
                                '$metaDescription', '$metaDescriptionE', '$seoTitle', '$link', '$linkE', 
                                '$seoTitleE', '$img')";

    } else {
        $sql = "INSERT INTO tblposts (title , titleE, subTitle, subTitleE, 
                                        description, descriptionE, keywords, keywordsE, 
                                        metaDescription, metaDescriptionE, seoTitle, link, linkE, 
                                        seoTitleE) 
                        VALUES ('$title', '$titleE', '$subTitle', '$subTitleE',
                                '$description', '$descriptionE', '$keywords', '$keywordsE',
                                '$metaDescription', '$metaDescriptionE', '$seoTitle', '$link', '$linkE', 
                                '$seoTitleE')";
    }

    if (mysqli_query($db, $sql)) {
        header("Location:../posts/?durumekle=ok");
        exit();
    } else {
        header("Location:../posts/?durumekle=no");
        exit();
    }
}

if (isset($_POST['postsguncelleme'])) {

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
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);
    $link = "#"; //base_url_front()."posts-detail/?modul=".$seoTitle;
    $linkE = "#"; //base_url_front()."posts-detail/?modul=".$seoTitleE;

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblposts", 'id', $id, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/posts");

        $sql = "UPDATE tblposts set 
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
        $sql = "UPDATE tblposts set 
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
        linkE = '$linkE' WHERE id= '$id'";

    }

    if (mysqli_query($db, $sql)) {
        header("Location:../posts/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../posts/?durumguncelleme=no");
        exit();
    }
}

if (isset($_GET['postssil'])) {

    $id = $_GET['postssil'];

    $resimbul = tablogetir("tblposts", 'id', $id, $db)['img'];
    unlink("../" . $resimbul);

    $sql = "DELETE FROM tblposts  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../posts/?durumsil=ok");
        exit();
    } else {
        header("Location:../posts/?durumsil=no");
        exit();
    }
}


