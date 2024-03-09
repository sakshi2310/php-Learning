<?php 
$con=mysqli_connect("localhost","root","","fy-php");
if(isset($_GET['user_id']))
{
	$user_id=$_GET['user_id'];
	$sql_select="select image from users where id=".$user_id;
	$res_select=mysqli_query($con,$sql_select);
	$rec=mysqli_fetch_assoc($res_select);
	if(file_exists('upload/'.$rec['image']) && $rec['image']!="")
	{                
		unlink('upload/'.$rec['image']);

	}
	$sql_delete="delete from users where id=".$user_id;
	mysqli_query($con,$sql_delete); 

	
	header("location:user_view.php");

}


$sql="select*from users;";
$res=mysqli_query($con,$sql);
// $r=mysqli_fetch_assoc($res);
// echo "<pre>";
 // print_r($r);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>password</th>
		<th>address</th>
		<th>contact</th>
		<th>city</th>
		<th>gender</th>
		<th>hobby</th>
		<th>action</th>
		<th>edit</th>
		<th>image</th>
	</tr>
	<?php 
	while($row=mysqli_fetch_assoc($res)){
	 ?>
	 <tr>
	 	<td><?php echo $row['id']; ?></td>
	 	<td><?php echo $row['name']; ?></td>
	 	<td><?php echo $row['email']; ?></td>
	 	<td><?php echo $row['password']; ?></td>
	 	<td><?php echo $row['address']; ?></td>
	 	<td><?php echo $row['concact']; ?></td>
	 	<td><?php echo $row['city']; ?></td>
	 	<td><?php echo $row['gender']; ?></td>
	 	<td><?php echo $row['hobby']; ?></td>
	 	<td> <img src="upload/<?php echo $row['image']; ?>" width="100"></td>
	 	<td><a href="form_register.php?data_id=<?php echo $row['id']; ?>">edit</td>
	 	<td><a href="user_view.php?user_id=<?php echo $row['id']; ?>">delete</td>

	 	
	 	

	 	
	 </tr>
	<?php  }?>
</table>
</body>
</html>