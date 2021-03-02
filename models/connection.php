<?php
class connection
{
	function connect()
	{

		$host = 'localhost';
		$user = 'root';
		$password = 'root';
		$db = 'Instagram';

		$con = new mysqli($host,$user,$password,$db);	

		if($con)
		{
			//echo "xconnected.";
		}
		else
		{
			//echo "connected";
		}
		return $con;
	}
}
?>