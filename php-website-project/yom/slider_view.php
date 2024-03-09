<?php 
	$con=mysqli_connect("localhost","root","","admin");

		$sql="select * from slider";
		$res=mysqli_query($con,$sql);



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>slider view</title>
</head>
<body>
	<table border="1" cellpadding="10">
		<tr>
			<td align="right" colspan="4">
				<a href="slider_data.php">add_slider_data</a>
				<a href="logout.php"><br>logout</a>
			</td>
		</tr>
		<tr>
			<th>id</th>
			<th>image</th>
			<th>title</th>
			<th>sub_title</th>
		</tr>
		<?php while($row=mysqli_fetch_assoc($res)) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><img src="upload/<?php echo $row['image']; ?>" width="100%"></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['sub_title']; ?></td>

		</tr>
	<?php } ?>
	</table>

</body>
</html>