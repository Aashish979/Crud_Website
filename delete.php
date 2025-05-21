<?php
include 'connect.php';

if(isset($_REQUEST['uid']))
{
	$id = $_REQUEST['uid'];

	$delete = "DELETE FROM `crud1` WHERE id=$id";
	$result = mysqli_query($con,$delete);
	if($result)
	{
		echo 1;
		
	}
	else
	{
		echo 2;
	}
	
}

else
{
 echo 3;
}
?>

