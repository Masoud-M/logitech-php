<?php

$routes = [
    "/" => "controllers/index.php",
    "/product" => "controllers/product.php",
];



if (array_key_exists(urlPathname(), $routes)) {
    require $routes[urlPathname()];
} else {
    abort();
}
