<?php 
$con=mysqli_connect("localhost","root","","admin");
session_start();
if(isset($_SESSION['id']))
{
	header("location:profile_page.php");
}
if(isset($_POST['login']))
{
	$user_id=$_POST['user_id'];
	$password=$_POST['password'];	
	$sql="select * from client where user_id='$user_id' and password='$password';";
	$res=mysqli_query($con,$sql);
	$cnt=mysqli_num_rows($res);
	if($cnt==0)
	{
		echo "invalid user_id and password";
	}else
	{
		$row=mysqli_fetch_assoc($res);
		echo "<pre>"; print_r($row);
		$_SESSION['id']=$row['id'];
		header("location:profile_page.php");
	}
}




 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login user
	</title>
</head>
<body>
	<h1 align="center">login the user</h1>
	<form method="post">
		<table border="1" align="center" cellpadding="10">
			<tr>
				<td>User name:</td>
				<td>
					<input type="text" name="user_id">
				</td>
			</tr>
			<tr>
				<td>password:</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td  align="center" colspan="2" > 
				<input type="submit" name="login" value="login">
					<table align="right"> 
						<tr>
							<td>
								<a href="add_data.php"><br>Sign in</a>
							</td>
						</tr>
					</table>
				</td>
				
			</tr>
			
		</table>
	</form>
</body>
</html>