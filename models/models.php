<?php
session_start();
?>


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
		$_SESSION['user'] = $uname;

		//echo $_POST['username'];
		 if (isset($_POST['username']) &&  isset($_POST['password'])) 
		 {
			$qry = "SELECT * FROM user WHERE user_name = '$uname' and password='$pass'";

				

			$data = $this->conn->query($qry);
			if($data->num_rows>0)
			{
				//header("Location:views/feed.php");
				$row = $data->fetch_assoc();
				$_SESSION['id']=$row["user_id"];
				$_SESSION['dp']=$row["user_dp"];
				$_SESSION['bio']=$row["bio"];
				$_SESSION['email']=$row["user_email"];


				//
				header("location:home_page");
				//include_once 'views/feed.php';
			}
			else
			{
		
	?>
				<div id='hi' class='alert alert-danger alert-dismissible' style='display:inline;'>
    		<button type='button' class='close' data-dismiss='alert'>&times;</button>
   			 <strong>Login failed.</strong> 
  					</div>

	<?php		
			//include "/Instagram/index.php/login";
						
				
			}
		}
		
	}

	public function fetch_user()
	{
		$cur_id = $_SESSION['id'];
		$qrty = "SELECT * FROM user WHERE user_id != '$cur_id'";
		$data = mysqli_query($this->conn,$qrty);
		if($data->num_rows>0)
		{
			while($row=$data->fetch_object())
			{
				$r[]=$row;
			}
		}
		return $r;
	}
	public function view_profile()
	{
		$cur_id = $_SESSION['id'];
		//$qry="SELECT * from user inner join post ON user.user_id=post.user_id inner join user_follow ON user.user_id=user_follow.user_id inner join user_follower user.user_id=user_follower.user_id where user.user_id='$cur_id'";
		// $qry = "SELECT * FROM user inner join post ON user.user_id=post.user_id 
		// inner join user_follower ON user.user_id=user_follower.user_id WHERE user.user_id='$cur_id'";
//echo "entered";
		$qry = "SELECT * FROM post WHERE user_id='$cur_id'";

		$data = mysqli_query($this->conn,$qry);
		$count = $data->num_rows;
	
		if($count>0)
		{

			return $data;
		}
		else
		{
			//echo "damta noit fout";
		}
	}
	public function home()
	{
		if(isset($_SESSION['user']))
		{
			$cur_id = $_SESSION['id'];
			///$cur_id=41;
			//print_r($_SESSION['id'][0]);
			$qry = "SELECT user_follow_id FROM user_follow WHERE user_id = '$cur_id'";
			$result = mysqli_query($this->conn,$qry);

			if($result->num_rows>0)
			{
				//echo $result[0];

				while($row = $result->fetch_row())
				{
					//echo $row[0];
					
					$qr = "SELECT * FROM user as a inner join post as b ON a.user_id = b.user_id WHERE a.user_id = $row[0]";
					$resu = mysqli_query($this->conn,$qr);
					if($resu->num_rows>0)
					{
						$r[]=$resu->fetch_assoc();

					}
					//echo $r; 	
					// $res = mysqli_query($this->conn,$q);
					// if($res->num_rows>0)
					// {
					// 	while($rows = $res->fetch_object())
					// 	{
					// 		$r[]=$rows;
					// 	}
					// }

					// $qr= "SELECT * FROM user WHERE user_id='$row[0]'";
					// $resl = mysqli_query($this->conn,$qr);
					// if($resl->num_rows>0)
					// {
					// 	while ($rws = $resl->fetch_object())
					// 	{
					// 		$r[]=$rws;
					// 	}

					// }
				}
				return $r;
			}
			

		}
		else
		{
			return "not login";
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

	public function edit_profile()
	{
		if(isset($_SESSION['id']))
		{
			if(isset($_POST['username']) || isset($_POST['email']) || isset($_POST['bio']) || isset($_POST['uploaded_file']))
			{
				$name = $_POST['username'];
				$email = $_POST['email'];
				$bio = $_POST['bio'];
				$dp = $_FILES["uploaded_file"]["name"];

				$id=$_SESSION['id'];
				$qr = "UPDATE user SET user_name='$name', user_email='$email', bio='$bio', user_dp='$dp' WHERE user_id='$id'";
				if(mysqli_query($this->conn, $qr))
				{ 
			//echo "data inserted successfully";
					?>
					<div id='ht' class='alert alert-success alert-dismissible' style='display:inline;'>
    		<button type='button' class='close' data-dismiss='alert'>&times;</button>
   			profile updated.
  					</div>
					<?php
					//header('Location:/views/login.php');
					//include_once 'views/login.php';	
				}
				else
				{
			 	echo "Error: "  . "<br>" . $this->conn-> error;	
				}
				  // if(!empty($_FILES["dp"]))
 				 // {
  	
  				//   $path = "Instagram/models/upload/";
  				//   echo $path;
  				//   $file_name = $_FILES["dp"]["name"];
  				//   echo $file_name;
   			// 		// $path = $path . basename( $_FILES["dp"]["name"]);
   			// 		 echo ($_FILES["dp"]["name"]);
   			// 		 echo "<br>$path";
   			// 		 $tmp= $_FILES['dp']['tmp_name'];
   			// 		 if(move_uploaded_filssse($tmp, $path.$file_name)) {
  				//     echo "The file has been uploaded";
   			// 		 } else{
    		// 	    echo "There was an error uploading the file, please try again!".$_FILES["dp"]["error"];
  				// 	  }
  				// }
  				  if(!empty($_FILES['uploaded_file']))
 				 {

  	
 			   		//$path = "Instagram/views/profiles/";
 			   		$path= "views/profiles/";
 				   $path = $path . basename( $_FILES['uploaded_file']['name']);
 				   //echo $path;
				    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
				      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
				      " has been uploaded";
				    } else{
				        echo "There was an error uploading the file, please try again!";
				    }
				  }

     	 	}

			
		}
		else
     	 	{
     	 		?>
     	 		<div id='ht' class='alert alert-danger alert-dismissible' style='display:inline;'>
    		<button type='button' class='close' data-dismiss='alert'>&times;</button>
   			Not logged in.
  					</div>
     	 		<?php
     	 	}	
     	 }
}
?>