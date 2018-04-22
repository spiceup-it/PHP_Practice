<?php

// array_chunk — Split an array into chunks
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array,3));
print_r(array_chunk($input_array, 3, true));







// array array_chunk ( array $array , int $size [, bool $preserve_keys = FALSE ] )
// Chunks an array into arrays with size elements. The last chunk may contain less than size elements.
?>