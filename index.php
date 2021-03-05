<?php
include_once("controllers/controls.php");
 
//  $Controller = new Controller();
// //$Controller->home_page();
//  //$Controller->lomgin();
// // $l = new login();
// // $l->lomgin();
// //
// $Controller->forget_pass();


//include_once("Controller/Controller.php");
$controller = new Controller();
//$controller->movie();
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
case '/Instagram/index.php/register':
//require DIR . '/view/sign-up.php';
$controller->register();
break;
case '/Instagram/index.php/login' :
//require DIR . '/views/sign-up.php';
$controller->login();
break;
case '/Instagram/index.php/explore':
$controller->explore();
break;
case '/Instagram/index.php/home_page':
$controller->home_page();
# code...
break;
case '/Instagram/index.php/details':
$controller->moviedetails();
# code...
break;
case '/Instagram/index.php/profile':
$controller->edit_profile();
break;
case '/Instagram/index.php/view_profile':
$controller->view_profile();
break;

default :
$controller->login();
break; 
}

//$controller->alldetails();
//$controller->userlogin();
?>
 