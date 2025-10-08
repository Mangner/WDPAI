<?php

require  'Routing.php';
echo "<h1>Hello students!🍻</h1>";

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::run($path);