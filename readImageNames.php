<?php
    $todaydate = date("Y-m-d");
    //$connect = mysqli_connect('127.0.0.1', 'kravmaga', 'dont-punch-your-friends', 'kms') or die("Failed to connect: " . mysqli_error());

    $connect = mysqli_connect('127.0.0.1', 'kravmaga', 'dont-punch-your-friends', 'kms');
    if (!$connect)
    {
        error_reporting(0);
        die("Error: Unable to connect to MySQL." . PHP_EOL);
    }

    $extensions = array('jpg', 'jpeg', 'png');
    $directory = new DirectoryIterator('img/snurr/');

    foreach ($directory as $fileinfo) {
        if ($fileinfo->isFile()) {
            $extension = strtolower(pathinfo($fileinfo->getFilename(), PATHINFO_EXTENSION));
            if (in_array($extension, $extensions)) {
                $query = "INSERT INTO images (imageName, dateAdded) VALUES ('".$fileinfo->getFilename()."','".$todaydate."' ";
                echo $connect;
                if (!mysqli_query($connect, $query)) {
                    die('An error occurred when submitting. '.mysqli_error());
                }
            }
        }
    }
?>