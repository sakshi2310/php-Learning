<?php 
$i;
$j;
$k;

for($i=1;$i<=5;$i++)
	{
		for($k=4;$k>=$i;$k--)
		{
			echo "&nbsp;";
		}
		for($j=1;$j<=$i;$j++)
		{
			echo $j;
		}
		echo "<br>";
	}
	for($i=1;$i<=4;$i++)
	{
		for($k=1;$k<=$i;$k++)
		{
			echo "&nbsp;";
		}
		for($j=1;$j<=5-$i;$j++)
		{
			echo $j;
		}
		echo "<br>";
	}

 ?>