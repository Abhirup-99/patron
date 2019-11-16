<?php
session_start();
require "vendor/autoload.php";
$code = rand(50362,99999);

$_SESSION['code'] = $code;


$robo = 'support@patronaccounting.com';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$developmentMode = false;
$mailer = new PHPMailer($developmentMode);

try {
    $mailer->SMTPDebug = false;
    $mailer->isSMTP();

    if ($developmentMode) {
    $mailer->SMTPOptions = [
        'ssl'=> [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ]
    ];
    }


    $mailer->Host = 'server266.web-hosting.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'support@patronaccounting.com';
    $mailer->Password = 'abhirup@99';
    $mailer->SMTPSecure = 'tls';
    $mailer->Port = 587;

    $mailer->setFrom('support@patronaccounting.com', 'Patron');
    $mailer->addAddress('abhiruppalmethodist@gmail.com', 'Patron');

    $mailer->isHTML(true);
$mailer->Subject = "Password Recovery code";
$mailer->Body    = "Your password recovery code is<br>".$code."<br>enter the number in required field";
$mailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mailer->send()) {
    echo 'SOMETHING WENT WRONG';
	echo"click to enter again";
	echo"<Button>Click</Button>";
    
} else {
	header("Location: codecheck.php");
}

    $mailer->ClearAllRecipients();

} catch (Exception $e) {
    echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
}
?>
