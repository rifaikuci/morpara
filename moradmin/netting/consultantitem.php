<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['consultantitemekleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $class = $_POST['class'];
    $classE = $_POST['classE'] != "" ? $_POST['classE'] : $_POST['class'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);


    $sql = "INSERT INTO tblconsultantitem (title , titleE, class, classE, 
                                        description, descriptionE, seoTitle, seoTitleE) 
                        VALUES ('$title', '$titleE', '$class',  '$classE',
                                '$description', '$descriptionE', '$seoTitle', '$seoTitleE')";


    if (mysqli_query($db, $sql)) {
        header("Location:../consultantitem/?durumekle=ok");
        exit();
    } else {
        header("Location:../consultantitem/?durumekle=no");
        exit();
    }
}

if (isset($_POST['consultantitemguncelleme'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $class = $_POST['class'];
    $classE = $_POST['classE'] != "" ? $_POST['classE'] : $_POST['class'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);

    $sql = "UPDATE tblconsultantitem set 
        title = '$title',
        titleE = '$titleE',
        class = '$class',
        classE = '$classE',
        description = '$description',
        descriptionE = '$descriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE' WHERE id= '$id'";


    if (mysqli_query($db, $sql)) {
        header("Location:../consultantitem/?durumekle=ok");
        exit();
    } else {
        header("Location:../consultantitem/?durumekle=no");
        exit();
    }
}

if (isset($_GET['consultantitemsil'])) {

    $id = $_GET['consultantitemsil'];

    $sql = "DELETE FROM tblconsultantitem  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../consultantitem/?durumsil=ok");
        exit();
    } else {
        header("Location:../consultantitem/?durumsil=no");
        exit();
    }
}


