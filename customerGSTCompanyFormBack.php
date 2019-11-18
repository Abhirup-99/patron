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
$id=$_POST['customer'];
$name=test_input($_POST['name']);
$nameCompany = test_input($_POST['nameCompany']);
$PANerror=$_FILES["PAN"]["error"];
$message=test_input($_POST['message']);
if($PANerror!=0)
{
	$_SESSION['error']="Please rectify the PAN document";
	header("Location:GSTFormCompanyCo.php");
}
$MOAerror=$_FILES['MOA']['error'];
if($MOAerror!=0)
{
	$_SESSION['error']="Please rectify the MOA document";
	header("Location:GSTFormCompanyCo.php");
}
$AOAerror=$_FILES['AOA']['error'];
if($AOAerror!=0)
{
	$_SESSION['error']="Please rectify the AOA document";
	header("Location:GSTFormCompanyCo.php");
}
$certificateerror = $_FILES['certificate']['error'];
if($certificateerror!=0)
{
	$_SESSION['error']="Please rectify the certificate document";
	header("Location:GSTFormCompanyCo.php");
}
$Bankerror = $_FILES['Bank']['error'];
if($Bankerror!=0)
{
	$_SESSION['error']="Please rectify the Bank document";
	header("Location:GSTFormCompanyCo.php");
}
$Addresserror = $_FILES['Address']['error'];
if($Addresserror!=0)
{
	$_SESSION['error']="Please rectify the Address document";
	header("Location:GSTFormCompanyCo.php");
}
$Boarderror = $_FILES['Board']['error'];
if($Boarderror!=0)
{
	$_SESSION['error']="Please rectify the Board document";
	header("Location:GSTFormCompanyCo.php");
}
$Renterror = $_FILES['Rent']['error'];
if($Renterror!=0)
{
	$_SESSION['error']="Please rectify the Rent document";
	header("Location:GSTFormCompanyCo.php");
}
$a=0;
if($PANerror==0 && $MOAerror==0 && $AOAerror==0 && $certificateerror==0 && $Bankerror==0 && $Addresserror==0 && $Boarderror==0 && $Renterror==0)
{
	if($_FILES['PAN']['size']>1000000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='PAN pdf exceeded the file size limit';
		header("Location:GSTFormCompanyCo.php");
	}	
	if( $_FILES['MOA']['size']>1000000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='MOA pdf exceeded the file size limit';
		header("Location:GSTFormCompanyCo.php");
	}	
	if( $_FILES['AOA']['size']>1000000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='AOA pdf exceeded the file size limit';
		header("Location:GSTFormCompanyCo.php");
	}	
	if( $_FILES['certificate']['size']>1000000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='certificate pdf exceeded the file size limit';
		header("Location:GSTFormCompanyCo.php");
	}	
	if( $_FILES['Bank']['size']>1000000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='Bank pdf exceeded the file size limit';
		header("Location:GSTFormCompanyCo.php");
	}
	if( $_FILES['Address']['size']>1000000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='Address pdf exceeded the file size limit';
		header("Location:GSTFormCompanyCo.php");
	}
	if( $_FILES['Board']['size']>1000000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='Board pdf exceeded the file size limit';
		header("Location:GSTFormCompanyCo.php");
	}
	if( $_FILES['Rent']['size']>1000000)
	{
		clearstatcache();
		$a=1;
		$_SESSION['error']='Rent pdf exceeded the file size limit';
		header("Location:GSTFormCompanyCo.php");
	}

	$type='PAN';
	$code = rand(100000,999999);
	$PANname=$_FILES["PAN"]["name"];
	$PANtempname=$_FILES["PAN"]["tmp_name"];
	$filetype=pathinfo($PANname,PATHINFO_EXTENSION);
	$PANname=$name.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:GSTFormCompanyCo.php");
	}
	$PANfolder="PANCompany/".$PANname;
	move_uploaded_file($PANtempname,$PANfolder);
	
	$type='MOA';
	$code = rand(100000,999999);
	$MOAname=$_FILES["MOA"]["name"];
	$MOAtempname=$_FILES["MOA"]["tmp_name"];
	$filetype=pathinfo($MOAname,PATHINFO_EXTENSION);
	$MOAname=$name.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:GSTFormCompanyCo.php");
	}
	$MOAfolder="MOA/".$MOAname;
	move_uploaded_file($MOAtempname,$MOAfolder);
	
	$Rentfolder='';


	$type='AOA';
	$code = rand(100000,999999);
	$AOAname=$_FILES["AOA"]["name"];
	$AOAtempname=$_FILES["AOA"]["tmp_name"];
	$filetype=pathinfo($AOAname,PATHINFO_EXTENSION);
	$AOAsname=$name.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:GSTFormCompanyCo.php");
	}
	$AOAfolder="AOA/".$AOAname;
	move_uploaded_file($AOAtempname,$AOAfolder);


	$type='certificate';
	$code = rand(50362,99999);
	$certificatename=$_FILES["certificate"]["name"];
	$certificatetempname=$_FILES["certificate"]["tmp_name"];
	$filetype=pathinfo($certificatename,PATHINFO_EXTENSION);
	$certificatename=$name.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:GSTFormCompanyCo.php");
	}
	$certificatefolder="Certificate/".$certificatename;
	move_uploaded_file($certificatetempname,$certificatefolder);

	$type='Bank';
	$code = rand(50362,99999);
	$Bankname=$_FILES["Bank"]["name"];
	$Banktempname=$_FILES["Bank"]["tmp_name"];
	$filetype=pathinfo($Bankname,PATHINFO_EXTENSION);
	$Bankname=$name.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:GSTFormCompanyCo.php");
	}
	$Bankfolder="BankCompany/".$Bankname;
	move_uploaded_file($Banktempname,$Bankfolder);

	$type='Address';
	$code = rand(50362,99999);
	$Addressname=$_FILES["Address"]["name"];
	$Addresstempname=$_FILES["Address"]["tmp_name"];
	$filetype=pathinfo($Addressname,PATHINFO_EXTENSION);
	$Addressname=$name.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:GSTFormCompanyCo.php");
	}
	$Addressfolder="AddressCompany/".$Addressname;
	move_uploaded_file($Addresstempname,$Addressfolder);

	$type='Board';
	$code = rand(50362,99999);
	$Boardname=$_FILES["Board"]["name"];
	$Boardtempname=$_FILES["Board"]["tmp_name"];
	$filetype=pathinfo($Boardname,PATHINFO_EXTENSION);
	$Boardname=$name.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:GSTFormCompanyCo.php");
	}
	$Boardfolder="BoardResolution/".$Boardname;
	move_uploaded_file($Boardtempname,$Boardfolder);

	$type='Rent';
	$code = rand(50362,99999);
	$Rentname=$_FILES["Rent"]["name"];
	$Renttempname=$_FILES["Rent"]["tmp_name"];
	$filetype=pathinfo($Rentname,PATHINFO_EXTENSION);
	$Rentname=$name.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:GSTFormCompanyCo.php");
	}
	$Rentfolder="RentCompany/".$Rentname;
	move_uploaded_file($Renttempname,$Rentfolder);

	if($a!=1){
	$sql="INSERT INTO company(customerId,nameCompany,PAN,MOA,AOA,certificate,Bank,Address,NameDirector,Board,Rent) VALUES('$id',$nameCompany','$PANfolder','$MOAfolder','$AOAfolder','$certificatefolder','$Bankfolder','$Addressfolder','$name','$Boardfolder','$Rentfolder')";
	mysqli_query($con,$sql);
	$sql="SELECT id FROM company WHERE nameCompany='$nameCompany' AND PAN='$PANfolder'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$_SESSION['idCompanyDirector']=$row['id'];
	header("Location:directorinfo.php");}
	require 'PHPMailerAutoload.php';

$sentence='';
if(strcmp($message,'')==0)
	$sentence='A person has submitted gst data';
else
	$sentence='A person has submitted gst data<br>Message from customer:'.$message;

 mail("info@patronaccounting.com",'GST Registration','A GST registration has been done.');
  mail($email,'GST Registration','A GST registration has been done.');
}
else
{
	$_SESSION['error']='Please try again!!';
	header("Location:GSTFormCompanyCo.php");
	
}
?>