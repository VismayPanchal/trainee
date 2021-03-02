<?php
///include('models/models.php');
include('controls.php');

class home extends Controller
{
	
	// public function __construct()
	// {
	// $model = new models();
	// }
	public function home_page()
	{
		$model = new models();
		$data = $model->home();
		include 'views/feed.php';
	}
}
$hm = new home();
$hm->home_page();
?>