<?php

include __DIR__ . "/../../functions/get-database-connection.php";

function getTodos() {
    $databaseConnection = getDatabaseConnection();
    $query = $databaseConnection->query("SELECT * FROM todos");
    $todos = $query->fetchAll();

    return $todos;
}
