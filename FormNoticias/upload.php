<?php
    $archivo=$_FILES["file"]["type"];
if ($archivo== "image/pjpeg" ||  $archivo == "image/jpeg" || $archivo == "image/png" || $archivo == "image/gif") {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], 'uploads/'.$_FILES['file']['name'])) {
        echo json_encode('success');
    } else {
        echo json_encode('fail');
    }
}