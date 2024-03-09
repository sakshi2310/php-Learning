<?php 
session_start();
if(!isset($_SESSION['user_id']))
{
	header("location:index.php");
}
$con=mysqli_connect("localhost","root","","fy-php");
$user_id=$_SESSION['user_id'];
echo $user_id;
$sql="select * from users where id=".$user_id;
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
// echo "<pre>";print_r($row);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>welcome to our website.. <?php echo $row['name']; ?></h1>
	<img src="../upload/<?php echo $row['image']; ?>" width="100">
	<br>
	<a href="logout.php">logout</a>
	<a href="profile.php?id=<?php echo $row['id']; ?>"><br>edit</a>

</body>
</html>