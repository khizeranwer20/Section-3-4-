<?php
$routes =require('routes.php');
function handleRequest($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        return require $routes[$uri];
    } else {
        abort();
    }
}


function abort($code = 404) {
    http_response_code($code);
    include "view/partials/$code.php";
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$response = handleRequest($uri, $routes);