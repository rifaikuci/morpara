<?php
include '../netting/baglan.php';
include '../include/helper.php';


if (isset($_POST['countguncelleme'])) {

    $clients = $_POST['clients'];
    $projects = $_POST['projects'];
    $hours = $_POST['hours'];
    $workers = $_POST['workers'];


        $sql = "UPDATE tblcount set 
        clients = '$clients',
        projects = '$projects',
        hours = '$hours',
        workers = '$workers'
        WHERE id= '1'";


    if (mysqli_query($db, $sql)) {
        header("Location:../count/?durumguncelleme=ok");
        exit();
    } else {
        header("Location:../count/?durumguncelleme=no");
        exit();
    }
}



