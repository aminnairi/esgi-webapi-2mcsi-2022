<?php

include __DIR__ . "/../../functions/json-response.php";
include __DIR__ . "/../../models/posts/update-post.php";

try {
    updatePost(1, [
        "title" => "Autre titre",
        "body" => "Autre contenu"
    ]);

    jsonResponse(200, [], ["success" => true]);
} catch (PDOException $exception) {
    $errorMessage = $exception->getMessage();
    jsonResponse(500, [], ["success" => false, "error" => "Error while trying to access the dabtabase: $errorMessage"]);
}

