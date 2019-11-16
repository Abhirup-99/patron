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
    
      <li class="nav-item">
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
      <li class="nav-item active">
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
		<div class="data">
		</div>
    <div id="clientData" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-body">
      <center>
        <div class="row text-center">
        <div class="col-sm-4"><b>Company Name</b></div>
        <div class="col-sm-8" id="cName"></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>PAN of the company</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="PAN" target="_blank">Download</a></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>MOA</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="MOA" target="_blank">Download</a></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>AOA</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="AOA" target="_blank">Download</a></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Certificate of Completion</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="certificate" target="_blank">Download</a></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Bank</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="Bank" target="_blank">Download</a></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Address</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="Address" target="_blank">Download</a></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Board Resolution</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="Board" target="_blank">Download</a></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>Company Director Name</b></div>
        <div class="col-sm-8" id="companyDirector"></div>
        </div><br>
        <div class="row text-center">
        <div class="col-sm-4"><b>In case you are operating from rented premises the upload the NOC from owner of property</b></div>
        <div class="col-sm-8"><a href="" class="btn btn-success" id="Rent" target="_blank">Download</a></div>
        </div><br>
          <button type="button" class="button btn-warning" data-dismiss="modal">Close</button>
      </center>
      </div>
      </div>
    </div>
    </div>
    <div id="DirectorData" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <div class="modal-content">
        <div class="modal-body">
          <div class="directorData">
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
    </div>          

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
<script>
		$(document).ready(function () {
			readRecords(); 
		});
		function readRecords(){
			var readrecords = "readrecords";
			$.ajax({
				url:"CompanyDataMaster.php",
				type:"POST",
				data:{readrecords:readrecords},
				success:function(data,status){
				$('.data').html(data);
				},

			});
		}
function DeleteUser(deleteid){

	$.ajax({
		url:"CompanyDataMaster.php",
		type:'POST',
		data: {  deleteid : deleteid},

		success:function(data, status){
      $('.directorData').html(data);
		}
	});
  $("#DirectorData").modal("show");
}
function ViewUser(viewid){
  $.ajax({
    url:"CompanyDataMaster.php",
    type:'POST',
    data: {viewid:viewid},
    success:function(data, status){
      var myObj = JSON.parse(data);
      console.log(myObj);
      document.getElementById("cName").innerHTML = myObj.nameCompany;
      document.getElementById('PAN').href=myObj.PAN;
      document.getElementById('MOA').href=myObj.MOA;
      document.getElementById('AOA').href=myObj.AOA;
      document.getElementById('certificate').href=myObj.certificate;
      document.getElementById('Bank').href=myObj.Bank;
      document.getElementById('Address').href=myObj.Address;
      document.getElementById('Board').href=myObj.Board;
      document.getElementById('companyDirector').innerHTML=myObj.NameDirector;
      var c=document.getElementById('Rent');
      if(myObj.Rent=='')
			 c.style.display='none';
			else
			c.href=myObj.Rent;
    }
  });
  $("#clientData").modal("show");
}


</script>
