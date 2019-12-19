<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Patron Accounting LLP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="Abhirup Pal" />
  <link rel="icon" href="Patron.jpg" type="image/jpg" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="stylesheet.css" rel="stylesheet"> 
</head>
<body>
<style>
    .login{
  background-size:100% 100%;
  background:url("files/what-we-do-bg.png"); 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: auto;
  height: auto; 
  margin-right: 0px;
  
}
body{
  font-family: 'Open Sans',sans-serif;
}
.content{
  font-family: 'PT Sans', sans-serif;
}
.pfFormField input{
    margin-bottom:0;
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
<nav class="navbar navbar-default topnav" id="myTopnav">
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

<div class="container-fluid login">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <div class="tab">
          <button class="tablinks" onclick="openType(event, 'London')">Sign Up</button>
          <button class="tablinks" onclick="openType(event, 'Paris')" id="defaultOpen">Login</button>
      </div>

        <div id="London" class="tabcontent">
          <form action="registerCustomer" method="POST" class="pfContact">
            <h4 class="text-left">Sign Up</h4>
            <div class="row">
              <div class="col-md-5 pfFormField">
                <div class="form-group justify-content-left">
                  <input type="text" name="name" class="form-control" value="" placeholder="name" required>
                </div>
              </div>
              <div class="col-md-5 pfFormField" id="outerField">
                <div class="form-group justify-content-left">
                  <input type="email" name="email" class="form-control" value="" placeholder="email" autocomplete="username" required>
                </div>
              </div>
              <div class="col-md-5 pfFormField">
                <div class="form-group justify-content-left">
                  <input type="text" name="mobile" class="form-control" value="" placeholder="mobile" required>
                </div>
              </div>
              <div class="col-md-5 pfFormField" id="outerField">
                <div class="form-group justify-content-left">
                  <input type="password" name="password" class="form-control" value="" placeholder="password" autocomplete="current-password" required>
                </div>
              </div>
              <div class="error col-md-12">
              </div>

           </div>
           <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

        <div id="Paris" class="tabcontent">
          <form action="customerLoginBack" method="POST" class="pfContact">
            <h4 class="text-left">Login</h4>
            <div class="row">
              <div class="col-md-5 pfFormField">
                <div class="form-group justify-content-left">
                  <input type="text" name="username" class="form-control" value="" placeholder="email" autocomplete="username" required>
                </div>
              </div>
              <div class="col-md-5 pfFormField" id="outerField">
                <div class="form-group justify-content-left">
                  <input type="password" name="password" class="form-control" value="" placeholder="password" autocomplete="current-password" required>
                </div>
              </div>
              <div class="col-md-12">
              <a href="forgotPasswordCompany.php">Forgot Password</a>

              </div>
              <div class="error col-md-12">
                <?php
                  if(isset($_SESSION["error"])){
                    $error = $_SESSION["error"];
                    echo'<p style="color:red;size:10px;"><i>'.$error.'</i></p>';
                  }
                ?>
              </div>
          </div>

           <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
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
<li><a href="blog.php">Blog</a></li>
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
<script>
  function openType(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>
<?php
  unset($_SESSION["error"]);
?>