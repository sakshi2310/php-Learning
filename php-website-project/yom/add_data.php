<?php 
	$con=mysqli_connect("localhost","root","","admin");
	if(isset($_POST['save']))
	{
		$name=$_POST['name'];
		$user_name=$_POST['user_name'];
		$password=$_POST['password'];
		$image=$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.$image);
		$sql="insert into client (name,user_name,password,image) values ('$name','$user_name','$password','$image');"; 
		mysqli_query($con,$sql);
		
	}
	




 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add data</title>
</head>
<body>
	<h1 align="center">Add the data</h1>
	<form method="post" enctype="multipart/form-data">
		<table border="1" align="center" cellpadding="7">
			<tr>
				<td>Name:</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>User name:</td>
				<td>
					<input type="text" name="user_name">
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td>
					<input type="Password" name="password">
				</td>
			</tr>
			<tr>
				<td>Image</td>
				<td>
					<input type="file" name="image">
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2 ">
					<input type="submit" value="save" name="save">
				</td>
			</tr>

		</table>
	</form>

</body>
</html>