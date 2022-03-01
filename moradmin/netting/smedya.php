<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['smedyaekleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $class = $_POST['class'];
    $classE = $_POST['classE'] != "" ? $_POST['classE'] : $_POST['class'];
    $link = $_POST['link'];
    $linkE = $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);


    $sql = "INSERT INTO tblsmedya (title , titleE, class, classE, 
                                        link, linkE, seoTitle, seoTitleE) 
                        VALUES ('$title', '$titleE', '$class',  '$classE',
                                '$link', '$linkE', '$seoTitle', '$seoTitleE')";


    if (mysqli_query($db, $sql)) {
        header("Location:../smedya/?durumekle=ok");
        exit();
    } else {
        header("Location:../smedya/?durumekle=no");
        exit();
    }
}

if (isset($_POST['smedyaguncelleme'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $class = $_POST['class'];
    $classE = $_POST['classE'] != "" ? $_POST['classE'] : $_POST['class'];
    $link = $_POST['link'];
    $linkE = $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];
    $seoTitle = seo($title);
    $seoTitleE = seo($titleE);

    $sql = "UPDATE tblsmedya set 
        title = '$title',
        titleE = '$titleE',
        class = '$class',
        classE = '$classE',
        link = '$link',
        linkE = '$linkE',
        seoTitle = '$seoTitle',
        seoTitleE = '$seoTitleE' WHERE id= '$id'";


    if (mysqli_query($db, $sql)) {
        header("Location:../smedya/?durumekle=ok");
        exit();
    } else {
        header("Location:../smedya/?durumekle=no");
        exit();
    }
}

if (isset($_GET['smedyasil'])) {

    $id = $_GET['smedyasil'];

    $sql = "DELETE FROM tblsmedya  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../smedya/?durumsil=ok");
        exit();
    } else {
        header("Location:../smedya/?durumsil=no");
        exit();
    }
}


