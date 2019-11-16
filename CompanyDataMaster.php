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
		<th>Name</th>
		<th>Action</th>
		<th>View</th></tr>';
		
		$a=1;
		$b=0;
		$query = "SELECT * FROM company";
		$result = mysqli_query($con, $query)or die(mysqli_error($con));
		while($row = mysqli_fetch_assoc($result))
		{
			$b=$row['id'];
			echo"<tr><td>".$a."</td>";
			echo"<td>".$row['nameCompany']."</td>";
			echo "<td>";
			echo '<button onclick="ViewUser('.$row['id'].')" class="btn btn-primary" style="margin-left:5px;">View</button></td>';
            echo '<td><button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Directors</button>';
            echo "</td></tr>";
			$a=$a+1;
		}
			echo"</tbody></table></div>";

}
if(isset($_POST['deleteid']))
{

	$user_id = (int)$_POST['deleteid']; 

	$query = "SELECT * FROM director WHERE companyid =".$user_id;
	$result=mysqli_query($con,$query);
	//$row=mysqli_fetch_assoc($result);
	$b=1;
	echo'

		<div class="table-responsive">
		
        <table class="table table-striped table-bordered" id="thetable">
        <tbody>
		<tr><th>#</th>
		<th>Name</th>
		<th>Adhaar</th>
		<th>PAN</th>
		<th>Photograph</th></tr>';
	while($row=mysqli_fetch_assoc($result))
	{
			echo"<tr><td>".$b."</td>";
			echo"<td>".$row['name']."</td>";
			echo'<td><a href="'.$row['adhaarDirector'].'" class="btn btn-success" id="Address" target="_blank">Download</a></td>';
			echo'<td><a href="'.$row['PANDirector'].'" class="btn btn-success" id="Address" target="_blank">Download</a></td>';
			echo'<td><a href="'.$row['photograph'].'" class="btn btn-success" id="Address" target="_blank">Download</a></td><tr>';
			$b=$b+1;
	}
}
if(isset($_POST['viewid']))
{
    $user_id = (int)$_POST['viewid'];
    $sql = "SELECT * FROM company WHERE id = ".(int)$user_id;
    $result = mysqli_query($con, $sql);
 	mysqli_query($con, $sql) or die(mysqli_error($con));
	
	$row = mysqli_fetch_array($result);
    echo json_encode($row);
}

?>