<?php
session_start();
include("common.php");
$person=$_SESSION["idMaster"];
if(!isset($person)){
header("location:indexCompany.php");}
if(isset($_POST['readrecords'])){
echo'

		<div class="table-responsive">
		
        <table class="table table-striped table-bordered" id="thetable">
        <tbody>
		<tr><th>#</th>
		<th>Email</th>
		<th>Action</th></tr>';
		
		$a=1;
		$b=0;
		$query = "SELECT * FROM gstdata";
		$result = mysqli_query($con, $query)or die(mysqli_error($con));
		while($row = mysqli_fetch_assoc($result))
		{
			$b=$row['id'];
			echo"<tr><td>".$a."</td>";
			echo"<td>".$row['email']."</td>";
			echo "<td>";
            echo '<button onclick="ViewUser('.$row['id'].')" class="btn btn-success">View</button>';
            echo "</td></tr>";
			$a=$a+1;
		}
			echo"</tbody></table></div>";

}
if(isset($_POST['viewid']))
{
    $user_id = (int)$_POST['viewid'];
    $sql = "SELECT * FROM gstdata WHERE id = ".(int)$user_id;
    $result = mysqli_query($con, $sql);
 	mysqli_query($con, $sql) or die(mysqli_error($con));
	
	$row = mysqli_fetch_array($result);
    echo json_encode($row);
}
if(isset($_POST['GSTCustomer']))
{
	$sql = "SELECT * FROM gstdata WHERE tableId=".(int)$_POST['GSTCustomer'];
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	echo'<table class="table" bordered="1">
	<tr>
	<th>Email</th>
	<th>Mobile</th>
	<th>Business</th>
	<th>Tradename</th>
	</tr>
	<tr>
	<td>'.$row['email'].'</td>
	<td>'.$row['mobile'].'</td>
	<td>'.$row['business'].'</td>
	<td>'.$row['tradename'].'</td>
	</tr>
	</table>';
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=GSTCustomer.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
}
?>