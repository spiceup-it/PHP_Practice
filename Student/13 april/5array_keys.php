
<?php
/*<!-- array_keys
array_keys — Return all the keys or a subset of the keys of an array 

syntax:
array array_keys ( array $array [, mixed $search_value = NULL [, bool $strict = FALSE ]] )-->*/

$lohit=array(0=>100, "red" =>"color", "green" =>"color");
print_r(array_keys($lohit,"color"));

// echo "<br>";
// $lohit=array("red", "green","green" ,"red", "red","green", "green");
// print_r(array_keys($lohit, "green")); /*//it shosws  number of greens[0]
// and indice number as [0]=>1*/

echo "<br>";
echo "<pre>";
$lohit=array("red", "green","green" ,"red", "red","green");
print_r(array_keys($lohit, "red"));
echo "</pre>";


?>