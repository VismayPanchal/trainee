<?php
include_once('models/models.php');


 Class Controller{
  public $model;
  public function __construct()
  {
  	$this->model = new models();
  }
public function login()
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
  public function edit_profile()
  {
    $this->model->edit_profile();
    include 'views/edit-profile.php';
  }
  public function explore()
  {
    $data = $this->model->fetch_user();
    
    //header('location:../views/explore.php');
    include 'views/explore.php';
  }
  public function view_profile()
  {
    $result = $this->model->view_profile();
    //  echo $result;
    include 'views/profile.php';
  }

  public function home_page()
  {
    $result = $this->model->home();
    
    include 'views/feed.php';
  }
 }
?>