<?php

//inlcude even when file is not exits it will show u the o/p
//but require will kill the next task if its unable to find that file


// include 'header1.php';
// // require '1somehtml_FOR_includeFun.php';
// // include and require functions are same
// echo 'page infomation will still be shown even when header1 folder is not exits';

require 'header1.php';

echo 'page infomation will still be shown even when header1 folder is not exits';


?>