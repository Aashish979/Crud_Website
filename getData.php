<?php
include 'connect.php';

//Get Data...
if(isset($_REQUEST['empId']))
{
	$empId = $_GET['empId'];
	$result = mysqli_query($con,"SELECT * FROM `crud1` WHERE id=$empId");
	if($result)
	{
		$row = mysqli_fetch_assoc($result);
		echo json_encode($row);
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