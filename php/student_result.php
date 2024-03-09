<?php 
if(isset($_POST['save']))
{
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$sub5=$_POST['sub5'];
	

	$total=$sub1+$sub2+$sub3+$sub4+$sub5;
	$per=$total/5;
	if($sub1<$sub2 && $sub1<$sub3 && $sub1<$sub4 && $sub1<$sub5)
	{
		$min=$sub1;
	}else if($sub2<$sub3 && $sub2<$sub4 && $sub2<$sub5)
	{
		$min=$sub2;
	}else if($sub3<$sub4 && $sub3<$sub5)
	{
		$min=$sub3;
	}else if($sub4<$sub5)
	{
		$min=$sub4;
	}else
	{
		$min=$sub5;
	}

	if($sub1>$sub2 && $sub1>$sub3 && $sub1>$sub4 && $sub1>$sub5)
	{
		$max=$sub1;
	}else if($sub2>$sub3 && $sub2>$sub4 && $sub2>$sub5)
	{
		$max=$sub2;
	}else if($sub3>$sub4 && $sub3>$sub5)
	{
		$max=$sub3;
	}else if($sub4>$sub5)
	{
		$max=$sub4;
	}else
	{
		$max=$sub5;
	}

	if($per>70)
 	{

 		$grade="dis";
	}else if($per>60)
	{
 		$grade="first";
	}else if($per>50)
 	{
 		$grade="secound";
 	}else if($per>35)
 	{
 		$grade="third";
 	}else
 	{
 		$grade="-";
 	} 
 	$cnt=0;
 	for($i=$sub1;$i<=$sub5;$i++)
 	{
 		if($i<=33)
 		{
 			$cnt++;
 		}
 	}
 	if($cnt=1 && $cnt=2)
 	{
 			$result="atkt";
 	}else if($cnt==0)
 	{
 		$result="pass";
 	}else
 	{
 		$result="fail";
 	}




	echo "<br>sub1=".$sub1;
	echo "<br>sub2=".$sub2;
	echo "<br>sub3=".$sub3;
	echo "<br>sub4=".$sub4;
	echo "<br>sub5=".$sub5;
	echo "<br>total=".$total;
	echo "<br>per=".$per;
	echo "<br>min=".$min;
	echo "<br>max=".$max;
	echo "<br>grade=".$grade;
	echo "<br>result=".$result;




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
				<td>sub 1</td>
				<td><input type="text" name="sub1"></td>
			</tr>
			<tr>
				<td>sub 2</td>
				<td><input type="text" name="sub2"></td>
			</tr>
			<tr>
				<td>sub 3</td>
				<td><input type="text" name="sub3"></td>
			</tr>
			<tr>
				<td>sub 4</td>
				<td><input type="text" name="sub4"></td>
			</tr>
			<tr>
				<td>sub 5</td>
				<td><input type="text" name="sub5"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="save">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>