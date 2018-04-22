

<?php
// Example #1 A simple array_combine() example



/*Parameters ¶
keys
Array of keys to be used. Illegal values for key will be converted to string.

values
Array of values to be used*/

$a = array('green', 'red', 'pink'
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);

?>