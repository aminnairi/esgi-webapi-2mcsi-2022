<?php

include __DIR__ . "/../../functions/json-response.php";
include __DIR__ . "/../../models/todos/get-todos.php";

try {
    $todos = getTodos();

    jsonResponse(200, [], ["success" => true, "todos" => $todos]);
} catch (PDOException $exception) {
    $errorMessage = $exception->getMessage();
    jsonResponse(500, [], ["success" => false, "error" => "Error while trying to access the dabtabase: $errorMessage"]);
}
