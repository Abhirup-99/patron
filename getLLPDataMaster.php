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
		$query = "SELECT * FROM llpdata";
		$result = mysqli_query($con, $query)or die(mysqli_error($con));
		while($row = mysqli_fetch_assoc($result))
		{
			$b=$row['id'];
			echo"<tr><td>".$a."</td>";
			echo"<td>".$row['name1']."</td>";
			echo "<td>";
            echo '<button onclick="ViewUser('.$row['tableId'].')" class="btn btn-success">View</button>';
            echo '<button onclick="ViewDirector('.$row['tableId'].')" class="btn btn-primary">Directors</button>';
            echo "</td></tr>";
			$a=$a+1;
		}
			echo"</tbody></table></div>";

}
if(isset($_POST['viewid']))
{
    $user_id = (int)$_POST['viewid'];
    $sql = "SELECT * FROM llpdata WHERE tableId = ".(int)$user_id;
    $result = mysqli_query($con, $sql);
 	mysqli_query($con, $sql) or die(mysqli_error($con));
	
	$row = mysqli_fetch_array($result);
    echo json_encode($row);
}
if(isset($_POST['viewidDirector']))
{
    $user_id = (int)$_POST['viewidDirector'];
    $sql = "SELECT * FROM partner WHERE llpId = ".(int)$user_id;
    $result = mysqli_query($con, $sql);
	echo'

		<div class="table-responsive">
		
        <table class="table table-striped table-bordered" id="thetable">
        <tbody>
		<tr><th>#</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Qualification</th>
		<th>Occupation</th>
		<th>DIN</th>
		<th>PAN</th>
		<th>Adhaar</th>
		<th>Passport</th>
		<th>Bank</th>
		<th>Individual Contributions</th></tr>';
	$a=1;
	while($row = mysqli_fetch_assoc($result))
	{
		echo'<tr><td>'.$a.'</td>';
		echo'<td>'.$row['name'].'</td>';
		echo'<td>'.$row['email'].'</td>';
		echo'<td>'.$row['mobile'].'</td>';
		echo'<td>'.$row['qualification'].'</td>';
		echo'<td>'.$row['occupation'].'</td>';
		echo'<td>'.$row['DIN'].'</td>';
		echo'<td><a target="_blank" href="'.$row['PAN'].'" class="btn btn-primary">Download</a></td>';
		echo'<td><a target="_blank" class="btn btn-primary" href="'.$row['Adhaar'].'">Download</a></td>';
		echo'<td><a target="_blank"  class="btn btn-primary" href="'.$row['Passport'].'">Download</a></td>';
		echo'<td><a target="_blank"  class="btn btn-primary" href="'.$row['Bank'].'">Download</a></td>';
		echo'<td>'.$row['individualContrib'].'</td></tr>';
	}
	echo'</tbody>
	</table>';
	echo'					<form action="getLLPDataMaster.php" method="POST">
						<input type="hidden" id="llp" value="'.$_POST['viewidDirector'].'" name="llp">
						<button type="submit" class="btn btn-success">Download LLP Data</button>
						<script>console.log(document.getElementById("llp").value)</script>
					</form>
';

}
if(isset($_POST['tableId']))
{
	$sql = "SELECT * FROM llpdata WHERE tableId=".(int)$_POST['tableId'];
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	echo '<script>console.log(2);</script>';
	$output = '<table class="table" bordered="1">
	<tr>
	<th>Name1</th>
	<th>Name2</th>
	<th>Business Objective</th>
	<th>Total Capital</th>
	</tr>
	<tr>
	<td>'.$row['name1'].'</td>
	<td>'.$row['name2'].'</td>
	<td>'.$row['businessObjective'].'</td>
	<td>'.$row['TotalCapital'].'</td>
	</tr>
	</table>';
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=LLP.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
	echo $output;


}
if(isset($_POST['llp']))
{
	$sql = "SELECT * FROM partner WHERE llpId = ".(int)$_POST['llp'];
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows ($result);
	echo'<table class="table" bordered="1">
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Mobile</th>
	<th>Qualification</th>
	<th>Occupation</th>
	<th>DIN</th>
	<th>Individual Contributions</th>
	</tr>';
	while($row = mysqli_fetch_assoc($result))
	{
		echo'<tr>
		<td>'.$row['name'].'</td>
		<td>'.$row['email'].'</td>
		<td>'.$row['mobile'].'</td>
		<td>'.$row['qualification'].'</td>
		<td>'.$row['occupation'].'</td>
		<td>'.$row['DIN'].'</td>
		<td>'.$row['individualContrib'].'</td>
		</tr>';
	}
	echo'</table>';
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=LLPPartner.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
}
?>