<?php
include '../netting/baglan.php';
include '../include/helper.php';


if (isset($_POST['aboutguncelleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $subTitle = $_POST['subTitle'];
    $subTitleE = $_POST['subTitleE'] != "" ? $_POST['subTitleE'] : $_POST['subTitle']  ;
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $purpose = $_POST['purpose'];
    $purposeE = $_POST['purposeE'] != "" ? $_POST['purposeE'] : $_POST['purpose'];
    $mission = $_POST['mission'];
    $missionE = $_POST['missionE'] != "" ? $_POST['missionE'] : $_POST['mission'];
    $vission = $_POST['vission'];
    $vissionE = $_POST['vissionE'] != "" ? $_POST['vissionE'] : $_POST['vission'];
    $skill = $_POST['skill'];
    $skillE = $_POST['skillE'] != "" ? $_POST['skillE'] : $_POST['skill'];
    $metaDescription = $_POST['metaDescription'];
    $metaDescriptionE = $_POST['metaDescriptionE'] != "" ? $_POST['metaDescriptionE'] : $_POST['metaDescription'];
    $keywords = $_POST['keywords'];
    $keywordsE = $_POST['keywordsE'] != "" ? $_POST['keywordsE'] : $_POST['keywords'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);
    $link = $_POST['link'];
    $linkE = $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblabout", 'id', 1, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/about");

        $sql = "UPDATE tblabout set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
        description = '$description',
        descriptionE = '$descriptionE',
        purpose = '$purpose',
        purposeE = '$purposeE',
        mission = '$mission',
        missionE = '$missionE',
        vission = '$vission',
        vissionE = '$vissionE',
        skill = '$skill',
        skillE = '$skillE',
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
        $sql = "UPDATE tblabout set 
        title = '$title',
        titleE = '$titleE',
        subTitle = '$subTitle',
        subTitleE = '$subTitleE',
        description = '$description',
        descriptionE = '$descriptionE',
        purpose = '$purpose',
        purposeE = '$purposeE',
        mission = '$mission',
        missionE = '$missionE',
        vission = '$vission',
        vissionE = '$vissionE',
        skill = '$skill',
        skillE = '$skillE',
        keywords = '$keywords',
        keywordsE = '$keywordsE',
        metaDescription = '$metaDescription',
        metaDescriptionE = '$metaDescriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE',
        link = '$link',
        linkE = '$linkE'
        WHERE id= '1'";

    }


    if (mysqli_query($db, $sql)) {
        header("Location:../about/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../about/?durumguncelleme=no");
        exit();
    }
}



