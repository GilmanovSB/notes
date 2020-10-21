<?php 
require '../settings/set_db.php';
require '../db/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $pic = select_one($connection, $_GET['id'])['link'];
    $description = select_one($connection, $_GET['id'])['description'];
    $count_view = select_one($connection, $_GET['id'])['view_count'];
    if($count_view === null){
        $count_view = 0;
    }else {
        $count_view++;
    }
    insert_view($connection, $_GET['id'], $count_view);
    ?>
    <img src="<?=$pic?>" alt="#" width="320">
    <p>Загружено:<?=$description?></p>
    <p>Просмотров:<?=$count_view?></p>
</body>
</html>