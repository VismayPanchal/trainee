<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'Instagram';

$con = new mysqli($host,$user,$password,$db);	

if($con->connection_error)
{
	echo "not connected.";
}
else
{
	echo "connected";
}
?>