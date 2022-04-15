<?php

include __DIR__ . "/../../functions/get-database-connection.php";

function updateUser($id, $user) {
    $set = implode(", ", array_map(fn($key) => "$key = :$key", array_keys($user)));
    $connection = getDatabaseConnection();
    $query = $connection->prepare("UPDATE users SET $set WHERE id = :id");
    $query->execute(array_merge($user, ["id" => $id]));
}
