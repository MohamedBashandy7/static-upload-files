<?php
if (isset($_POST['save'])) { 
    $filename = $_FILES['file']['name'];
    $destination = 'uploads/' . $filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    if ($_FILES['file']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        if (move_uploaded_file($file, $destination)) {
            echo "File uploaded successfully!";
        }
    }
}