<!-- maximun and minimun value find in three value -->
<?php 
	$a=40;
	$b=34;
	$c=68;
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
			echo "<br>c is max";
		}
	}




 ?>