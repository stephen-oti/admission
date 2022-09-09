<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';



//require 'vendor/autoload.php';
function sendmail($email,$name,$nid){
$mail = new PHPMailer(true);

 try {
	$mail->SMTPDebug = 2;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com;';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'sotieno443@gmail.com';				
	$mail->Password = '0799699300';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('sotieno443@gmail.com', 'Steve');		
	$mail->addAddress($email);
	$mail->isHTML(true);								
	$mail->Subject = "Hello $name Welcome to Maseno";
	$mail->Body = 'You Have Been Successfully Registered at Maseno University.<br>Use your Registration Number and National ID as Your creadentials.  <b>Attached below is your student ID...</b> ';
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$attachfile = "studID/$nid.pdf";
	$mail->addAttachment($attachfile);
	$mail->send();
	echo "Mail has been sent successfully!";
    } 
	catch (Exception $e)
	 {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }
}
?>
   