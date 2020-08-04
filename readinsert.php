<?php
    $todaydate = date("Y-m-d");
    $lines = file("news/$todaydate.txt");
    $listarray = [];
    foreach ($lines as $line_num => $line) {
        array_push($listarray, $line);
    }
    print_r($listarray);

    $connect = mysqli_connect('127.0.0.1', 'kravmaga', 'dont-punch-your-friends', 'kms') or die("Failed to connect to MySQL: " . mysqli_error()); 

    $query = "INSERT INTO user_review (date, headline, description) VALUES ('$listarray[0]', '$listarray[1]', '$listarray[2]')";    
?>