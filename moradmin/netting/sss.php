<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['sssekleme'])) {

    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title'];
    $answer = $_POST['answer'];
    $answerE = $_POST['answerE'] != "" ? $_POST['answerE'] : $_POST['answer'];


    $sql = "INSERT INTO tblsss (title , titleE, answer, answerE) 
                        VALUES ('$title', '$titleE', '$answer',  '$answerE')";


    if (mysqli_query($db, $sql)) {
        header("Location:../sss/?durumekle=ok");
        exit();
    } else {
        header("Location:../sss/?durumekle=no");
        exit();
    }
}

if (isset($_POST['sssguncelleme'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $titleE = $_POST['titleE'] != "" ? $_POST['titleE'] : $_POST['title'];
    $answer = $_POST['answer'];
    $answerE = $_POST['answerE'] != "" ? $_POST['answerE'] : $_POST['answer'];

    $sql = "UPDATE tblsss set 
        title = '$title',
        titleE = '$titleE',
        answer = '$answer',
        answerE = '$answerE' WHERE id= '$id'";


    if (mysqli_query($db, $sql)) {
        header("Location:../sss/?durumekle=ok");
        exit();
    } else {
        header("Location:../sss/?durumekle=no");
        exit();
    }
}

if (isset($_GET['ssssil'])) {

    $id = $_GET['ssssil'];

    $sql = "DELETE FROM tblsss  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../sss/?durumsil=ok");
        exit();
    } else {
        header("Location:../sss/?durumsil=no");
        exit();
    }
}


