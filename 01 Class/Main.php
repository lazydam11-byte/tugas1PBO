<?php

require_once 'iPhone.php';

$iphone13 = new iPhone("Black", "128GB");
$iphone14 = new iPhone("Grey", "256GB");

echo "Spesifikasi iPhone 13", PHP_EOL;
echo "Warna: " . $iphone13->getColor(), PHP_EOL;
echo "Storage: " . $iphone13->getStorage(), PHP_EOL;

echo "Spesifikasi iPhone 14", PHP_EOL;
echo "Warna: " . $iphone14->getColor(), PHP_EOL;
echo "Storage: " . $iphone14->getStorage(), PHP_EOL;
