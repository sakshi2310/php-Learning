<?php 

if(isset($_POST['save']))
{
	// print_r($_FILES);
	 // $_FILES['image']['tmp_name'];

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$concact=$_POST['concact'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	$hobby=$_POST['hobby'];


	echo "<b> name=".$name."</b>";
	echo "<br><b> email=".$email."</b>";
	echo "<br><b> password=".$password."</b>";
	echo "<br><b> address=".$address."</b>";
	echo "<br><b> concect=".$concact."</b>";
	echo "<br><b> city=".$city."</b>";
	echo "<br><b> gender=".$gender."</b>";
	echo "<br><b> hobby=".implode(",", $hobby)."</b>";
	move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name']);



 ?>
 <img src="upload/<?php echo $_FILES['image']['name']; ?>">
<?php } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>



<body>
	<form method="post" enctype="multipart/form-data">
		<table border="1">
			<tr>
				<td>name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>address</td>
				<td><textarea name="address"></textarea></td>
			</tr>
			<tr>
				<td>concact</td>
				<td><input type="text" name="concact"></td>
			</tr>
			<tr>
				<td>city</td>
				<td>
					<select name="city">
						<option >--select city---</option>				
						<option value="surat">surat</option>
						<option value="vapi">vapi</option>
						<option value="baroda">baroda</option>
						<option value="valsad">valsad</option>
						<option value="amhadabad">amhadabad</option>

					</select>
				</td>
			</tr>
			<tr>
				<td>gender</td>
				<td><input type="radio" name="gender" value="male">male
					<input type="radio" name="gender" value="female">female
				</td>

			</tr>
			<tr>
				<td>hobby</td>
				<td>
					<input type="checkbox" name="hobby[]" value="cricket">cricket
					<input type="checkbox" name="hobby[]" value="reading">reading
					<input type="checkbox" name="hobby[]" value="music">music
					<input type="checkbox" name="hobby[]" value="writting">writting

				</td>
			</tr>
			<tr>
				<td>image</td>
				<td>
				<input type="file" name="image" width="100">
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="save" value="submit"></td>
			</tr>
		</table>


	</form>

</body>
</html>