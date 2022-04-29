<?php

function getJsonBody() {
    $rawBody = file_get_contents("php://input");
    $body = json_decode($rawBody);

    return $body;
}
