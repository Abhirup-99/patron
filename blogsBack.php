<?php
session_start();
include("common.php");
if(isset($_POST['tag'])){
	$sql = "SELECT DISTINCT tag FROM blog";
	$result = mysqli_query($con,$sql);
	echo'<div class="tagAjax">';
	while($row = mysqli_fetch_assoc($result))
	{
		echo '<p style="margin:0; margin-bottom:10px;padding:0;font-size: 16px;line-height: 20px;color: black;background-color: #ECECEC;">'.$row['tag'].'</p>';
	}
	echo'</div>';
}

?>
