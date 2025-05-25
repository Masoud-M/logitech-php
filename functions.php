<?php

function dd($value)
{
    echo ("<pre>");
    var_dump($value);
    echo ("</pre>");
    die();
}


function uri()
{
    $basePath = '/logitech-php';
    $uri = $_SERVER['REQUEST_URI'];

    // Remove the base path from the URI
    if (strpos($uri, $basePath) === 0) {
        $uri = substr($uri, strlen($basePath));
    }

    // Ensure there's always a leading slash
    if (empty($uri)) {
        $uri = '/';
    }

    return $uri;
}


function urlPathname()
{
    return   $url = parse_url(uri())['path'];
}


function abort($code = 404)
{
    http_response_code($code);

    require "controllers/{$code}.php";

    die();
}
