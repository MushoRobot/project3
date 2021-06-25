
<?php
session_start();
   $a= $_SESSION["e"];
   $name = $_SESSION["n"] ;
    $ff = $_SESSION["fn"] ;
   $ss = $_SESSION["sn"] ;
  

require 'connection.php';
require 'send/PHPMailer/PHPMailer.php';
require 'send/PHPMailer/SMTP.php';
require 'send/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exeption\Exception;
use PHPMailer\SMTP\SMTP;



  
$mail = new PHPMailer();
// $SMTP = new SMTP();


$mail->SMTPDebug = 4;                               // Enable verbose debug output
$mail->CharSet = 'UTF-8';
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'phpmailer926@gmail.com';                 // SMTP username
// $mail->Password = 'alm39013800';                           // SMTP password
$mail->Username = 'mushorobot@gmail.com';                 // SMTP username
$mail->Password = 'thegreatmushorise';                           // SMTP password

      // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;       
$mail->SMTPSecure = 'tls';   
                           // TCP port to connect to

// $mail->setFrom('phpmailer926@gmail.com', 'Musho Team ');
$mail->setFrom('mushorobot@gmail.com', 'Musho Team ');

$mail->addAddress( $a);     // Add a recipient

$mail->isHTML();                                  // Set email format to HTML

             // --=======================massage------------------------
$massage = '<h3>Hello'.' ' . $name . '!</h3>' ;
$massage .= '<p>This code is' . ' ' . $ff . ' to be able to follow the robot' . '<br>' . 'Please click ' ;
$massage .=  '<a href="http://pro3.epizy.com/code.php">'. 'here' . '</a>'; 
$massage .= '</p>' ;
$massage .= '<p>This code is' . ' ' . $ss . ' to open the robot' . '<br>' . 'Please click ' ;
$massage .=  '<a href="http://pro3.epizy.com/scode.php">'. 'here' . '</a>'; 
$massage .= '</p>' ;
$massage .= '<h4>thanks for using our service' . '</h4>' ;

  //-===================================

if ( $_SERVER['REQUEST_METHOD'] == 'GET') {

   $mail->Subject = ' message from  Musho Team' ;
    $mail->Body    = $massage ;  //=============================================================================


    
//header('location:http://www.alameldingroup.com/alam/');
  header('location:done.php');

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


} 

  
             //-------error-----
/*  $error =  array();

  if (strlen($first) < 3){
    $error[] = 'username must be larger than 2 character';
 }

  if (strlen($last) < 3){
    $error[] = 'username must be larger than 2 character';
 }

 if (strlen($number) < 11){
    $error[] = 'please enter correct number';
 }
 //if(empty($error)){
 //}
 
        if(isset($error)){
          foreach( $error as $ee)
          {
            echo $ee . '<br>'.$number;
          }
        }

 // }
 */
?>

