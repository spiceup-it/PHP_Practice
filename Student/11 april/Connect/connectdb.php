<?php


$mysql_host='localhost';
$mysql_user= 'root';

$mysql_password= '1234';

// mysql_connectdb($mysql_host, $mysql_user, 
// 	$mysql_password);
mysql_connect($mysql_host, $mysql_user, 
	$mysql_password);


echo "connect is succusfull";
?>