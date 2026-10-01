<?php

require("task04.php");

echo "=== TEST 1 : age = 0 ===\n";

$_POST = [
    "name" => "Jean",
    "age" => "0"
];

whoami();

echo "\n\n";


echo "=== TEST 2 : age = -5 ===\n";

$_POST = [
    "name" => "Jean",
    "age" => "-5"
];

whoami();

echo "\n\n";


echo "=== TEST 3 : age = 21.5 ===\n";

$_POST = [
    "name" => "Jean",
    "age" => "21.5"
];

whoami();

echo "\n\n";


echo "=== TEST 4 : age = abc ===\n";

$_POST = [
    "name" => "Jean",
    "age" => "abc"
];

whoami();

echo "\n";

