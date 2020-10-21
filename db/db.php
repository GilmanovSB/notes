<?php

$connection = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME);

function insert($connection, string $name, string $link, string $discription)
{
    $sql ="INSERT INTO images (name, link, description) VALUES ('$name', '$link', '$discription')";
    return mysqli_query($connection, $sql);
}

function select($connection)
{
    $sql ="SELECT * FROM images ORDER BY view_count DESC";
    $query = mysqli_query($connection, $sql);
    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}
function select_one($connection, $id){
    $sql ="SELECT * FROM images WHERE id = $id";
    $query = mysqli_query($connection, $sql);
    return mysqli_fetch_assoc($query);
}

function insert_view($connection, $id, $count)
{ 
    $sql ="UPDATE images SET view_count = $count WHERE images.id = $id;";
    return mysqli_query($connection, $sql);
}
?>
    
    
