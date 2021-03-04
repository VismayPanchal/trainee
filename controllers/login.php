<?php


include('controls.php');

class login extends Controller
{
	public function lomgin()
	{
		$this->model->login();
		include 'views/login.php';

	}
}