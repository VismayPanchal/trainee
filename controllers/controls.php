<?php
include('../models/models.php');


 Class Controller{
  public $model;

  public function Controller()
  {
   $this->model=new models();
  }

  public function show()
  {
   $result = $this->model->register();
   include 'views/register.php';
  }
 }
?>