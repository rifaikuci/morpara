<?php

try {
    $db = mysqli_connect("localhost", "root", "", "morodeme");
    $db->set_charset("utf8");

} catch (ErrorException  $exception) {
    echo $exception;
}


?>