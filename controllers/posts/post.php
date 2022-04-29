<?php

include __DIR__ . "/../../functions/get-json-body.php";
include __DIR__ . "/../../functions/json-response.php";
include __DIR__ . "/../../models/posts/create-post.php";

try {
    $body = getJsonBody();

    createPost([
        "userId" => $body->userId,
        "title" => $body->title,
        "body" => $body->body
    ]);

    jsonResponse(201, [], ["success" => true]);    
} catch (PDOException $exception) {
    jsonResponse(500, [], ["success" => false, "error" => $exception->getMessage()]);
}
