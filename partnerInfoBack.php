<?php
session_start();
require("common.php");
$person=$_SESSION["idCustomer"];
if(!isset($person)){
header("location:customerLogin.php");}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$llpId = test_input($_POST['llpId']);
$name = test_input($_POST['namePartner']);
$email = test_input($_POST['email']);
$mobile = test_input($_POST['mobile']);
$qualification = test_input($_POST['qualification']);
$occupation = test_input($_POST['occupation']);
$individualContrib = test_input($_POST['individualContrib']);
$DIN = test_input($_POST['DIN']);
$PANerror = $_FILES['PAN']['error'];
if($PANerror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the pan card attested copy";
	header("Location:llpRegistration.php");
}
$Passporterror = $_FILES['Passport']['error'];
if($Passporterror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the passport attested copy";
	header("Location:llpRegistration.php");
}
$Bankerror = $_FILES['Bank']['error'];
if($Bankerror!=0)
{
	$_SESSION['error']="Please reduce the filesize of the Bank attested copy";
	header("Location:llpRegistration.php");
}
$a=0;
if($Bankerror==0 && $PANerror==0 && $Passporterror==0)
{
	$type='Bank';
	$code = rand(50362,99999);
	$Bankname=$_FILES["Bank"]["name"];
	$Banktempname=$_FILES["Bank"]["tmp_name"];
	$filetype=pathinfo($Bankname,PATHINFO_EXTENSION);
	$Bankname=$email.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:llpRegistration.php");
	}
	$Bankfolder="Bankllp/".$Bankname;
	move_uploaded_file($Banktempname,$Bankfolder);

	$type='PAN';
	$code = rand(50362,99999);
	$PANname=$_FILES["PAN"]["name"];
	$PANtempname=$_FILES["PAN"]["tmp_name"];
	$filetype=pathinfo($PANname,PATHINFO_EXTENSION);
	$PANname=$email.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:llpRegistration.php");
	}
	$PANfolder="PANllp/".$PANname;
	move_uploaded_file($PANtempname,$PANfolder);

	$type='Passport';
	$code = rand(50362,99999);
	$Passportname=$_FILES["Passport"]["name"];
	$Passporttempname=$_FILES["Passport"]["tmp_name"];
	$filetype=pathinfo($Passportname,PATHINFO_EXTENSION);
	$Passportname=$email.$type.$code.".".$filetype;
	if($filetype !== 'pdf')
	{
		$a=1;
		$_SESSION['error']='Please enter in a pdf format';
		header("Location:llpRegistration.php");
	}
	$Passportfolder="Passportllp/".$Passportname;
	move_uploaded_file($Passporttempname,$Passportfolder);

	$Adhaarfolder = '';
	$Adhaarerror = $_FILES['Adhaar']['error'];
	if($Adhaarerror==0)
	{
		$type='Adhaar';
		$code = rand(50362,99999);
		$Adhaarname=$_FILES["Adhaar"]["name"];
		$Adhaartempname=$_FILES["Adhaar"]["tmp_name"];
		$filetype=pathinfo($Adhaarname,PATHINFO_EXTENSION);
		$Adhaarname=$email.$type.$code.".".$filetype;
		if($filetype !== 'pdf')
		{
			$a=1;
			$_SESSION['error']='Please enter in a pdf format';
			header("Location:llpRegistration.php");
		}
		$Adhaarfolder="Adhaarllp/".$Adhaarname;
		move_uploaded_file($Adhaartempname,$Adhaarfolder);	
	}
	if($a!=1)
	{
		$sql="INSERT INTO partner(llpId,name,email,mobile,qualification,occupation,DIN,PAN,Adhaar,Passport,Bank,individualContrib)
		VALUES($llpId,'$name','$email','$mobile','$qualification','$occupation','$DIN','$PANfolder','$Adhaarfolder','$Passportfolder','$Bankfolder','$individualContrib')";
		$result = mysqli_query($con,$sql);
		header("Location:partnerInfo.php");
	}
	header("Location:partnerInfo.php");
}
?>
