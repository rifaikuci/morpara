<?php

try {
    $db = mysqli_connect("localhost", "root", "", "Mor Ödeme");
    $db->set_charset("utf8");

} catch (ErrorException  $exception) {
    echo $exception;
}


?>