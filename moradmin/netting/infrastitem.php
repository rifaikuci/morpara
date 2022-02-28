<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['infrastitemekleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $class = $_POST['class'];
    $classE = $_POST['classE'] != "" ? $_POST['classE'] : $_POST['class']  ;
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);


    $sql = "INSERT INTO tblinfrastitem (title , titleE, class, classE, 
                                        description, descriptionE, seoTitle, seoTitleE) 
                        VALUES ('$title', '$titleE', '$class',  '$classE',
                                '$description', '$descriptionE', '$seoTitle', '$seoTitleE')";


    if (mysqli_query($db, $sql)) {
        header("Location:../infrastitem/?durumekle=ok");
        exit();
    } else {
        header("Location:../infrastitem/?durumekle=no");
        exit();
    }
}

if (isset($_POST['infrastitemguncelleme'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $class = $_POST['class'];
    $classE = $_POST['classE'] != "" ? $_POST['classE'] : $_POST['class']  ;
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);

    $sql = "UPDATE tblinfrastitem set 
        title = '$title',
        titleE = '$titleE',
        class = '$class',
        classE = '$classE',
        description = '$description',
        descriptionE = '$descriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE' WHERE id= '$id'";


    if (mysqli_query($db, $sql)) {
        header("Location:../infrastitem/?durumekle=ok");
        exit();
    } else {
        header("Location:../infrastitem/?durumekle=no");
        exit();
    }
}

if (isset($_GET['infrastitemsil'])) {

    $id = $_GET['infrastitemsil'];

    $sql = "DELETE FROM tblinfrastitem  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../infrastitem/?durumsil=ok");
        exit();
    } else {
        header("Location:../infrastitem/?durumsil=no");
        exit();
    }
}


