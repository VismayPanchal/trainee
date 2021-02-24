<?php
	$host = 'localhost';
		$user = 'root';
		$password = 'root';
		$db = 'Instagram';

		$con = new mysqli($host,$user,$password,$db);	

		if($con->connection_error)
		{
			echo "not connected.";
		}
		else
		{
			echo "connected";
		}

$uname = $_POST['uname'];
echo $uname;
$qry = "SELECT * FROM user WHERE user_name = '$uname'";
$result = mysqli_query($con,$qry);


if ($result->num_rows>0)
	return 0;
else return 1;
?>