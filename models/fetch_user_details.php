<?php
session_start();

include_once('connection.php');
class fetch extends connection
{
	public $con;
	public function __construct()
	{
		$c = new connection();
		$this->con= $c->connect();
	}
public function get_dt()
{
$arr=array();
if(isset($_SESSION['id'][0]))
{
	$cur_id= $_SESSION['id'][0];

	$qry= "SELECT * FROM user WHERE user_id='$cur_id'";
	$result = mysqli_query($this->con,$qry);
	if ($result->num_rows>0)
	{
		$arr=$result->fetch_assoc();
	}

}
foreach($arr as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
//retur $arr;
echo json_encode($arr);
$_SESSION['dp']=$arr["user_dp"];
$_SESSION['bio']=$arr["bio"];
$_SESSION['email']=$arr["user_email"];
//echo $arr['user_name'];
//eturn $arr;
exit();
}
}

$f = new fetch();
$f->get_dt();
?>