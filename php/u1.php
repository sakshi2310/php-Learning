<?php 
if(isset($_GET['val1'])){
	$v1=$_GET['val1'];
	$v2=$_GET['val2'];
	echo "<br>v1=".$v1;
	echo "<br>v2=".$v2;
	if(isset($_GET['sum'])){
		echo "<br>sum=".$sum=$v1+$v2;
	}else if(isset($_GET['sub'])){
		echo "<br>sub=".$sub=$v1-$v2;
	}else if(isset($_GET['mul'])){
		echo "<br>mul=".$v1*$v2;
	}else if(isset($_GET['div']))
	{
		echo "<br>div=".$v1/$v2;
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
	<form>
		<table border="1">
			<tr>
				<td>value1</td>
				<td><input type="text" name="val1"></td>
			</tr>
			<tr>
				<td>value2</td>
				<td><input type="text" name="val2"></td>
			</tr>
			<tr>
				<td align="center" colspan="2">
					<input type="submit" name="sum" value="+">
					<input type="submit" name="sub" value="-">
					<input type="submit" name="mul" value="*">
					<input type="submit" name="div" value="/">


				</td>
			</tr>
			
		</table>
	</form>

</body>
</html>