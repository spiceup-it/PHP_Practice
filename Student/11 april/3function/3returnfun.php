<?php
function add($num1,$num2)
{

	$result= $num1 + $num2;
	return $result;
}
// 	(21+3) *(5455+545)
$add1=add(21,3);
echo add(21,3)."<br>";

$add2=add(500,1);
echo add(500,1)."<br>";

echo $add1*$add2;
?>

// PHP Functions - Returning values
// To let a function return a value, use the return statement:*/

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>

