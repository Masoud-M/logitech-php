<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/") {
    require 'controllers/index.php';
} else {
    require 'controllers/404.php';
}
