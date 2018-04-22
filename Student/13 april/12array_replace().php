<?php
/*array_replace


array_replace — Replaces elements from passed arrays into the first array
*/


echo "<pre>";
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2=array(0=>"milk");

// $basket = array_replace($base, $replacements, $replacements2);
print_r($basket);
echo "</pre>";
?>