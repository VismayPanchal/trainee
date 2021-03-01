<?php
include('models/models.php');


 Class Controller{
  public $model;
  public function __construct()
  {
  	$this->model = new models();
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
 }
?>