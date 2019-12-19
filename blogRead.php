<?php
require("common.php");
$blogid = (int)$_GET['blogid'];
$sql = "SELECT * FROM blog WHERE id=$blogid";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="stylesheet.css" rel="stylesheet"> 
</head>
<body>
<style>
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
    <li><a href="login" class="logo">Login</a></li>
    <li><a href="signup" class="logo">Sign Up</a></li>
  </ul>
</div>

<nav class="navbar navbar-default topnav mobile" id="myTopnav">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="index"><img src="files/accountlogo.png"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right listElements">
      <li><a href="index">Home</a></li>
      <li><a href="business">Business Registration</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="compliance">Compliances
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="accountant">Accounting</a></li>
          <li><a href="audit">Auditing</a></li>
          <li><a href="roc">ROC</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="tax">Tax Consultancy
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="gst">GST</a></li>
          <li><a href="tds">TDS</a></li>
          <li><a href="taxIncome">Income Tax</a></li>
          <li><a href="taxPlan">Tax Planning</a></li>
        </ul>
      </li>
      <li><a href="trademark">TradeMarks</a></li>
      <li><a href="pf">PF/ESI</a></li>
      <li><a href="contact">Contact Us</a></li>
      <li><a href="login">Login</a></li>
      <li><a href="signup">SignUp</a></li>
    </ul>
  </div>
  </div>
</nav>

<nav class="navbar navbar-default topnav desktop" id="myTopnav">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="index"><img src="files/accountlogo.png"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right listElements">
      <li><a href="index">Home</a></li>
      <li><a href="business">Business Registration</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="compliance">Compliances
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="accountant">Accounting</a></li>
          <li><a href="audit">Auditing</a></li>
          <li><a href="roc">ROC</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="tax">Tax Consultancy
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="gst">GST</a></li>
          <li><a href="tds">TDS</a></li>
          <li><a href="taxIncome">Income Tax</a></li>
          <li><a href="taxPlan">Tax Planning</a></li>
        </ul>
      </li>
      <li><a href="trademark">TradeMarks</a></li>
      <li><a href="pf">PF/ESI</a></li>
      <li><a href="contact">Contact Us</a></li>
    </ul>
  </div>
  </div>
</nav>

<div class="imageWhatsapp">
  <a href="https://api.whatsapp.com/send?phone=919920021502&amp;text=Hi%20Team%20Patron%20Accounting%20LLP%21%20I%20am%20interested%20to%20inquire%20about%20your%20services.%20Please%20touch%20base%20with%20me.%20Thanks.%20&amp;source=&amp;data=&quot;"><img src="files/WhatsApp Image 2019-11-01 at 7.46.04 PM.jpeg" style="width:50px;height:50px;"></a>
</div>
<div class="container">
        <div class="blogRead">
        <?php
        echo'<h2 class="text-center">'.$row['blogTitle'].'</h2>';
        echo '<center><img src="'.$row['blogPicture'].'" alt="no image" style="height:150px;"></center>';
        echo '<div><p><b>Created by </b>'.$row['createdBy'].'</p></div>';
        echo '<div class="text-justify">'.$row['blogText'].'</div>';
        echo '<center><img src="'.$row['blogPicture2'].'" alt="no image" style="height:150px;"></center>';
        echo '<div class="text-justify">'.$row['blogText2'].'</div>';
        echo '<div class="text-justify"><p><b>Tags </b>'.$row['tag'].'</p></div>';
        ?>
      </div>
</div>
        <div class="share">
          <h5>Share this on<a href="" class="social-share facebook"><img src="files/facebook-f-brands (1).svg" style="height:16px;width:20px;" ></a><a href="" class="social-share linkedin"><img src="files/linkedin-in-brands (1).svg" style="height:16px;width:20px;" class="social-share linkedin"></a></h5>
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
<li><a href="business">Business Administration</a></li>
<hr>
<li><a href="compliance">Compliances</a></li>
<hr>
<li><a href="tax">Tax Consultancy</a></li>
<hr>
<li><a href="pf">PF/ESI</a></li>
<hr>
</ul>
</div>
<div class="col-md-3 mt-md-0 mt-3 text-left footerContent">
<h3 class="text-uppercase">Quick Links</h3>
<ul class="list-unstyled">
<li><a href="who">Who we are</a></li>
<hr>
<li><a href="approach">Approach</a></li>
<hr>
<li><a href="#!">Blog</a></li>
<hr>
<li><a href="client">Client</a></li>
<hr>
<li><a href="membershipClub">Membership Club</a></li>
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
<script type="text/javascript">
  var pageUrl = encodeURIComponent(document.URL); 
  function socialWindow(url) {
  var left = (screen.width - 570) / 2;
  var top = (screen.height - 570) / 2;
  var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + top + ",left=" + left;
  // Setting 'params' to an empty string will launch
  // content in a new tab or window rather than a pop-up.
  // params = "";
  window.open(url,"NewWindow",params);
  }
  
  $(".social-share.facebook").on("click", function() {
    console.log(1);
    url = "https://www.facebook.com/sharer.php?u=" + pageUrl;
    socialWindow(url);
  });
  
  $(".social-share.linkedin").on("click", function() {
    url = "https://www.linkedin.com/shareArticle?mini=true&url=" + pageUrl;
    socialWindow(url);
  })

</script>