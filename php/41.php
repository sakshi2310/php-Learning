<?php 
$i;
$j;
$k;
for($i=1;$i<=5;$i++)
	{
		for($k=4;$k>=$i;$k--)
		{
			echo "&nbsp;&nbsp;";
		}
		for($j=$i;$j>=1;$j--)
		{
			echo $j;
		}
		echo "<br>";
	}	


 ?>