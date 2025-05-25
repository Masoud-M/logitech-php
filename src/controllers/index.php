<?php

$productsJson = file_get_contents("models/products.json");
$productsData = json_decode($productsJson, true);

include("views/templates/index.php");
