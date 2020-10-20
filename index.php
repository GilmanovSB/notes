<?php
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
define('IMAGE_DIR' , ROOT_DIR . '/pic' . '/');
define('ROOT', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/');
$file_name = $_FILES['pic']['name'];
$file_dir = $_FILES['pic']['tmp_name'];



if(isset($_FILES)){
    move_uploaded_file($file_dir, IMAGE_DIR . $file_name);
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

$pics = getFiles(IMAGE_DIR); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name = 'pic'>
        <input type="submit">
    </form>
    
    <?php foreach($pics as $pic):?>
    <img src="<?= ROOT . "pic/" . $pic?>" alt="$" width="250">
    <?php endforeach;?>
</body>
</html>