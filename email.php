<?php
session_start();

require 'PHPMailerAutoload.php';
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$mail = new PHPMailer;
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$mobile = $_POST['mobile'];

$mail->isSMTP();                                      
$mail->Host = "smtpout.secureserver.net";
$mail->Username = "mywebmail@mydomain.com"; /*Substitute with your real email*/
$mail->Password = "myverylongpassword"; /*Substitute with your real password*/
$mail->SMTPAuth = true;
$mail->Port = 80;

$mail->setFrom('abhiruppalmethodist@gmail', 'Mailer');     // sender address
$mail->addAddress($_SESSION['email'], 'User'); //receiver's address
$mail->isHTML(true);                                 
$mail->Subject = "Password Recovery code";
$mail->Body    = "Your password recovery code is<br>".$code."<br>enter the number in required field";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'SOMETHING WENT WRONG';
	echo"click to enter again";
	echo"<Button>Click</Button>";
    
} else {
	header("Location: codecheck.php");
}
?>