<?php
    $todaydate = date("Y-m-d");
    $lines = file("img/snurr/");
    $listarray = [];
    foreach ($lines as $line_num => $line) {
        array_push($listarray, $line);
    }

    $connect = mysqli_connect('127.0.0.1', 'kravmaga', 'dont-punch-your-friends', 'kms') or die("Failed to connect: " . mysqli_error());
    $query = "INSERT INTO news (date, headline, description) VALUES ('".$listarray[0]."', '".$listarray[1]."', '".$listarray[2]."')";

    if (!mysqli_query($connect, $query)) {
        die('An error occurred when submitting. '.mysqli_error());
    }
?>
