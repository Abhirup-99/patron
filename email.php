<?php

require "vendor/autoload.php";
require"common.php";
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$mobile=$_POST['mobile'];
$textvalue=$_POST['textvalue'];
$sql = "INSERT INTO email(Email,Name,Number,Text)VALUES('$email','$name','$mobile','$textvalue')";
mysqli_query($con,$sql);
$textvalue="An inquiry has been received from the email id ".$email." The phone number is ".$mobile." ".$textvalue;
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


    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'Patron2745@gmail.com';
    $mailer->Password = 'raj12345@';
    $mailer->SMTPSecure = 'ssl';
    $mailer->Port = 465;

    $mailer->setFrom('Patron2745@gmail.com', 'Patron');
    $mailer->addAddress('info@patronaccounting.com', 'Patron');

    $mailer->isHTML(true);
    $mailer->Subject = $subject;
    $mailer->Body = $textvalue;

    $mailer->send();
    $mailer->ClearAllRecipients();

} catch (Exception $e) {
    echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="Patron.jpg" type="image/jpg" sizes="16x16">
  <title>Patron Accounting LLP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="Abhirup Pal" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="stylesheet.css" rel="stylesheet"> 
</head>
<body>
<style>
body{
  font-family: 'Open Sans',sans-serif;
}
.content{
  font-family: 'PT Sans', sans-serif;
}
.header .logo{
  font-size: 16px;
}
.mobile{
  display: none;
}
@media screen and (max-width: 600px) {
  .mobile{
    display: block;
  }
  .desktop{
    display: none;
  }
  .header{
    display:none;
  }
}
</style>
<div class="header">
  <a href="#default" class="logo"><img src="files/envelope-solid.svg"> info@patronaccounting.com</a>
  <a href="#default" class="logo"><img src="files/phone-alt-solid.svg"> +91- 99200-75893</a>
  <ul class="header-right">
    <li><a href="login.html" class="logo">Login</a></li>
    <li><a href="signup.html" class="logo">Sign Up</a></li>
  </ul>
</div>

<nav class="navbar navbar-default topnav mobile" id="myTopnav">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="index.html"><img src="files/accountlogo.png"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right listElements">
      <li><a href="index.html">Home</a></li>
      <li><a href="business.html">Business Registration</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="compliance.html">Compliances
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="accountant.html">Accounting</a></li>
          <li><a href="audit.html">Auditing</a></li>
          <li><a href="roc.html">ROC</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="tax.html">Tax Consultancy
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="gst.html">GST</a></li>
          <li><a href="tds.html">TDS</a></li>
          <li><a href="taxIncome.html">Income Tax</a></li>
          <li><a href="taxPlan.html">Tax Planning</a></li>
        </ul>
      </li>
      <li><a href="trademark.html">TradeMarks</a></li>
      <li><a href="pf.html">PF/ESI</a></li>
      <li><a href="contact.html">Contact Us</a></li>
      <li><a href="login.html">Login</a></li>
      <li><a href="signup.html">SignUp</a></li>
    </ul>
  </div>
  </div>
</nav>

<div class="imageWhatsapp">
  <a href="https://api.whatsapp.com/send?phone=919920021502&amp;text=Hi%20Team%20Patron%20Accounting%20LLP%21%20I%20am%20interested%20to%20inquire%20about%20your%20services.%20Please%20touch%20base%20with%20me.%20Thanks.%20&amp;source=&amp;data=&quot;"><img src="files/WhatsApp Image 2019-11-01 at 7.46.04 PM.jpeg" style="width:50px;height:50px;"></a>
</div>

<nav class="navbar navbar-default topnav desktop" id="myTopnav">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="index.html"><img src="files/accountlogo.png"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right listElements">
      <li><a href="index.html">Home</a></li>
      <li><a href="business.html">Business Registration</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="compliance.html">Compliances
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="accountant.html">Accounting</a></li>
          <li><a href="audit.html">Auditing</a></li>
          <li><a href="roc.html">ROC</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="tax.html">Tax Consultancy
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="gst.html">GST</a></li>
          <li><a href="tds.html">TDS</a></li>
          <li><a href="taxIncome.html">Income Tax</a></li>
          <li><a href="taxPlan.html">Tax Planning</a></li>
        </ul>
      </li>
      <li><a href="trademark.html">TradeMarks</a></li>
      <li><a href="pf.html">PF/ESI</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
  </div>
  </div>
</nav>

<div class="container approach">
  <div class="row">
  	<h4>Thank you for contacting us.We will get back to u as soon as possible.</h4>
  </div>
</div>

<footer>
<div class="container-fluid text-md-left">
<div class="row">
<div class="col-md-3 mt-md-0 mt-3 text-center footerContent">
<h3 class="text-uppercase">About Us</h3>
<p class="text-justify">Patron accounting is into providing Accounting and compliance services. Our years of experience in different industries gives us flexible approach and strong domain knowledge which helps us in meeting specific client requirements.</p>
</div>
<div class="col-md-3 mt-md-0 mt-3 text-left footerContent">
<h3 class="text-uppercase">Our Services</h3>
<ul class="list-unstyled">
<li><a href="business.html">Business Administration</a></li>
<hr>
<li><a href="compliance.html">Compliances</a></li>
<hr>
<li><a href="tax.html">Tax Consultancy</a></li>
<hr>
<li><a href="pf.html">PF/ESI</a></li>
<hr>
</ul>
</div>
<div class="col-md-3 mt-md-0 mt-3 text-left footerContent">
<h3 class="text-uppercase">Quick Links</h3>
<ul class="list-unstyled">
<li><a href="who.html">Who we are</a></li>
<hr>
<li><a href="approach.html">Approach</a></li>
<hr>
<li><a href="#!">Blog</a></li>
<hr>
<li><a href="client.html">Client</a></li>
<hr>
<li><a href="membershipClub.html">Membership Club</a></li>
</ul>
</div>
<div class="col-md-3 mt-md-0 mt-3 text-center footerContent">
<h3 class="text-uppercase">Contact Info</h3>
<ul class="contact">
  <p>Unit No. 221, II Floor,
JMD Megapolis Sohna Rd,
Sector 48 Gurugram
Haryana-122018</p>
  <p>+91-99200-75893</p>
  <p>info@patronaccounting.com</p>
  <p>http://patronaccounting.com</p>
</ul>
</div>

</div>
</div>
</footer>
</body>
</html>
