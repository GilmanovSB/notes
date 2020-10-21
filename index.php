<?php
require 'engine/engine.php';
require "settings/set_db.php";
require './db/db.php';

uploads($file_dir, $file_distination);
$pics = getFiles(IMAGE_DIR); 

if(empty(!$_FILES)){
    $file_name_dist = substr(strrchr($file_distination, "/"), 1);
    $res = insert($connection, $file_name_dist, ROOT . $file_name_dist, date("Y-m-d H:i:s"));
}

require 'views/view.php';
?>


