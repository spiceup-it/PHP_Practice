<?php

session_start();
$name=    $_SESSION['Name'] ;
$age=     $_SESSION['age'] ;
$weight=  $_SESSION['weight'];





echo $name."<br>";
echo $age."<br>";
echo $weight."<br>";

?>