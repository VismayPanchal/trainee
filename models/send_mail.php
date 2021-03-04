<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
  




if(isset($_POST['email'])){
$data = $_POST['email'];
$_SESSION["email"]=$_POST["email"];

$message = rand(999,9999);
$_SESSION["code"]=$message;

 // $data = 'yuvraj.addweb@gmail.com';
$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug  = 0; 

    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.sendgrid.net';                      
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'apikey';                    
    $mail->Password   = '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';                         
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;       
    $mail->Port       = 587;                                     
    $mail->setFrom('smith27202@gmail.com', 'FInsta');
    $mail->addAddress($data, 'Joe User');     


  
    $mail->isHTML(true);                                  
    $mail->Subject = '<b>Forgot password</b>';
    $mail->Body    = 'Hello '.$data.'<br>
        You recently requested to reset your password. Here is the verifiction code to change your password.<br> Code: '.$message.'<br><br>
          Thanks,<br>FInsta team and Co.';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //return "success";
    return "success";

} catch (Exception $e) {

//  return "fail";
return "not:;";

}
  
  }
?>

