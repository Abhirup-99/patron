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
$id=(int)$_POST['id'];
$name=test_input($_POST['name']);
$photographerror=$_FILES['photograph']['error'];
$adhaarerror=$_FILES['adhaar']['error'];
$panerror=$_FILES['pan']['error'];
if($panerror!=0)
{
	$_SESSION['error']="Please rectify the PAN document";
	header("Location: directorInfo.php");
}
if($adhaarerror!=0)
{
	$_SESSION['error']="Please rectify the Adhaar document";
	header("Location: directorInfo.php");
}
if($photographerror!=0)
{
	$_SESSION['error']="Please rectify the PAN document";
	header("Location: directorInfo.php");
}
if($panerror==0 && $adhaarerror==0 && $photographerror==0)
{
	if($_FILES['pan']['size']>1000000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='PAN pdf exceeded the file size limit';
		header("Location:directorInfo.php");
	}
	if($_FILES['adhaar']['size']>1000000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='adhaar pdf exceeded the file size limit';
		header("Location:directorInfo.php");
	}
	if($_FILES['photograph']['size']>1000000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='Photograph pdf exceeded the file size limit';
		header("Location:directorInfo.php");
	}

	$type='PAN';
	$code = rand(100000,999999);
	$PANname=$_FILES["pan"]["name"];
	$PANtempname=$_FILES["pan"]["tmp_name"];
	$filetype=pathinfo($PANname,PATHINFO_EXTENSION);
	$PANname=$name.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location: directorInfo.php");
	}
	$PANfolder="PANDirector/".$PANname;
	move_uploaded_file($PANtempname,$PANfolder);

	$type='Photograph';
	$code = rand(100000,999999);
	$photographname=$_FILES["photograph"]["name"];
	$photographtempname=$_FILES["photograph"]["tmp_name"];
	$filetype=pathinfo($photographname,PATHINFO_EXTENSION);
	$photographname=$name.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location: directorInfo.php");
	}
	$photographfolder="photograph/".$photographname;
	move_uploaded_file($photographtempname,$photographfolder);

	$type='Adhaar';
	$code = rand(100000,999999);
	$adhaarname=$_FILES["adhaar"]["name"];
	$adhaartempname=$_FILES["adhaar"]["tmp_name"];
	$filetype=pathinfo($adhaarname,PATHINFO_EXTENSION);
	$adhaarname=$name.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location: directorInfo.php");
	}
	$adhaarfolder="adhaarDirector/".$adhaarname;
	move_uploaded_file($adhaartempname,$adhaarfolder);
	
	if($a!=1)
	{
		$sql="INSERT INTO director(companyid,name,adhaarDirector,PANDirector,photograph)
		VALUES($id,'$name','$adhaarfolder','$PANfolder','$photographfolder')";
		mysqli_query($con,$sql);
		header("Location: directorInfo.php");
	}
	header("Location: directorInfo.php");
}
else
{
	$_SESSION['error']='Please try again!!';
	header("Location:directorInfo.php");
}
?>