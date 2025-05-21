<?php

include 'connect.php';

// After Submit Update the Data....

if(isset($_POST['userId']))
{
	$userId = $_POST['userId'];
	$upd_fname = $_POST['upd_fname'];
	$upd_lname = $_POST['upd_lname'];
	$upd_email = $_POST['upd_email'];
	$upd_mobile = $_POST['upd_mobile'];
	$upd_gender = $_POST['upd_gender'];

	$sql = "UPDATE `crud1` SET  Fname='$upd_fname', Lname='$upd_lname',Gmail='$upd_email',Mobile='$upd_mobile',Gender='$upd_gender' where id=$userId";

	$result= mysqli_query($con,$sql);


	if (mysqli_affected_rows($con)==1)
	{
    // echo "data inserted succesfully" ;
		echo 1;
	}
	else
	{
   // echo "Unable to Inserted";
		echo 2;
	}
}

else{
 	// echo "Data not inserted";
	echo 3;
}

?>