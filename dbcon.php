<?php
    $conn = mysqli_connect("localhost", "root", "", "movies");
    $conn->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    } else {
    }
?>