<?php 
function get($a,$b,$c)
{
	echo "<br>a=".$a;
	echo "<br>b=".$b;
	echo "<br>c=".$c;
	if($a>$b)
	{
		if($a>$c)
		{
			echo "<br>a is max";
		}else
		{
			echo "<br>c is max";
		}
	}else
	{
		if($b>$c)
		{
			echo "<br>b is max";
		}else
		{
			echo "<br>cis max ";
		}
	}

}
get(100,200,30);

 ?>