<?php
session_start();
include("common.php");
$person=$_SESSION["idCustomer"];
if(!isset($person)){
header("location:customerLogin.php");}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$id=test_input($_POST['id']);
$name1=test_input($_POST['name1']);
$name2=test_input($_POST['name2']);
$business=test_input($_POST['business']);
$capital=test_input($_POST['capital']);
$Addresserror=$_FILES['Address']['error'];
if($Addresserror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the pan card attested copy";
	header("Location:llpRegistration.php");
}
$a=0;
if($Addresserror==0)
{
	$type='Address';
	$code = rand(50362,99999);
	$Addressname=$_FILES["Address"]["name"];
	$Addresstempname=$_FILES["Address"]["tmp_name"];
	$filetype=pathinfo($Addressname,PATHINFO_EXTENSION);
	$Addressname=$name1.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:llpRegistration.php");
	}
	$Addressfolder="Addressllp/".$Addressname;
	move_uploaded_file($Addresstempname,$Addressfolder);
	if($a!=1)
	{
		$sql="INSERT INTO llpdata(id,name1,name2,businessObjective,TotalCapital,Address)
		VALUES($id,'$name1','$name2','$business','$capital','$Addressfolder')";
		mysqli_query($con,$sql);
		$sql ="SELECT * FROM llpdata WHERE name1='$name1' AND name2='$name2'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		$_SESSION['idLlp']=$row['tableId'];
		header("Location:partnerInfo.php");
	}
}
else
{
	$_SESSION['error']='Please try again!!';
	header("Location:llpRegistration.php");
	
}
?>
