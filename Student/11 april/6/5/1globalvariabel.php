<?php

//Global variable is available everywhere in program

$name="mark";

//echo $name;

function show()
 {	
	global $name;
 	
	echo 'the name of his is'. ' =>'. $name;
}
show();

?>