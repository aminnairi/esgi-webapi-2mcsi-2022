<?php

include __DIR__ . "/../../functions/json-response.php";
include __DIR__ . "/../../models/users/create-user.php";

try {
    $rawBody = file_get_contents("php://input");
    $body = json_decode($rawBody);
    
    createUser([
        "name" => $body->name,
        "username" => $body->username,
        "email" => $body->email,
        "phone" => $body->phone,
        "website" => $body->website
    ]);

    jsonResponse(201, [], ["success" => true]);
} catch (PDOException $exception) {
    $errorMessage = $exception->getMessage();
    jsonResponse(500, [], ["success" => false, "error" => "Error while trying to access the dabtabase: $errorMessage"]);
}
