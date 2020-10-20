<?php
require 'settings/set.php';

$file_name = $_FILES['pic']['name'];
$file_dir = $_FILES['pic']['tmp_name'];
$fileDistination = IMAGE_DIR . $file_name;

function uploads(string $fileFromDir, string $fileToDir) : bool{
    if(isset($_FILES)){
       return move_uploaded_file($fileFromDir, $fileToDir);
    }
}


function getFiles(string $str): array
{
    $fileName = scandir($str);
    $picName = [];
    foreach($fileName as $file){
        if($file == '.' || $file == '..'){
            false;
        }   else {
            $picName[] = $file;
        }
    }
    return $picName;
}

