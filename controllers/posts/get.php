<?php

include __DIR__ . "/../../functions/json-response.php";
include __DIR__ . "/../../functions/get-database-connection.php";
include __DIR__ . "/../../models/posts/get-posts.php";

try {
    $posts = getPosts();
    jsonResponse(200, [], ["success" => true, "posts" => $posts]);
} catch (PDOException $exception) {
    $errorMessage = $exception->getMessage();
    jsonResponse(500, [], ["success" => false, "error" => "Error while trying to access the dabtabase: $errorMessage"]);
}
