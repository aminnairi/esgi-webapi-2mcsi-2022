<?php

include __DIR__ . "/../../functions/get-database-connection.php";

function createPost($columns) {
    $databaseConnection = getDatabaseConnection();
    $query = $databaseConnection->prepare("INSERT INTO posts(title, body, userId) VALUES(:title, :body, :userId)");
    $query->execute($columns);
}
