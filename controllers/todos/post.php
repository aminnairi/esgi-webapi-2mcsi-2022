<?php

include __DIR__ . "/../../functions/json-response.php";
include __DIR__ . "/../../functions/get-json-body.php";
include __DIR__ . "/../../models/todos/create-todo.php";

try {
    $body = getJsonBody();

    createTodo([
        "title" => $body->title,
        "completed" => (integer) $body->completed,
        "userId" => $body->userId
    ]);

    jsonResponse(201, [], ["success" => true]);
} catch (PDOException $exception) {
    jsonResponse(500, [], ["success" => false, "error" => $exception->getMessage()]);
}
