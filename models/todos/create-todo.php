<?php

include __DIR__ . "/../../functions/get-database-connection.php";

function createTodo($columns) {
    $databaseConnection = getDatabaseConnection();
    $query = $databaseConnection->prepare("INSERT INTO todos(title, completed, userId) VALUES(:title, :completed, :userId)");
    $query->execute($columns);
}
