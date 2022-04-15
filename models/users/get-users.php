<?php

include __DIR__ . "/../../functions/get-database-connection.php";

function getUsers() {
    $connection = getDatabaseConnection();
    $query = $connection->query("SELECT * FROM users;");
    $users = $query->fetchAll();

    return $users;
}
