<?php

// array_merge — Merge one or more arrays
// array array_merge ( array $array1 [, array $... ] )
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

?>