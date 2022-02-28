<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['solutionekleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title'];
    $detailTitle = $_POST['detailTitle'];
    $detailTitleE = $_POST['detailTitleE'] != "" ? $_POST['detailTitleE'] : $_POST['detailTitle'];
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
    $skill = $_POST['skill'];
    $skillE = $_POST['skillE'] != "" ? $_POST['skillE'] : $_POST['skill'];
    $modul = $_POST['modul'];
    $modulE = $_POST['modulE'] != "" ? $_POST['modulE'] : $_POST['modul'];
    $features = $_POST['features'];
    $featuresE = $_POST['featuresE'] != "" ? $_POST['featuresE'] : $_POST['features'];
    $infrastructure = $_POST['infrastructure'];
    $infrastructureE = $_POST['infrastructureE'] != "" ? $_POST['infrastructureE'] : $_POST['infrastructure'];
    $competence = $_POST['competence'];
    $competenceE = $_POST['competenceE'] != "" ? $_POST['competenceE'] : $_POST['competence'];
    $link = base_url_front()."solution-detail/?modul=".$seoTitle;
    $linkE = base_url_front()."solution-detail/?modul=".$seoTitleE;

    if ($_FILES['img']['size'] > 0) {

        $img = imageUpload("img", "asset/solution");

        $sql = "INSERT INTO tblsolution (title , titleE, subTitle, subTitleE, class, 
                                        description, descriptionE, keywords, keywordsE, 
                                        metaDescription, metaDescriptionE, seoTitle, link, linkE, 
                                        seoTitleE, skill, skillE, competence, competenceE, detailTitle, detailTitleE,
                                        modul, modulE, features, featuresE, infrastructure, infrastructureE,img) 
                        VALUES ('$title', '$titleE', '$subTitle', '$subTitleE', '$class',
                                '$description', '$descriptionE', '$keywords', '$keywordsE',
                                '$metaDescription', '$metaDescriptionE', '$seoTitle', '$link', '$linkE', 
                                '$seoTitleE', '$skill', '$skillE', '$competence', '$competenceE', '$detailTitle', '$detailTitleE',
                                '$modul', '$modulE', '$features', '$featuresE', '$infrastructure', '$infrastructureE', '$img')";

    } else {
        $sql = "INSERT INTO tblsolution (title , titleE, subTitle, subTitleE, class, 
                                        description, descriptionE, keywords, keywordsE, 
                                        metaDescription, metaDescriptionE, seoTitle, link, linkE, 
                                        seoTitleE, skill, skillE, competence, competenceE, detailTitle, detailTitleE,
                                        modul, modulE, features, featuresE) 
                        VALUES ('$title', '$titleE', '$subTitle', '$subTitleE', '$class',
                                '$description', '$descriptionE', '$keywords', '$keywordsE',
                                '$metaDescription', '$metaDescriptionE', '$seoTitle', '$link', '$linkE', 
                                '$seoTitleE', '$skill', '$skillE', '$competence', '$competenceE', '$detailTitle', '$detailTitleE',
                                '$modul', '$modulE', '$features', '$featuresE')";
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
    $detailTitle = $_POST['detailTitle'];
    $detailTitleE = $_POST['detailTitleE'] != "" ? $_POST['detailTitleE'] : $_POST['detailTitle'];
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
    $skill = $_POST['skill'];
    $skillE = $_POST['skillE'] != "" ? $_POST['skillE'] : $_POST['skill'];
    $modul = $_POST['modul'];
    $modulE = $_POST['modulE'] != "" ? $_POST['modulE'] : $_POST['modul'];
    $features = $_POST['features'];
    $featuresE = $_POST['featuresE'] != "" ? $_POST['featuresE'] : $_POST['features'];
    $infrastructure = $_POST['infrastructure'];
    $infrastructureE = $_POST['infrastructureE'] != "" ? $_POST['infrastructureE'] : $_POST['infrastructure'];
    $competence = $_POST['competence'];
    $competenceE = $_POST['competenceE'] != "" ? $_POST['competenceE'] : $_POST['competence'];
    $link = base_url_front()."solution-detail/?modul=".$seoTitle;
    $linkE = base_url_front()."solution-detail/?modul=".$seoTitleE;

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblsolution", 'id', $id, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/solution");

        $sql = "UPDATE tblsolution set 
        title = '$title',
        titleE = '$titleE',
        detailTitle = '$detailTitle',
        detailTitleE = '$detailTitleE',
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
        skill = '$skill',
        skillE = '$skillE',
        competence = '$competence',
        competenceE = '$competenceE',
        modul = '$modul',
        modulE = '$modulE',
        link = '$link',
        linkE = '$linkE',
        features = '$features',
        featuresE = '$featuresE',
        infrastructure = '$infrastructure',
        infrastructureE = '$infrastructureE',
        img = '$img'  WHERE id= '$id'";

    } else {
        $sql = "UPDATE tblsolution set 
        title = '$title',
        titleE = '$titleE',
        detailTitle = '$detailTitle',
        detailTitleE = '$detailTitleE',
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
        skill = '$skill',
        skillE = '$skillE',
        competence = '$competence',
        competenceE = '$competenceE',
        modul = '$modul',
        modulE = '$modulE',
        features = '$features',
        link = '$link',
        linkE = '$linkE',
        infrastructure = '$infrastructure',
        infrastructureE = '$infrastructureE',
        featuresE = '$featuresE' WHERE id= '$id'";

    }

    if (mysqli_query($db, $sql)) {
        header("Location:../solution/?durumekle=ok");
        exit();
    } else {
        header("Location:../solution/?durumekle=no");
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


