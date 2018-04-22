<?php
$input = array("a", "b", "c", "d", "e");

echo "<pre>";
     // returns "c", "d", and "e"
   // returns "a", "b", and "c"

// note the differences in the array keys
print_r(array_slice($input, 2));

print_r(array_slice($input, 3,1));
print_r(array_slice($input, 1,4,trues));


echo "</pre>";

?>