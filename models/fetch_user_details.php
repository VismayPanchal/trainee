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
if(isset($_SESSION['id']))
{
	$cur_id= $_SESSION['id'];

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

  $a[$cnt]=$x_value;
  $cnt++;
}


}
}

$f = new fetch();
$f->get_dt();
?>