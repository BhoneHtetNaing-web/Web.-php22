<?php
    $conn = mysqli_connect("localhost", "root", "", "project") or die("Error Connect");

    if ($conn) {
    $conn->set_charset("utf8");
    }
?>