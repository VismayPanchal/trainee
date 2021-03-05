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
 -->
<!-- // $data = json_decode(file_get_contents("php://input"));
// echo $data->post_id."<br>"; -->
<!-- 
 //print_r($_SESSION['id']);
//header("Access-Control-Allow-Methods: POST");
