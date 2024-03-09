<!-- max and min among the five value -->
<?php 
	$a=23;
	$b=45;
	$c=54;
	$d=23;
	$e=34;

	echo "<br>a=".$a;
	echo "<br>b=".$b;
	echo "<br>c=".$c;
	echo "<br>d=".$d;
	echo "<br>e=".$e;

	if($a>$b)
	{
		if($a>$c)
		{
			if($a>$d)
			{
				if($a>$e)
				{
					echo "<br> a is max";
				}else
				{
					echo "<br> b is max";
				}
			}else
			{
				if($d>$e)
				{
					echo "<br> d is max";
				}else
				{
					echo "<br> e is max";
				}
			}
		}else
		{
			if($c>$d)
			{
				if($c>$e)
				{
					echo "<br>c is max";
				}else
				{
					echo "<br>e is max";
				}
			}else 
			{
					if($d>$e)
					{
						echo "<br>d is max";
					}else 
					{
						echo "<br> e is max";
					}
			}
		}
	}else
	{
		if($b>$c)
		{
			if($b>$d)
			{
				if($b>$e)
				{
					echo "<br>b is max";
				}else 
				{
					echo "e is max";
				}
			}else
			{
				if($d>$e)
				{
					echo "<br>d is max";
				}else
				{
					echo "<br>e is max";
				}
			}
		}else
		{
			if($c>$d)
			{
				if($c>$e)
				{
					echo "<br>c is max";
				}else
				{
					echo "<br>e is max";
				}
			}else
			{
				if($d>$e)
				{
					echo "<br>d is max";
				}else
				{
					echo "<br>e is max";
				}
			}
		}
	}

 ?>