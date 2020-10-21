
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name = "MAX_FILE_SIZE" value="5000000">
        <input type="file" name = 'pic'>
        <input type="submit">
    </form>
    <?php $pics = select($connection); ?>
    <?php foreach($pics as $pic):?>
    <a href = "views/preview.php?id=<?=$pic['id']?>"><img src="<?= $pic['link']?>" alt="$" width="250"></a>
    <?php endforeach;?>
</body>
</html>