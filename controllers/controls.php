<?php
include('models/models.php');


 Class Controller{
  public $model;
  function __construct()
  {
  	$this->model = new models();
  }


  public function show()
  {
   $result = $this->model->register();
   include 'views/register.php';
  }

  public function login()
  {
  	$result = $this->model->login();
  	include 'views/login.php';
  }
 }
?>