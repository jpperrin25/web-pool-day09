
<?php

require("task04.php");

echo "=== TEST 1 : name + age ===\n";

$_POST = [
    "name" => "Jean",
    "age" => "21"
];

whoami();

echo "\n\n";


echo "=== TEST 2 : name sans age ===\n";

$_POST = [
    "name" => "Jean"
];

whoami();

echo "\n\n";


echo "=== TEST 3 : age sans name ===\n";

$_POST = [
    "age" => "21"
];

whoami();

echo "\n\n";


echo "=== TEST 4 : ni name ni age ===\n";

$_POST = [];

whoami();

echo "\n";
