<?php

// why we need this  die

$website= 'http://www.google213.com';

echo '<a href='.$website.'>Google</a>';

@fopen($website, 'r') or exit("<i><br>Link is wrong so im exiting from it</i>"); //r=>read


//here i have wrong link address
// I dont want to show error message
// so ill use function
// fopen and exit functiom

// Definition and Usage
// The fopen() function opens a file or URL.

// If fopen() fails, it returns FALSE and an error on failure. You can hide the error output by adding an '@' in front of the function name.

// Syntax
// fopen(filename,mode,include_path,context)
?>