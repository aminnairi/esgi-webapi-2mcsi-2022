<?php

include __DIR__ . "/../../functions/get-database-connection.php";

function deleteUser($id) {
    $connection = getDatabaseConnection();
    $query = $connection->prepare("DELETE FROM users WHERE id = :id");
    $query->execute(["id" => $id]);
}
