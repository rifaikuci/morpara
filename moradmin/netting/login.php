<?php
include '../netting/baglan.php';
include '../include/helper.php';

if (isset($_POST['girisyap'])) {
    session_start();
    $name = $_POST['name'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM tblyonetici WHERE name = '$name'  AND password = '$password'";
    $sonuc = mysqli_query($db, $sql);
    $row = $sonuc->fetch_assoc();

    if (count($row) > 0) {
        $_SESSION['kullanici'] = $row['name'];
        header("Location:" . base_url() );
        exit();
    } else {
        header("Location:" . base_url() . "login/?kullanici=no");
        exit();
    }

}

if (isset($_GET['cikisyap']) == true) {
    session_start();

    session_destroy();
    header("Location:" . base_url() . "login");
}