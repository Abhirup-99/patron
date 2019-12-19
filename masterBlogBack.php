<?php
session_start();
require("common.php");
$person=$_SESSION["idMaster"];
if(!isset($person)){
	header("location:masterLogin.php");}
$blogTitle = $_POST['blogTitle'];
$blogText = $_POST['blogText'];
$blogText2 = $_POST['blogText2'];
$createdBy = $_POST['createdBy'];
$blogTag = $_POST['blogTag'];
$blogPictureerror = $_FILES['blogPicture']['error'];
$blogPictureerror2 = $_FILES['blogPicture2']['error'];
if($blogPictureerror==0 && $blogPictureerror2==0)
{
	$type='blog';
	$code = rand(100000,999999);
	$blogname=$_FILES["blogPicture"]["name"];
	$blogtempname=$_FILES["blogPicture"]["tmp_name"];
	$filetype=pathinfo($blogname,PATHINFO_EXTENSION);
	$blogname=$blogTitle.$type.$code.".".$filetype;
	$blogfolder="Blog/".$blogname;
	move_uploaded_file($blogtempname,$blogfolder);
	$blogname2=$_FILES["blogPicture2"]["name"];
	$blogtempname2=$_FILES["blogPicture2"]["tmp_name"];
	$filetype=pathinfo($blogname2,PATHINFO_EXTENSION);
	$blogname2=$blogTitle."456".$type.$code.".".$filetype;
	$blogfolder2="Blog/".$blogname2;
	move_uploaded_file($blogtempname2,$blogfolder2);	
	$sql = "INSERT INTO blog(blogTitle,blogText,tag,blogPicture,createdBy,blogText2,blogPicture2)
	VALUES('$blogTitle','$blogText','$blogTag','$blogfolder','$createdBy','$blogText2','$blogfolder2')";
	mysqli_query($con,$sql);
	header("location:masterBlog.php");
}
else{
	echo'<script>alert("There is error in the file!!");</script>';
	header("location:masterBlog.php");
}
?>