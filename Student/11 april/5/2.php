<?php

// I can have any number of function names

$name="mark";
$n="jim";

// echo $name;
// echo $n;

function show()
 {	
	global $name,$n  ;
   	
	echo 'the name of his is'. ' =>'. $name . ' '.$n;
}
show();

?>