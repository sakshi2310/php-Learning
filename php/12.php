<!-- min and max among the four value -->
<?php  
	$a=76;
	$b=73;
	$c=45;
	$d=65;
	echo "<br>a=".$a;
	echo "<br>b=".$b;
	echo "<br>c=".$c;
	echo "<br>d=".$d;

	if($a>$b)
	{
		if($a>$c)
		{
			if($a>$d)
			{
				echo "<br>a is max";
			}else
			{
				echo "<br> d is max";
			}
			
		}else
		{
			if($c>$d)
			{
				echo "<br>c is max";
			}else
			{
				echo "<br>d is max";
			}
		}
	}else
	{
		if($b>$c)
		{
			if($b>$d)
			{
				echo "<br>b is max";
			}else 
			{
				echo "<br>d is max";
			}
		}else
		{
			if($c>$d)
			{
				echo "<br>c is max";
			}else
			{
				echo "<br>d is max";
			}

		}
	}


?>