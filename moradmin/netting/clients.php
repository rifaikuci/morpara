<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['clientsekleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title'];
    $link = $_POST['link'];
    $linkE = $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];

    if ($_FILES['img']['size'] > 0) {

        $img = imageUpload("img", "asset/clients");

        $sql = "INSERT INTO tblclients (title , titleE, link, linkE, img) 
                        VALUES ('$title', '$titleE', '$link', '$linkE', '$img')";

    } else {
        $sql = "INSERT INTO tblclients (title , titleE, link, linkE) 
                        VALUES ('$title', '$titleE', '$link', '$linkE')";
    }

    if (mysqli_query($db, $sql)) {
        header("Location:../clients/?durumekle=ok");
        exit();
    } else {
        header("Location:../clients/?durumekle=no");
        exit();
    }
}

if (isset($_POST['clientsguncelleme'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title'];
    $link = $_POST['link'];
    $linkE = $_POST['linkE'] != "" ? $_POST['linkE'] : $_POST['link'];

    if ($_FILES['img']['size'] > 0) {
        $resimbul = tablogetir("tblclients", 'id', $id, $db)['img'];
        unlink("../" . $resimbul);

        $img = imageUpload("img", "asset/clients");

        $sql = "UPDATE tblclients set 
        title = '$title',
        titleE = '$titleE',
        link = '$link',
        linkE = '$linkE',
        img = '$img'  WHERE id= '$id'";

    } else {
        $sql = "UPDATE tblclients set 
        title = '$title',
        titleE = '$titleE',
        link = '$link',
        linkE = '$linkE' WHERE id= '$id'";

    }

    if (mysqli_query($db, $sql)) {
        header("Location:../clients/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../clients/?durumguncelleme=no");
        exit();
    }
}

if (isset($_GET['clientssil'])) {

    $id = $_GET['clientssil'];

    $resimbul = tablogetir("tblclients", 'id', $id, $db)['img'];
    unlink("../" . $resimbul);

    $sql = "DELETE FROM tblclients  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../clients/?durumsil=ok");
        exit();
    } else {
        header("Location:../clients/?durumsil=no");
        exit();
    }
}


