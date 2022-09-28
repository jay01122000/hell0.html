<?php
include'connect.php';
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$password=$_POST['password'];
		$sql="INSERT INTO `crud_op`( `name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";
		$result=mysqli_query($con,$sql);
		if($result){
			header('location:display.php');
		}else{
			die(mysql_error($con));
		}
	}

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/js/bootstrap.esm.min.js" integrity="sha512-98Bx7VXv7nAL2T6yHnwlN8MExCPZUSGrp0su/27e08tubVnZKfvX9c45+F3JOCGpjl44pTZ7f378Bcm53PgMKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/css/bootstrap.rtl.min.css" integrity="sha512-v/0rtuCuKOmpkT153wINc6H7UtLualQIhOpXdmB4Y1KtYBBtg++8UFPyYJBHLmnd2qBbrKvO+eudewymb5FW6w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container my-3 mt-4">
<form action="user.php" method="post">
<input type="text" name="name" class="form-control" placeholder="enter your name" required></br>
<input type="text" name="email" class="form-control" placeholder="enter your email" required></br>
<input type="text" name="mobile" class="form-control" placeholder="enter your mobile" required></br>
<input type="text" name="password" class="form-control" placeholder="enter your password" required></br>
<button type="submit" name="submit" class="btn btn-info">submit</button>