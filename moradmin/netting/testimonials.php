<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['testimonialsekleme'])) {

    $name = $_POST['name'];
    $nameE = $_POST['nameE'] != "" ? $_POST['nameE'] : $_POST['name'];
    $comment = $_POST['comment'];
    $commentE = $_POST['commentE'] != "" ? $_POST['commentE'] : $_POST['comment'];
    $job = $_POST['job'];
    $jobE = $_POST['jobE'] != "" ? $_POST['jobE'] : $_POST['job'];
    $rating = $_POST['rating'];
    $ratingE = $_POST['ratingE'] != "" ? $_POST['ratingE'] : $_POST['rating'];


    $sql = "INSERT INTO tbltestimonials (name , nameE, comment, commentE, job, jobE, rating, ratingE) 
                        VALUES ('$name', '$nameE', '$comment',  '$commentE', '$job', '$jobE', '$rating', '$ratingE')";


    if (mysqli_query($db, $sql)) {
        header("Location:../testimonials/?durumekle=ok");
        exit();
    } else {
        header("Location:../testimonials/?durumekle=no");
        exit();
    }
}

if (isset($_POST['testimonialsguncelleme'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $nameE = $_POST['nameE'] != "" ? $_POST['nameE'] : $_POST['name'];
    $comment = $_POST['comment'];
    $commentE = $_POST['commentE'] != "" ? $_POST['commentE'] : $_POST['comment'];
    $job = $_POST['job'];
    $jobE = $_POST['jobE'] != "" ? $_POST['jobE'] : $_POST['job'];
    $rating = $_POST['rating'];
    $ratingE = $_POST['ratingE'] != "" ? $_POST['ratingE'] : $_POST['rating'];

    $sql = "UPDATE tbltestimonials set 
        name = '$name',
        nameE = '$nameE',
        job = '$job',
        jobE = '$jobE',
        rating = '$rating',
        ratingE = '$ratingE',
        comment = '$comment',
        commentE = '$commentE' WHERE id= '$id'";


    if (mysqli_query($db, $sql)) {
        header("Location:../testimonials/?durumekle=ok");
        exit();
    } else {
        header("Location:../testimonials/?durumekle=no");
        exit();
    }
}

if (isset($_GET['testimonialssil'])) {

    $id = $_GET['testimonialssil'];

    $sql = "DELETE FROM tbltestimonials  
        where id = '$id' ";

    if (mysqli_query($db, $sql)) {
        header("Location:../testimonials/?durumsil=ok");
        exit();
    } else {
        header("Location:../testimonials/?durumsil=no");
        exit();
    }
}


