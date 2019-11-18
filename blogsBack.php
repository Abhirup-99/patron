<?php
session_start();
include("common.php");
echo'<link rel="stylesheet" href="stylesheet.css"';
if(isset($_POST['tag'])){
	$sql = "SELECT * FROM tag";
	$result = mysqli_query($con,$sql);
	echo'<div class="tagAjax">';
	while($row = mysqli_fetch_assoc($result))
	{
		echo '<p style="margin:0; margin-bottom:10px;padding:0;font-size: 16px;line-height: 20px;color: black;background-color: #ECECEC;">'.$row['tag'].'</p>';
	}
	echo'</div>';
}
if(isset($_POST['blog']))
{
	$sql = "SELECT * FROM blog";
	$result = mysqli_query($con,$sql);
	echo '<div class="row"';
	while($row = mysqli_query($result))
	{
		echo '<div class="col-lg-6 col-md-12>';
		echo '<img src="'.$row['blogPicture'].""
	}
}
?>