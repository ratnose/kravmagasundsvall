<?php
// image extensions
$extensions = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG','PNG');

// init result
$result = array();

// directory to scan
$directory = new DirectoryIterator('img/snurr/');

// iterate
foreach ($directory as $fileinfo) {
    // must be a file
    if ($fileinfo->isFile()) {
        // file extension
        $extension = strtolower(pathinfo($fileinfo->getFilename(), PATHINFO_EXTENSION));
        // check if extension match
        if (in_array($extension, $extensions)) {
            // add to result
            $result[] = $fileinfo->getFilename();
        }
    }
}
// print result
print_r($result);
?>