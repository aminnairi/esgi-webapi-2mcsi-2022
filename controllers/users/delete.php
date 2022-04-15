<?php

include __DIR__ . "/../../functions/json-response.php";
include __DIR__ . "/../../models/users/delete-user.php";

try {
    deleteUser(1);
    jsonResponse(201, [], ["success" => true]);
} catch (PDOException $exception) {
    $errorMessage = $exception->getMessage();
    jsonResponse(500, [], ["success" => false, "error" => "Error while trying to access the dabtabase: $errorMessage"]);
}
