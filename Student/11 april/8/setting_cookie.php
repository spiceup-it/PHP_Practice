<?php
/*
setcookie(name,value,expire,path,domain);
*/


//this is setting of the cokie 

$time=time();// epoch time 1/1/1970;
echo $time;
setcookie('Stud','mark', $time+10);// $time means Epoch + cookie expire time//
?>