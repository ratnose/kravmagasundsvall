<?php
// image extensions
$extensions = array('jpg', 'jpeg', 'png');

// init result
$result = array();

// directory to scan
$directory = new DirectoryIterator('img/snurr/');

// iterate
foreach ($directory as $fileinfo) {

    $connect = mysqli_connect('127.0.0.1', 'kravmaga', 'dont-punch-your-friends', 'kms') or die("Failed to connect: " . mysqli_error());

    // must be a file
    if ($fileinfo->isFile()) {
        // file extension
        $extension = strtolower(pathinfo($fileinfo->getFilename(), PATHINFO_EXTENSION));
        // check if extension match
        if (in_array($extension, $extensions)) {
            // add to result
            echo $fileinfo->getFilename();
            $query = "INSERT INTO images (imageName) VALUES ('".$fileinfo->getFilename()."'";
            //$result[] = $fileinfo->getFilename();
        }
    }
}
// print result
print_r($result);
?>