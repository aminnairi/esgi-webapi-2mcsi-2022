<?php

include __DIR__ . "/../../functions/get-database-connection.php";

function createUser($user) {
    $connection = getDatabaseConnection();
    $query = $connection->prepare("INSERT INTO users(name, username, email, phone, website) VALUES(:name, :username, :email, :phone, :website)");
    $query->execute($user);
}
