<?php

/**
 * Route correspondant à un fichier ou dossier qui n'existe pas
 * @see https://www.php.net/manual/en/reserved.variables.request.php
 */
$route = $_REQUEST["route"];

$method = $_SERVER["REQUEST_METHOD"];

// Si la route est "users"
if ($route === "users") {
    if ($method === "GET") {
        /**
         * Importe le contenu du fichier "controllers/users/get.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/get.php";

        // Arrête le script à cet endroit
        die();
    }

    if ($method === "POST") {
        /**
         * Importe le contenu du fichier "controllers/users/post.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/post.php";

        // Arrête le script à cet endroit
        die();
    }

    if ($method === "PATCH") {
        /**
         * Importe le contenu du fichier "controllers/users/patch.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/patch.php";

        // Arrête le script à cet endroit
        die();
    }

    if ($method === "DELETE") {
        /**
         * Importe le contenu du fichier "controllers/users/delete.php"
         * @see https://www.php.net/manual/en/function.include.php
         */
        include __DIR__ . "/controllers/users/delete.php";

        // Arrête le script à cet endroit
        die();
    }
}

// Si la route est "comments"
if ($route === "comments") {
    /**
     * Importe le contenu du fichier "controllers/comments.php"
     * @see https://www.php.net/manual/en/function.include.php
     */
    include __DIR__ . "/controllers/comments.php";

    /**
     * Arrête l'exécution du script
     * @see https://www.php.net/manual/en/function.die.php
     */
    die();
}

// Si la route est "albums"
if ($route === "albums") {
    /**
     * Importe le contenu du fichier "controllers/albums.php"
     * @see https://www.php.net/manual/en/function.include.php
     */
    include __DIR__ . "/controllers/albums.php";

    /**
     * Arrête l'exécution du script
     * @see https://www.php.net/manual/en/function.die.php
     */
    die();
}

// Si la route est "todos"
if ($route === "todos") {
    /**
     * Importe le contenu du fichier "controllers/todos.php"
     * @see https://www.php.net/manual/en/function.include.php
     */
    include __DIR__ . "/controllers/todos.php";

    /**
     * Arrête l'exécution du script
     * @see https://www.php.net/manual/en/function.die.php
     */
    die();
}

// Si la route est "posts"
if ($route === "posts") {
    /**
     * Importe le contenu du fichier "controllers/posts.php"
     * @see https://www.php.net/manual/en/function.include.php
     */
    include __DIR__ . "/controllers/posts.php";

    /**
     * Arrête l'exécution du script
     * @see https://www.php.net/manual/en/function.die.php
     */
    die();
}

// Si la route est "photos"
if ($route === "photos") {
    /**
     * Importe le contenu du fichier "controllers/photos.php"
     * @see https://www.php.net/manual/en/function.include.php
     */
    include __DIR__ . "/controllers/photos.php";

    /**
     * Arrête l'exécution du script
     * @see https://www.php.net/manual/en/function.die.php
     */
    die();
}

// Si aucun fichier ou dossier ne nous convient
echo "Not found";
