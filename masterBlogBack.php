<?php
session_start();
require("common.php");
$person=$_SESSION["idMaster"];
if(!isset($person)){
	header("location:masterLogin.php");}
$blogTitle = $_POST['blogTitle'];
$blogText = $_POST['blogText'];
$createdBy = $_POST['createdBy'];
$blogTag = $_POST['blogTag'];
$blogPictureerror = $_FILES['blogPicture']['error'];
if($blogPictureerror==0)
{
	$type='blog';
	$code = rand(100000,999999);
	$blogname=$_FILES["blogPicture"]["name"];
	$blogtempname=$_FILES["blogPicture"]["tmp_name"];
	$filetype=pathinfo($blogname,PATHINFO_EXTENSION);
	$blogname=$blogTitle.$type.$code.".".$filetype;
	$blogfolder="Blog/".$blogname;
	move_uploaded_file($blogtempname,$blogfolder);	
	$sql = "INSERT INTO blog(blogTitle,blogText,tag,blogPicture,createdBy)
	VALUES('$blogTitle','$blogText','$blogTag','$blogfolder','$createdBy')";
	mysqli_query($con,$sql);
	header("location:masterBlog.php");
}
else{
	echo'<script>alert("There is error in the file!!");</script>';
	header("location:masterBlog.php");
}
?>