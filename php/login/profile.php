<?php 

$con=mysqli_connect("localhost","root","","fy-php");
$hobby_update=array();
// seesion_start();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	// echo $id;
	$sql_select="select * from users where id=".$id;
	$res_select=mysqli_query($con,$sql_select);
	$row=mysqli_fetch_assoc($res_select);
	$hobby_update=explode(",", $row['hobby']);
// header("location:welcome.php");

}
if(isset($_POST['save']))
{
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$concact=$_POST['concact'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	$hobby=$_POST['hobby'];
	$hobby_str=implode(",",$hobby);
	$image=$_FILES['image']['name'];

	if ($image=="") {
		
		$image = $row['image'];
	}
	else
	{
		if($_GET['id'])
		{
			unlink('upload/'.$row['image']);
		}
		move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$image);
	}

	
	if(isset($_GET['id']))
	{
		$sql="update users set name='$name',email='$email',password='$password',address='$address',concact='$concact',city='$city',gender='$gender',hobby='$hobby_str',image='$image' where id=".$id;
	}else
	{
		move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$image);

		$sql="insert into users(name,email,password,address,concact,city,gender,hobby,image) values ('$name','$email','$password','$address','$concact','$city','$gender','$hobby_str','$image');";

	}

	mysqli_query($con,$sql);
	header("location:welcome.php");
		
}



 ?>
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
				<td><input type="text" name="name" value="<?php echo @$row['name']; ?>"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email" value="<?php echo @$row['email']; ?>"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password" value="<?php echo @$row['password']; ?>"></td>
			</tr>
			<tr>
				<td>address</td>
				<td><textarea name="address"> <?php echo @$row['address']; ?></textarea></td>
			</tr>
			<tr>
				<td>concact</td>
				<td><input type="text" name="concact" value="<?php  echo @$row['concact']; ?>"></td>
			</tr>
			<tr>
				<td>city</td>
				<td>
					<select name="city">
						<option >--select city---</option>				
						<option value="surat" <?php if(@$row['city']=="surat"){echo "selected";} ?>>surat</option>
						<option value="vapi" <?php if(@$row['city']=="vapi"){echo "selected";} ?>>vapi</option>
						<option value="baroda"<?php if(@$row['city']=="baroda"){echo "selected";} ?>>baroda</option>
						<option value="valsad"<?php if(@$row['city']=="valsad"){echo "selected";} ?>>valsad</option>
						<option value="amhadabad"<?php if(@$row['city']=="amhadabad"){echo "selected";} ?>>amhadabad</option>

					</select>
				</td>
			</tr>
			<tr>
				<td>gender</td>
				<td><input type="radio" name="gender" value="male" <?php if(@$row['gender']=="male"){echo "checked";} ?>>male
					<input type="radio" name="gender" value="female"<?php if(@$row['gender']=="female"){echo "checked";} ?>>female
				</td>

			</tr>
			<tr>
				<td>hobby</td>
				<td>
					<input type="checkbox" name="hobby[]" value="cricket"<?php if(in_array("cricket", @$hobby_update)){echo "checked";} ?>>cricket
					<input type="checkbox" name="hobby[]" value="reading"<?php if(in_array("reading", @$hobby_update)){echo "checked";} ?>>reading
					<input type="checkbox" name="hobby[]" value="music"<?php if(in_array("music", @$hobby_update)){echo "checked";} ?>>music
					<input type="checkbox" name="hobby[]" value="writting"<?php if(in_array("writting", @$hobby_update)){echo "checked";} ?>>writting

				</td>
			<tr>
				<td>image</td>
				<td>
				<input type="file" name="image">
				<img src="../upload/<?php echo @$row['image']; ?>" width="50">
				</td>

			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="save" value="submit"></td>
			</tr>
 		</table>
 	</form>
 
 </body>
 </html>