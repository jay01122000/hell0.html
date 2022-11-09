<form action="index.php" method="POST" enctype="multipart/form-data">
<input type="text" name="rnm" placeholder="enter roll no:" required></br>
<input type="text" name="nm" placeholder="enter name" required></br>
<input type="file" name="uploadfile" id="imgInp" accept=".png,.jpg,.jpeg"></br>
<img src="" id="blah" alt="select image" style=" border-radius: 50%;" height="150" width="150"></br>
<input type="submit" value="save"> 
</form>
<?php
	if(isset($_POST['rnm'])){
		$con=new mysqli("localhost","root","","img");
		if($con){
			$rnm=$_POST['rnm'];
			$nm=$_POST['nm'];
			$target_div="images/";
			$name=rand(150,148000);
			$extension = pathinfo($_FILES["uploadfile"]["name"],PATHINFO_EXTENSION);
			$fnm=$name.$extension;
			move_uploaded_file($_FILES["uploadfile"]["tmp_name"],$target_div.$name.".".$extension);
			$sql="INSERT INTO `img_1`( `roll_no`,`name`, `img`) VALUES ('$rnm','$nm','$fnm')";
			mysqli_query($con,$sql);
		}
	}

?>
<?php



 ?>
<script>
	imgInp.onchange = evt =>
		{
			const [file] = imgInp.files
				if (file)
			{
				blah.src = URL.createObjectURL(file)
			}
		}
</script>




