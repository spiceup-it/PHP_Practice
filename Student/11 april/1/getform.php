 <?php


if(isset($_GET["stu_name"]) && isset($_GET["stu_age"]) &&isset($_GET["stu_weight"]))

 {
 	$Name=	$_GET["stu_name"];
 	$Age=		$_GET["stu_age"];
 	$weight=		$_GET["stu_weight"];


if(!empty($Name) && !empty($Age) &&  !empty($weight) )
{
echo 'Name:'   . $_GET["stu_name"] .'<br>';
echo 'Age:'    .  $_GET["stu_age"].'<br>';
echo  'weight:'. $_GET["stu_weight"].'<br>';
}


else
 {
echo "ENter all fields";
}
}

?> 
