<?php
session_start();
include_once('connection.php');
$c = new connection();
$con= $c->connect();

	$cur_id = $_SESSION['id'];
		//$qry="SELECT * from user inner join post ON user.user_id=post.user_id inner join user_follow ON user.user_id=user_follow.user_id inner join user_follower user.user_id=user_follower.user_id where user.user_id='$cur_id'";
		$qry = "SELECT * FROM post WHERE user_id='$cur_id'";

		$data = mysqli_query($con,$qry);
		$count = $data->num_rows;
	
		if($count>0)
		{
			// $r = $data->fetch_all();
			// while($row=$data->fetch_row())
			// {
			// 	$r=$data->fetch_assoc();
			// // 	$r[]=$row->fetch_assoc();
			// // 	//$r=$rrow->fetch_assoc();
			// }

			//while($row=$data->fetch_row())
				// $row=$data->fetch_all();
				// while($row->fetch_row())
				// 	$r=$row->fetch_assoc();
			//return $r;
		}
		else
		{
			echo "record not found";
		}
while($row=$data->fetch_assoc())
{
		echo $row['post'];
		echo $row['caption'];

}


?>