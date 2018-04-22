<?php
/*
Using numeric array slice
functions*/

echo "<pre>";

$color=['Black', 'whtie', 'red', 'green','blue' ];

$sliced=array_slice($color, 2,2);
print_r($sliced);

echo "<br>";

$sliced=array_slice($color, -2,2);
print_r($sliced);

echo "<br>";
$sliced=array_slice($color, -2,2,true);
print_r($sliced);
echo "</pre>";
?>