<?php
 
function fact()
{
	$a=1;
	$mul=1;
	echo "<br>a=".$a;
	while($a<=5)
	{
		$mul=$mul*$a;
		$a++;
	}
	return $mul;
}
echo "<br>factorial of 5=".fact();


 ?>