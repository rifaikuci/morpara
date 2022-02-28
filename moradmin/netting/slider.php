<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['sliderekleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $btnTitle = $_POST['btnTitle'];
    $btnTitleE = $_POST['btnTitleE'] != "" ? $_POST['btnTitleE'] : $_POST['btnTitle'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $link = $_POST['link'];
    $linkE = $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];

    if ($_FILES['img']['size'] > 0) {

        $img = imageUpload("img", "asset/slider");
        $sql = "INSERT INTO tblslider (title , titleE, btnTitle, btnTitleE, 
                                        description, descriptionE, link, linkE, img) 
                        VALUES ('$title', '$titleE', '$btnTitle', '$btnTitleE',
                                '$description', '$descriptionE', '$link', '$linkE', '$img')";

    } else {
        $sql = "INSERT INTO tblslider (title , titleE, btnTitle, btnTitleE, 
                                        description, descriptionE, link, linkE) 
                        VALUES ('$title', '$titleE', '$btnTitle', '$btnTitleE',
                                '$description', '$descriptionE', '$link', '$linkE')";
    }

    if (mysqli_query($db, $sql)) {
        header("Location:../slider/?durumekle=ok");
        exit();
    } else {
        header("Location:../slider/?durumekle=no");
        exit();
    }
}

if (isset($_POST['sliderguncelleme'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title']  ;
    $btnTitle = $_POST['btnTitle'];
    $btnTitleE = $_POST['btnTitleE'] != "" ? $_POST['btnTitleE'] : $_POST['btnTitle'];
    $description = $_POST['description'];
    $descriptionE = $_POST['descriptionE'] != "" ? $_POST['descriptionE'] : $_POST['description'];
    $link = $_POST['link'];
    $linkE = $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblslider", 'id', $id, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/slider");

        $sql = "UPDATE tblslider set 
        title = '$title',
        titleE = '$titleE',
        btnTitle = '$btnTitle',
        btnTitle = '$btnTitleE',
        description = '$description',
        descriptionE = '$descriptionE',
        link = '$link',
        linkE = '$linkE',
        img = '$img'  WHERE id= '$id'";

    } else {
        $sql = "UPDATE tblslider set 
        title = '$title',
        titleE = '$titleE',
        btnTitle = '$btnTitle',
        btnTitle = '$btnTitleE',
        description = '$description',
        descriptionE = '$descriptionE',
        link = '$link',
        linkE = '$linkE'
                        WHERE id= '$id'";

    }

    if (mysqli_query($db, $sql)) {
        header("Location:../slider/?durumekle=ok");
        exit();
    } else {
        header("Location:../slider/?durumekle=no");
        exit();
    }
}

if (isset($_GET['slidersil'])) {

    $id = $_GET['slidersil'];

    $resimbul = tablogetir("tblslider", 'id', $id, $db)['img'];
    unlink("../" . $resimbul);

    $sql = "DELETE FROM tblslider  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../slider/?durumsil=ok");
        exit();
    } else {
        header("Location:../slider/?durumsil=no");
        exit();
    }
}


