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
$a=array();
$cnt=0;
foreach($arr as $x => $x_value) {
 // echo "Key=" . $x . ", Value=" . $x_value;
 // echo "<br>";
  $a[$cnt]=$x_value;
  $cnt++;
}
//retur $arr;

//$_SESSION['dp']=$arr["user_dp"];
//$_SESSION['bio']=$arr["bio"];
//$_SESSION['email']=$arr["user_email"];
//echo json_encode($arr);
//echo $arr['user_name'];
// for ($i=0;$i<count($a);$i++)
// 	echo $a[$i]."<br";
// echo $arr;
echo json_encode($arr);

}
}

$f = new fetch();
$f->get_dt();
?>