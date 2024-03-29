<?php
session_start();
	require("common.php");
	$person=$_SESSION["idMaster"];
	if(!isset($person)){
	header("location:masterLogin.php");}
	
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
table tr td:last-child a{
margin-right: 15px;
}
</style>
<frameset rows=”100%,0″ border=”0″>
<frame src=”http://iemresearchinfo/mentorship” frameborder=”0″>
<frame frameborder=”0″>
</frameset>

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="masterLoginView.php">Patron Accounting LLP</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <a class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 navbar-brand mr-1" href="logout1.php">Logout</a>
      
    

   
  </nav>

  <div id="wrapper">
	

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
		
      <li class="nav-item active">
        <a class="nav-link" href="masterDashboardView.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="employee.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Employees</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="downloadDocument.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Document Generation</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="GSTMaster.php">
          <i class="fas fa-fw fa-table"></i>
          <span>GST Services</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="BusinessMaster.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Business Registration</span></a>
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
        <div class="text-center text-uppercase"><h3>Add a Blog</h3></div>
        <form action="masterBlogBack.php" method="post" enctype="multipart/form-data">
          <div class="form-group row justify-content-left">
            <label class="col-sm-3 col-form-label text-right"><b>Blog Title<span style="color:red;">*</span></b></label>
            <div class="col-sm-6">
              <input type="text" name="blogTitle" class="form-control" value="" required>
            </div>
          </div>
          <div class="form-group row justify-content-left">
            <label class="col-sm-3 col-form-label text-right"><b>Blog Picture<span style="color:red;">*</span></b></label>
            <div class="col-sm-6">
              <input type="file" name="blogPicture" class="form-control" value="" required>
            </div>
          </div>
          <div class="form-group row justify-content-left">
            <label class="col-sm-3 col-form-label text-right"><b>Blog Text<span style="color:red;">*</span></b></label>
            <div class="col-sm-6">
              <textarea name="blogText" class="form-control" row="25" required style="height:300px"></textarea>
            </div>
          </div>
          <div class="form-group row justify-content-left">
            <label class="col-sm-3 col-form-label text-right"><b>Blog Picture(2)<span style="color:red;">*</span></b></label>
            <div class="col-sm-6">
              <input type="file" name="blogPicture2" class="form-control" value="" required>
            </div>
          </div>
          <div class="form-group row justify-content-left">
            <label class="col-sm-3 col-form-label text-right"><b>Blog Text2<span style="color:red;">*</span></b></label>
            <div class="col-sm-6">
              <textarea name="blogText2" class="form-control" row="25" required style="height:300px"></textarea>
            </div>
          </div>
          <div class="form-group row justify-content-left">
            <label class="col-sm-3 col-form-label text-right"><b>Created By<span style="color:red;">*</span></b></label>
            <div class="col-sm-6">
              <input type="text" name="createdBy" class="form-control" value="" required>
            </div>
          </div>
          <div class="form-group row justify-content-left">
            <label class="col-sm-3 col-form-label text-right"><b>Tag<span style="color:red;">*</span></b></label>
            <div class="col-sm-6">
              <input type="text" name="blogTag" class="form-control" value="" required>
            </div>
          </div>
          <center><button type="submit" class="btn btn-success">Submit</button></center>
      </div>

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

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


</body>

</html>
