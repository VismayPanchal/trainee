<!DOCTYPE html>
<html>
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>

<?php
include_once('connection.php');
//$conn;
class models extends connection
{
	public $conn;
	
	function __construct()
	{
		$mdl = new connection();
		$this->conn = $mdl->connect();
		
		///$GLOBALS['conn']  =  new mysqli("localhost","root","root","Instagram");
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
		 if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) 
		 {
		 	$qry1 = "SELECT * FROM user WHERE user_name = '$uname'";
		 	$result = mysqli_query($this->conn,$qry1);


			if ($result->num_rows>0)
			{
				echo "<div class='alert alert-danger alert-dismissible'>
    		<button type='button' class='close' data-dismiss='alert'>&times;</button>
   			 <strong>Warning!</strong> User already exists.
  					</div>";
			}
			else{
			//echo $uname, $pass, $email;
				$qry = "INSERT INTO user (user_name, user_email, password) VALUES ('$uname','$email','$pass')";

				if($this->conn->query($qry) === TRUE)
				{
			//echo "data inserted successfully";

				}
				else
				{
			//echo "Error: " . $qry . "<br>" . $conn->error;	
				}
			}
		}
	}
}
?>