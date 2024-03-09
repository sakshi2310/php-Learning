<?php 
$name=$_REQUEST['u_name'];	
echo $name;
$con=mysqli_connect("localhost","root","","fy-php");
if($name!="")
{
	$output="";
	$sql="select * from users where name LIKE '%$name%'";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res))
	{
		$output.="<li>".$row['name']."</li>";
	}
	echo $output;
}

 ?>