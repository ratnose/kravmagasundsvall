<?php
    $todaydate = date("Y-m-d");
    $extensions = array('jpg', 'jpeg', 'png');

    $directory = new DirectoryIterator('img/snurr/');

    foreach ($directory as $fileinfo) {

        $connect = mysqli_connect('127.0.0.1', 'kravmaga', 'dont-punch-your-friends', 'kms') or die("Failed to connect: " . mysqli_error());

        if ($fileinfo->isFile()) {
            $extension = strtolower(pathinfo($fileinfo->getFilename(), PATHINFO_EXTENSION));
            if (in_array($extension, $extensions)) {
                $query = "INSERT INTO images (imageName, dateAdded) VALUES ('".$fileinfo->getFilename()."','".$todaydate."' ";
                if (!mysqli_query($connect, $query)) {
                    die('An error occurred when submitting. '.mysqli_error());
                }
            }
        }
    }
?>