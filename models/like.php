<?php

session_start();

include_once('connection.php');
$c = new connection();
$con= $c->connect();
$cur_id=$_SESSION['id'];
$pid= $_POST['post_id'];

$exist = "SELECT * FROM `like` WHERE user_liker_id = '$cur_id' and post_id='$pid'";
$res= mysqli_query($con,$exist);
if($res->num_rows>0)
	$qry = "DELETE FROM `like` WHERE user_liker_id = '$cur_id'";
else
	$qry = "INSERT INTO `like` VALUES ($pid,$cur_id)";


$con->query($qry);



$rqy = "SELECT count(*) as total from `like` WHERE post_id= '$pid' ";
$result = mysqli_query($con,$rqy);
$data = $result->fetch_assoc();
echo $data['total'];

?>
