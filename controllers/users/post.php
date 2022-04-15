<?php

include __DIR__ . "/../../functions/json-response.php";
include __DIR__ . "/../../models/users/create-user.php";

try {
    createUser([
        "name" => "Amin NAIRI",
        "username" => "anairi",
        "email" => "anairi@esgi.fr",
        "phone" => "0102030405",
        "website" => "https://github.com/aminnairi"
    ]);

    jsonResponse(201, [], ["success" => true]);
} catch (PDOException $exception) {
    $errorMessage = $exception->getMessage();
    jsonResponse(500, [], ["success" => false, "error" => "Error while trying to access the dabtabase: $errorMessage"]);
}
