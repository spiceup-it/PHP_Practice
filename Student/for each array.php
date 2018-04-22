<?php 
$stu=array(array('Name'=>'mark', 'Age'=>10,'weight'=>152),
		   array('Name'=>'Dan', 'Age'=>23,'weight'=>132),
		   array('Name'=>'Mocus', 'Age'=>140,'weight'=>152));


foreach ($stu as $st=>$con)
{
	echo '<br>'.$st .' =>';
	foreach($con as $item)
	{
		echo $item. ' ';
	}
}
?>