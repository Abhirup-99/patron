<?php
session_start();
  require("common.php");
  $person=$_SESSION["idCustomer"];
  if(!isset($person)){
  header("location:customerLogin.php");}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Abhirup Pal">
  <link rel="icon" href="Patron.jpg" type="image/jpg" sizes="16x16">

  <title>Patron Accounting LLP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Custom fonts for this template-->
  <link href="vendor-use/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
<style>
.headings{
  background-color:rgb(212, 212, 212);
  font-weight: lighter;
  padding:10px;
}
</style>
<frameset rows=”100%,0″ border=”0″>
<frame src=”http://iemresearchinfo/mentorship” frameborder=”0″>
<frame frameborder=”0″>
</frameset>

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="customerLoginView.php">Patron Accounting LLP</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <a class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 navbar-brand mr-1" href="logout3.php">Logout</a>
      
    

   
  </nav>

  <div id="wrapper">
  

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
    <button class="dropdown-btn">GST Registration
    <i class="fa fa-caret-down"></i>
    </button>
   <div class="dropdown-container">
     <center><a href=""customerLoginView.php"">Proprietor</a><br></center>
     <center><a href="CompanyGST.php">Company</a><br></center>
     <center><a href="#">LLP</a><br></center>
	 <center><a href="#">Partnership</a></center>
    </div>
<!---  
      <li class="nav-item active">
        <a class="nav-link" href="customerLoginView.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>GST Registration</span>
        </a>
      </li>
    --->
    
      <li class="nav-item">
        <a class="nav-link" href="llpRegistration.php">
          <i class="fas fa-fw fa-table"></i>
          <span>LLP Registration</span></a>
      </li>
    
    
    
      <li class="nav-item">
        <a class="nav-link" href="companyRegistration.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Company Registration</span></a>
      </li>
    

    
    
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Client Overview</li>
        </ol>
        <div class="headings">All Documents should be <b>150 KB(max)</b> in <b>pdf</b> format only</div>
          <center><b><font size="6">Documents required for GST registration</b></center></font>
        <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <tbody>
            <tr><th><center><font size="4">GST registration required on Owned Property</center></th></font><th><center><font size="4">GST registration required on Rented premises</center></th></tr></font>
            <tr><td><center>----------------</center></td><td><center>Signed NOC from property owner (<a href="rentDocumentFields.php">Click here</a> to generate NOC Letter) </center></td></tr>
            <tr><td><center>Self Attested PAN</center></td><td><center>Self Attested PAN</center></td></tr>
            <tr><td><center>Self Attested Adhaar</center></td><td><center>Self Attested Adhaar</center></td></tr>
            <tr><td><center>Cancelled Cheque</center></td><td><center>Cancelled Cheque</center></td></tr>
            <tr><td><center>Address Proof(Rent Agreement/Utility Bill/Mobile Bill) not more than 2 months old</center></td><td><center>Address Proof(Rent Agreement/Utility Bill/Mobile Bill) not more than 2 months old</center></td></tr>
            
			<!---------
			<tr><td colspan="2"><center>Self Attested PAN</center></td></tr>
            <tr><td colspan="2"><center>Self Attested Adhaar</center></td></tr>
            <tr><td colspan="2"><center>Cancelled Cheque</center></td></tr>
            <tr><td colspan="2"><center>Address Proof(Rent Agreement/Utility Bill/Mobile Bill) not more than 2 months old</center></td></tr>
			--------------------->
			<tr><td><center><a type="button" class="btn btn-success" href="GSTData.php">Proceed (self-owned)</a></center></td>
            <td><center><a type="button" class="btn btn-success" href="GSTForm.php">Proceed (rented)</a></center></td></tr>
          </tbody>
        </table>
        </div>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor-use/jquery/jquery.min.js"></script>
  <script src="vendor-use/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor-use/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

 <script>
	/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
	  this.classList.toggle("active");
	  var dropdownContent = this.nextElementSibling;
	  if (dropdownContent.style.display === "block") {
	  dropdownContent.style.display = "none";
	  } else {
	  dropdownContent.style.display = "block";
	  }
	  });
	}
	</script>


</body>

</html>
