<?php

$field = [
    [1,1,0,1,1,1,1,1,1,1,1],
    [1,1,0,1,1,1,1,1,1,1,1],
    [1,1,0,0,0,0,1,1,1,1,1],
    [1,1,1,1,1,0,1,1,1,1,1],
    [1,1,0,0,0,0,1,1,1,1,1],
    [1,1,0,1,1,1,1,0,0,1,1],
    [1,1,0,0,1,1,1,0,1,1,1],
    [1,1,1,0,0,1,1,0,1,1,1],
    [1,1,1,1,0,0,0,0,1,1,1],
    [1,1,1,1,1,0,1,1,1,1,1]
];

function render(array $field) : string
{
    $str = "<table>";
    foreach($field as $valls){
        $str .= "<tr>";
        foreach($valls as $vall){
            $vall == 1 ? $str .= "<td class = 'wall'>" : $str .= "<td>";
        }
        $str .= "</tr>";
    }
    return $str;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wall {
            background-color: royalblue;
        }
        td {
            width: 10px;
            height: 10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php echo render($field);?>
</body>
</html>