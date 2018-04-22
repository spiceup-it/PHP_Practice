<?php
require 'connect.php';
$query="SELECT * FROM `user_info";
if(@$is_query_run=mysqli_query($query))
{
	echo "query executed". "<br>";
	while($query_execute=mysqli_fetch_assoc($is_query_run))
{
	echo $query_execute['Name']. "<br>";

}
}
else
{

	echo "query not executed";
}
?>