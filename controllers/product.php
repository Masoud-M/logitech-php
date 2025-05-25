<?php

$productsJson = file_get_contents("models/products.json");
$productsData = json_decode($productsJson, true);

$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);

$productId = $queries["id"];

$productData = array_filter($productsData, function ($product) use ($productId) {
    return $product['_id'] == $productId;
});

$productData = array_values($productData)[0] ?? null;

include("views/templates/product.php");
