<?php

$products = [
    ["name" => "iPhone 17", "price" => 500000],
    ["name" => "Samsung S25", "price" => 350000],
    ["name" => "Xiaomi", "price" => 150000]
];

foreach ($products as $product) {
    echo $product["name"] . " - " . $product["price"] . " KZT\n";
}