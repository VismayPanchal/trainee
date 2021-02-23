<?php
include_once('connection.php');
class model extends connection
{
	public $conn;
	function __construct()
	{
		$prconn = new parent();
		$this->$conn = $prconn->connect();
	}

	public function login()
	{
		$uname = $_POST['uname'];
		$pass = $_POST['pass']; 
		$qry = "SELECT * FROM user WHERE user_name = '$uname' AND password='$pass'";
		$data = $this->conn->query($qry);
		if($data->num_rows>0)
		{
			echo "Login successful.";
		}
		else
		{
			echo "Login failed.";
		}
	}
	public function register()
	{
		$uname = $_POST['username'];
		$pass = $_POST['password'];
		$email = $_POST['email'];
		$qry = "INSERT INTO user (user_name, user_email, password) VALUES ('$uname','$email',$'$pass')";

		if(mysqli_query($this->conn, $qry))
		{
			echo "data inserted successfully";

		}
		else
		{
			//echo "failed";	
		}

	}
}
?>