

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/js/bootstrap.esm.min.js" integrity="sha512-98Bx7VXv7nAL2T6yHnwlN8MExCPZUSGrp0su/27e08tubVnZKfvX9c45+F3JOCGpjl44pTZ7f378Bcm53PgMKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/css/bootstrap.rtl.min.css" integrity="sha512-v/0rtuCuKOmpkT153wINc6H7UtLualQIhOpXdmB4Y1KtYBBtg++8UFPyYJBHLmnd2qBbrKvO+eudewymb5FW6w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
<button class="btn btn-primary my-3"><a href="user.php" class="text-light">add user</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">pasword</th>
	  <th scope="col">operations</th>
	  
	  <?php
include 'connect.php';
$sql="select * from `crud_op`";
$result=mysqli_query($con,$sql);
if($result){
	while($row=mysqli_fetch_assoc($result))
	{
		$id=$row['id'];
		$name=$row['name'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		$password=$row['password'];
		echo '<tr>
		<td>'.$name.'</th>
		<td>'.$email.'</td>
		<td>'.$mobile.'</td>
		<td>'.$password.'</td>
		<td><button class="btn btn-primary"><a href="update.php"? updateid='.$id.' class="text-light" name="submit">update</a></button>
		<td><button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">delete</a></button>
		</tr>';
	}
}
?>
	
