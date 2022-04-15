<?php

include __DIR__ . "/../../functions/json-response.php";
include __DIR__ . "/../../functions/get-database-connection.php";

try {
    $connection = getDatabaseConnection();
    $query = $connection->query("SELECT * FROM posts;");
    $users = $query->fetchAll();

    jsonResponse(200, [], ["success" => true, "posts" => $users]);
} catch (PDOException $exception) {
    $errorMessage = $exception->getMessage();
    jsonResponse(500, [], ["success" => false, "error" => "Error while trying to access the dabtabase: $errorMessage"]);
}

