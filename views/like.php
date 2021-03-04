<?php

session_start();
//print_r($_SESSION['id']);
include_once('../models/connection.php');
$c = new connection();
$con= $c->connect();
$cur_id=$_SESSION['id'][0];
$pid= $_POST['post_id'];
echo $pid;
$rqy = "SELECT count(*) as total from `like`";//" WHERE post_id=1";
$result = mysqli_query($con,$rqy);
$data = $result->fetch_assoc();
echo $data['total'];

?>
<!-- 
// class likes extends connection
// {
// 	public $con;
// 	public $data;
// 	public function __construct()
// 	{
// 		$c = new connection();
// 		$this->con= $c->connect();
// 	}
// 	public function getlikes()
// 	{
// 		$cur_id= $_SESSION['id'][0];
// 		$pid = $_POST['post_id'];
		
// 		$qry="SELECT count(*) as total from `like`";//" WHERE post_id='$pid'";

// 		$result=mysqli_query($this->con,$qry);
// 		$this->data=$result->fetch_assoc();
// 		echo $this->data['total'];
// 		exit;
// 	}
// 	public function addlikes()
// 	{
// 		$cur_id= $_SESSION['id'][0];
// 		$pid = $_POST['post_id'];
// 		$qry = "INSERT INTO `like` VALUES('$pid','$cur_id')";
// 		if(mysqli_query($this->con, $qry))
// 		{
// 			self::getlikes();
// 		}
// 		else
// 		{

// 		}
// 	}
// }

// $lk = new likes();
// $lk->getlikes();
 -->