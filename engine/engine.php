<?php
require './settings/set.php';

//var_dump($_FILES);
$file_name = $_FILES['pic']['name'];
$file_dir = $_FILES['pic']['tmp_name'];
$file_distination = IMAGE_DIR . time() . '.' . pathinfo($file_name, PATHINFO_EXTENSION);


function uploads(?string $file_from_dir, string $file_to_dir) : ?bool{
    if(!$_FILES['pic']['error']){
       return move_uploaded_file($file_from_dir, $file_to_dir);
    } else {
        return false;
    }
}


function getFiles(string $str): array
{
    $file_name = scandir($str);
    $pic_name = [];
    foreach($file_name as $file){
        if($file == '.' || $file == '..'){
            false;
        }   else {
            $pic_name[] = $file;
        }
    }
    return $pic_name;
}

