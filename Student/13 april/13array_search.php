
<?php

/*
array_search
array_search — Searches the array for a given value and returns the first corresponding key if successful*/


$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); 
// $key = 2;
$key = array_search('red', $array);   // $key = 1;



?>


