<?php 
$i;
$j;
$k;

for($i=1;$i<=5;$i++)
	{
		for($k=1;$k<$i;$k++)
		{
			echo "&nbsp;&nbsp;";
		}
		for($j=$i;$j<=5;$j++)
		{
			echo $j;
		}
		echo "<br>";
	}


 ?>