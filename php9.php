<form action="php9.php" method="post">
<input type="text" name="txtval" placeholder="enter value">
<input type="submit" value="submit">
</form>
<form action="php9.php" method="POST">
<?php
if (isset($_POST['txtval']))
{
	session_start();
	$_SESSION['count']=$_POST['txtval'];
	for($i=1; $i<=$_SESSION['count'];$i++)
	{
		?>
		<input type="text" name="txtval <?php echo  $i ; ?>" required> </br>
		<?php
	}
	?>
		<input type="submit" value="store">
		</form>
	<?php
}
	if(isset($_POST['txtarray1']))
{
			session_start();
			for($i=1;$i<=$_SESSION['count'];$i++)
			{
		$array[$i]=$_POST['txtarray1'.$i];
		echo $array[$i];
			}
	
}
?>