<?php 

	$con=mysqli_connect("localhost","root","","admin");
	if(isset($_POST['save']))
	{
		$title=$_POST['title'];
		$caption=$_POST['caption'];
		$image=$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], "upload/".$image);
		$sql="insert into slider (image,title,caption) values ('$image','$title','$caption')";
		mysqli_query($con,$sql);
	}




 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		slider data
	</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<table border="1" cellpadding="10">
			<tr>
				<td>image</td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td>title</td>
				<td><textarea rows="5" cols="50" name="title"></textarea></td>
			</tr>
			<tr>
				<td>caption</td>
				<td><textarea rows="20" cols="50" name="caption"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="save" value="save"></td>
			</tr>
		</table>
	</form>
</body>
</html>