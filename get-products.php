<?php
// get-products.php
header('Content-Type: application/json');

// Your raw GitHub JSON URL (server-side only)
$json = file_get_contents('https://raw.githubusercontent.com/anmolui/sample/main/porducts.json');
echo $json;