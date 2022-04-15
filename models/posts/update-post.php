<?php

include __DIR__ . "/../../functions/get-database-connection.php";

function updatePost($id, $post) {
    $columns = [];
    $placeholders = [];

    foreach ($post as $column => $value) {
        $placeholders["$column"] = $value;
        $columns[] = "$column = :$column";
    }

    $columns = implode(", ", $columns); 
    $sql = "UPDATE posts SET $columns WHERE id = :id";
    $placeholders["id"] = $id;

    $connection = getDatabaseConnection();
    $query = $connection->prepare($sql);
    $query->execute($placeholders);
}
