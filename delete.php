<?php
include 'connect.php';
if(isset($_GET['deleteid']))
	{
	$id=$_GET['deleteid'];
	$sql="DELETE FROM `crud_op` WHERE `id`='$id'";
	$result=mysqli_query($con,$sql);
	if($result){
		header("location:display.php");
	}
	else{
		die(mysqli-error($con));
	}
}
?>