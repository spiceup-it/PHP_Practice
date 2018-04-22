<?php
/*
To return a reference from a function, use the reference operator & in both the function declaration and when assigning the returned value to a variable:

Example #3 Returning a reference from a function
*/

function &returns_reference()
{
    return $someref;
}

$newref =& returns_reference();
?>
