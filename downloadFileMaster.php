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
  <link rel="icon" href="Patron.jpg" type="image/jpg" sizes="16x16">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Abhirup Pal">
  <link rel="icon" href="Patron.jpg" type="image/jpg" sizes="16x16">
  <title>Patron Accounting LLP</title>
  <link rel="stylesheet" href="jquery-ui.min.css">
  <script src="external/jquery/jquery.js"></script>
  <script src="jquery-ui.min.js"></script>

  <link rel="stylesheet" type="text/css" href="TimePicki-master/css/timepicki.css">

  <!-- Custom fonts for this template-->
  <link href="vendor-use/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

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
      <li class="nav-item active">
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
          <li class="breadcrumb-item active">Update Profile</li>
        </ol>
  <div class="container text-left">
  <form method="POST" action="download.php">
    <div class="form-group row justify-content-center">
    <label class="col-sm-3 col-form-label text-right"><b>Company</b></label>

    <select style="width:50%;" name="company" id="company">
    <option value="" selected>----</option>
    <?php
      $query = "SELECT id,CompanyName FROM register";
      $result = mysqli_query($con, $query)or die($mysqli_error($con));
      while($row = mysqli_fetch_array($result))
      {
        echo "<option value=".$row['id'].">".$row['CompanyName']."</option>";
      }
    ?>
    </select>
    </div>
    <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Date</b></label>
      <div class="col-sm-6">
        <input type="text" name="date" class="form-control" id="date" >
      </div>
    </div>
    <script>
    $( "#date" ).datepicker();
    </script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="TimePicki-master/js/timepicki.js"></script>

    <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Time</b></label>
      <div class="col-sm-6">
        <input type="text" name="time" class="form-control time_element" >
      </div>
    </div>
    <script>
    
    $(".time_element").timepicki();
  
    </script>

    <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Director</b></label>
      <select  name="director" class="director" style="width:50%;">
      </select>
    </div>
    <div class="form-group row justify-content-center">
      <label class="col-sm-3 col-form-label text-right"><b>Header</b></label>
      <select name='header'  style='width:50%;'>
      <option value='1'>Yes</option>
      <option value='2'>No</option>
      </select>
    </div>
    <center>
    <button type="submit" class="btn btn-primary">Download</button>
    </center>
    </form>
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
    $('#company').on('change', function(){
        var company_id = $(this).val();
        if(company_id){
            $.ajax({
                type:'POST',
                url:'getDirectorData.php',
                data:'company_id='+company_id,
                success:function(data){
                    $('.director').html(data);
        }
            }); 
        }
    });
</script>
