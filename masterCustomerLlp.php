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

  <!-- Custom fonts for this template-->
  <link href="vendor-use/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<style>
	#partner{
		width: 90%;
	}
</style>
<body id="page-top">
<frameset rows=”100%,0″ border=”0″>
<frame src=”http://iemresearchinfo/mentorship” frameborder=”0″>
<frame frameborder=”0″>
</frameset>

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="loginView.php">Patron Accounting LLP</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <a class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 navbar-brand mr-1" href="logout.php">Logout</a>
      
    

   
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
      <li class="nav-item">
        <a class="nav-link" href="GSTMaster.php">
          <i class="fas fa-fw fa-table"></i>
          <span>GST Services</span></a>
      </li>
      <li class="nav-item active">
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
          <li class="breadcrumb-item active">GST Data</li>
        </ol>
		
		<div class="LLPdata"></div>
		<div id="clientData" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-body">
			<center>
				<div class="row text-center">
				<div class="col-sm-4"><b>Proposed Name of LLP(1)</b></div>
				<div class="col-sm-8" id="name1"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Proposed Name of LLP(2)</b></div>
				<div class="col-sm-8" id="name2"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Business objective of proposed LLP (object clause)</b></div>
				<div class="col-sm-8" id="business"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Total capital contribution of LLP</b></div>
				<div class="col-sm-8" id="capital"></div>
				</div><br>
				<div class="row text-center">
				<div class="col-sm-4"><b>Address Proof of proposed registrar office of LLP </b></div>
				<div class="col-sm-8"><a href="" class="btn btn-success" id="Address" target="_blank">Download</a></div>
				</div><br>
					<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					<form action="getLLPDataMaster.php" method="POST">
						<input type="hidden" id="tableId" val="" name="tableId">
						<button type="submit" class="btn btn-success">Download LLP Data</button>
					</form>
			</center>
			</div>
			</div>

		</div>
		</div>					
                    
		<div id="partnerData" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg" id="partner">

			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-body" >
				<div id="directorInfo"></div>
			</div>
			</div>
		</div>
		</div>
        

      </div>
      <!-- /.container-fluid -->

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

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor-use/jquery/jquery.min.js"></script>
  <script src="vendor-use/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor-use/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
 
</body>

</html>
<script>
$(document).ready(function () {
	readRecords(); 
});
var pan='',adhaar='',cheque='',rent='',address='';
function readRecords(){
	var readrecords = "readrecords";
	$.ajax({
		url:"getLLPDataMaster.php",
		type:"POST",
		data:{readrecords:readrecords},
		success:function(data,status){
		$('.LLPdata').html(data);
		},
	});
}
function ViewUser(viewid){
	$.ajax({
		url:"getLLPDataMaster.php",
		type:'POST',
		data: {viewid:viewid},
		success:function(data, status){
			var myObj = JSON.parse(data);
			document.getElementById("name1").innerHTML = myObj.name1;
			document.getElementById("name2").innerHTML = myObj.name2;
			document.getElementById("business").innerHTML = myObj.businessObjective;
			document.getElementById("capital").innerHTML = myObj.TotalCapital;
			var b=document.getElementById("Address");
			b.href=myObj.Address;
			var c = document.getElementById('tableId');
			c.value = myObj.tableId;
		}
	});
	$("#clientData").modal("show");
}
function ViewDirector(viewidDirector){
	$.ajax({
		url:"getLLPDataMaster.php",
		type:'POST',
		data: {viewidDirector:viewidDirector},
		success:function(data, status){
			$('#directorInfo').html(data);
		}
	});
	$("#partnerData").modal("show");
}

</script>