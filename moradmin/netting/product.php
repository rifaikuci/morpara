<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['productekleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $class = $_POST['class'];
    $classE = $_POST['classE'] != "" ? $_POST['classE'] : $_POST['class'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);


        $sql = "INSERT INTO tblproduct (title , titleE, class, classE, 
                                        description, descriptionE, seoTitle, seoTitleE) 
                        VALUES ('$title', '$titleE', '$class',  '$classE',
                                '$description', '$descriptionE', '$seoTitle', '$seoTitleE')";


    if (mysqli_query($db, $sql)) {
        header("Location:../product/?durumekle=ok");
        exit();
    } else {
        header("Location:../product/?durumekle=no");
        exit();
    }
}

if (isset($_POST['productguncelleme'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $class = $_POST['class'];
    $classE = $_POST['classE'] != "" ? $_POST['classE'] : $_POST['class'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);

        $sql = "UPDATE tblproduct set 
        title = '$title',
        titleE = '$titleE',
        class = '$class',
        classE = '$classE',
        description = '$description',
        descriptionE = '$descriptionE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE' WHERE id= '$id'";



    if (mysqli_query($db, $sql)) {
        header("Location:../product/?durumekle=ok");
        exit();
    } else {
        header("Location:../product/?durumekle=no");
        exit();
    }
}

if (isset($_GET['productsil'])) {

    $id = $_GET['productsil'];

    $sql = "DELETE FROM tblproduct  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../product/?durumsil=ok");
        exit();
    } else {
        header("Location:../product/?durumsil=no");
        exit();
    }
}


