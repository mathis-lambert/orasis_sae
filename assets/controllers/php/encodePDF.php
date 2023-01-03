<?php
/*
* use this script to encode a pdf from a js form
* and save it to the server
*/

var_dump($_FILES['file']);

// path to encode in 
$target_path = "../../articles/";

if (!empty($_FILES['file']['name'])) {
    // write the file to the server
    $target_path = $target_path . basename($_FILES['file']['name']) . ".pdf";
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
        echo "The file " . basename($_FILES['file']['name']) . " has been uploaded";
    } else {
        echo "There was an error uploading the file, please try again!";
    }
}
