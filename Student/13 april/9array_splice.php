<?php
/*
Using associative array slice
functions*/



$color=['A'=> 'Black','B'=> 'whtie','C'=> 'red','D'=> 'green','E'=> 'blue', ];

$sliced=array_slice($color, 2,2);
print_r($sliced);

echo "<br>";
$sliced=array_slice($color, -2,2);
print_r($sliced);

echo "<br>";

?>