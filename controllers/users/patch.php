<?php

include __DIR__ . "/../../functions/json-response.php";
include __DIR__ . "/../../models/users/update-user.php";

try {
    updateUser(1, [
        "name" => "Anwar NAIRI",
        "username" => "anairi",
        "email" => "anairi@esgi.fr"
    ]);

    jsonResponse(201, [], ["success" => true]);
} catch (PDOException $exception) {
    $errorMessage = $exception->getMessage();
    jsonResponse(500, [], ["success" => false, "error" => "Error while trying to access the dabtabase: $errorMessage"]);
}
