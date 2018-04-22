<?php

// array_column — Return the values from a single column in the input array
// array_column


// array array_column ( array $input , mixed $column_key [, mixed $index_key = NULL ] )



$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
 
$first_names = array_column($records, 'first_name');
print_r($first_names);
echo "<br>";
$last_names = array_column($records, 'last_name');
print_r($last_names);
echo "<br>";
$id =array_column($records, 'id');
print_r($id);



?>