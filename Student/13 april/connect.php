<?php

$user='root';
$pass='1234';
$db='testdb';
$db=new mysqli('localhost', $user,$pass,$db) or die("Unable");
echo "Great work!!";
?>