<?php

// $productsJson = file_get_contents("models/products.json");
// $productsData = json_decode($productsJson, true);
// foreach ($productsData as $productData) {
//     $slug_titles[] = ($productData['slug_title']);
// }

// If it was index page, show the index template
// If it has slug title after "products", grab the id from prams and match it to ids from products.json and show the product template with the given id
// if it wasn't either of them show the 404 template

$routes = [
    "/" => "controllers/index.php",
    "/product" => "controllers/product.php",
];

if (array_key_exists(urlPathname(), $routes)) {
    require $routes[urlPathname()];
} else {
    abort();
}
