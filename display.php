<?php

include "connect.php";

$select = "SELECT * from `crud1`";

$result = mysqli_query($con, $select);


$data = [];

if($result == true)
{
	
	while($row = mysqli_fetch_assoc($result))
	{
		$data[] = $row;

		

	}

	echo json_encode($data);

}


?>