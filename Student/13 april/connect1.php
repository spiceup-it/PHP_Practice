<?php
$host='localhost';
$user='root';
$pass='1234';
$db='testdb';

if(!@mysqli_connect('localhost',$user,$pass))
{
	die('cannot connect to db');

}
else{
	if(@mysqli_select_db('testdb'))
	{
		echo 'connection succuss';

	}
else {
	die('see cannot connect to database');
}

}
?>