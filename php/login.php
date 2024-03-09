<?php 
	$con=mysqli_connect("localhost","root","","fy-php");
	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql="select * from users where email='$email' and password='$password';";
		$res=mysqli_query($con,$sql);
		$cnt=mysqli_num_rows($res);
		// echo $cnt;
		if($cnt==0)
		{
			echo "not exist";
		}else
		{
			echo "exist";
		}
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
	<form method="post">
		<table border="1">
			<tr>
				<td>email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr align="center">
				<td colspan="2">
					<input type="submit" name="login" value="login">
				</td>
			</tr>
		</table>

	</form>

</body>
</html>