<?php

include "connect.php";

// Insert the Data
if(count($_POST)>0)
{

	$fname = $_POST['Fname'];
	$lname = $_POST['Lname'];
	$gmail = $_POST['Gmail'];
	$gender = $_POST['Gender'];
	$mobile = $_POST['Mobile'];

	$sql= "INSERT INTO `crud1` (`Fname`, `Lname`, `Gmail`, `Gender`, `Mobile`) VALUES ('$fname','$lname','$gmail','$gender','$mobile')";

	$result = mysqli_query($con , $sql);

	if($result)
	{
	 	echo 1;
	 }
	 else
	 {
	 	echo 2; // Unable to insert the data.
	 }
}
else
{
echo 3; //Unable to receive the data.
}



?>