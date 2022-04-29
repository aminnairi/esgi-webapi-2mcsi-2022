<?php

function getJsonBody($array = false) {
    $rawBody = file_get_contents("php://input");
    $body = json_decode($rawBody, $array);

    return $body;
}
