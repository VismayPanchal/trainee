<?php
include('models/models.php');


 Class Controller{
  public $model;
  public function __construct()
  {
  	$this->model = new models();
  }
public function lomgin()
  {
    $this->model->login();
    include 'views/login.php';

  }

  public function register()
  {
   $result = $this->model->register();
   include 'views/register.php';
  }


  public function forget_pass()
  {
    $result = $this->model->forgot();
    include 'views/forgot.php';
  }
  public function explore()
  {
    $data = $this->model->fetch_user();
    //header('location:../views/explore.php');
    include 'views/explore.php';
  }

  public function home_page()
  {
    $result = $this->model->home();
    
    include 'views/feed.php';
  }
 }
?>