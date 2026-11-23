<?php

require "functions.php";

$result = calculateDiscount(100000, 20);
$expected = 80000;

if ($result === $expected) {
    echo "TEST PASSED\n";
} else {
    echo "TEST FAILED\n";
    exit(1);
}
