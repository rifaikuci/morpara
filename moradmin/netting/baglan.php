<?php

error_reporting(0);
ini_set('display_errors', 0);

try {
    $db = mysqli_connect("localhost", "root", "", "morodeme");
    $db->set_charset("utf8");

} catch (ErrorException  $exception) {
    echo $exception;
}

?>