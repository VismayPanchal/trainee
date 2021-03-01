<!DOCTYPE html>
<html>
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  	#hi
  	{
  		width: 500px;
  		align-self: center;
  		position: absolute;
  		margin: auto;
  		right: 200px;
  		top :20px;
  	}
  	#ht
  	{
  		 width: 500px;
  		align-self: center;
  		position: absolute;
  		margin: auto;
  		left: 250px;
  		top :20px;

  	}
  </style>
 </head>
<body>

</body>
</html>

<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
		$uname = $_POST['username'];
		$pass = $_POST['password']; 

		//echo $_POST['username'];
		 if (isset($_POST['username']) &&  isset($_POST['password'])) 
		 {
			$qry = "SELECT * FROM user WHERE user_name = '$uname' and password='$pass'";

				

			$data = $this->conn->query($qry);
			if($data->num_rows>0)
			{
				//header("Location:views/feed.php");
				include_once 'views/feed.php';
			}
			else
			{
		
	?>
				<div id='hi' class='alert alert-danger alert-dismissible' style='display:inline;'>
    		<button type='button' class='close' data-dismiss='alert'>&times;</button>
   			 <strong>Login failed.</strong> 
  					</div>

	<?php		
						
				
			}
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
				?><div id='ht' class='alert alert-danger alert-dismissible' style='display:inline;'>
    		<button type='button' class='close' data-dismiss='alert'>&times;</button>
   			 <strong>Warning!</strong> User already exists.
  					</div>

  			<?php
			}
			else{
			//echo $uname, $pass, $email;
				$qry = "INSERT INTO user (user_name, user_email, password, bio, user_dp) VALUES ('$uname','$email','$pass','','default.jpg')";

				if(mysqli_query($this->conn, $qry))
				{ 
			//echo "data inserted successfully";
					?>
					<div id='ht' class='alert alert-success alert-dismissible' style='display:inline;'>
    		<button type='button' class='close' data-dismiss='alert'>&times;</button>
   			 Registered successfully.
  					</div>
					<?php
					//header('Location:/views/login.php');
					include_once 'views/login.php';	
				}
				else
				{
			 	echo "Error: "  . "<br>" . $this->conn-> error;	
				}
			}
		}
	}
	public function forgot()
	{
		$data = $_SESSION['email'];
      //echo $data;
     
     	 if(isset($_POST['code']) && isset($_POST['password']))
     	 {
     	 	$code = $_POST['code'];
     	 	$varify = $_SESSION['code'];
     	 	$pass = $_POST['password'];
     	 //	echo $code, $varify;
     	 	if($code == $varify)
     	 	{

     	 	$qry = "UPDATE user SET password='$pass' WHERE user_email='$data'";
     	 	if(mysqli_query($this->conn, $qry))
				{ 
			//echo "data inserted successfully";
					?>
					<div id='ht' class='alert alert-success alert-dismissible' style='display:inline;'>
    		<button type='button' class='close' data-dismiss='alert'>&times;</button>
   			Password changed.
  					</div>
					<?php
					//header('Location:/views/login.php');
					include_once 'views/login.php';	
				}
				else
				{
			 	echo "Error: "  . "<br>" . $this->conn-> error;	
				}

     	 	}
     	 	else
     	 	{
     	 		?>
     	 		<div id='ht' class='alert alert-danger alert-dismissible' style='display:inline;'>
    		<button type='button' class='close' data-dismiss='alert'>&times;</button>
   			Wrong code.
  					</div>
     	 		<?php
     	 	}
     	 }

	}
}
?>