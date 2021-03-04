<html>
<head>
</head>
<body>
 <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Upload your file</p>
    <input type="text" name="name">
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
  <?PHP
  	$server="localhost";
	$user="pmauser";
	$password="1234";
	$db="imageupload";

$conn=new mysqli($server,$user,$password,$db);

if($conn->connect_error)
{
	echo "connected Failed";
}
else
{
	echo "connected Sucessfully";
}
$name=$_POST['name'];
$filename = $_FILES["uploaded_file"]["name"];

$sql="insert into images(name,image) values('$name','$filename')";
$result=$conn->prepare($sql);
$result->execute();
  if(!empty($_FILES['uploaded_file']))
  {
  	
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }

$query="select * from images";
$result=$conn->query($query);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$image=$row['image'];
		echo "<label>".$row['name']."</label>"."<br>";
		echo "<img src='uploads/$image' alt='no images'>";
	}
}
?>


</body>
</html>
