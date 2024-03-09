<?php 
session_start();
if(!isset($_SESSION['id']))
{
    header("location:index.php");
}
$con=mysqli_connect("localhost","root","","admin");
	
	$id=$_SESSION['id'];
    // echo $id;
	$sql="select * from client where id=".$id;
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>
 		profile

 	</title>
 </head>
 <body>
 		<h3> welcome..
 			<?php echo $row['name']; ?>
 		</h3>
        <img src="upload/<?php echo $row['image']; ?>" width="100">
 		<table  cellpadding="7px">
 			<tr>
 				<td>
                    <a href="slider_view.php">slider</a>
                </td>
 				<td>
 					<a href="photo.php">photos </a>
 				</td>
 				<td> 
 					<a href="blog.php">blogs</a>
 				</td>
 				<td>
 					<a href="logout.php">logout</a>
 				</td>
 			</tr>
 		</table>
 	
 		
 		

 </body>
 </html>