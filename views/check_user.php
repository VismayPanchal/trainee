<?php
include ('models/connection.php');
$conn = new connection();
$con = $conn->connect();

$uname = $_POST['uname'];
echo $uname;
$qry = "SELECT * FROM user WHERE user_name = '$uname'";
$result = mysqli_query($con,$qry);


if ($result->num_rows>0)
	return 0;
else return 1;
?>