<?php 
	$a=56;
	$b=56;
	$c=120;
	echo "<br>a=".$a;
	echo "<br>b=".$b;
	echo "<br>c=".$c;

	if($a==$b)
	{
		if($b==$c)
		{
			echo "<br>a and b and c are same";
		}else 
		{
			echo "<br>a nd b are same and c is differet";
		}
	}else
	{
		if($b==$c)
		{
			echo "<br>b and c are same and a is differet";
		}else 
		{
			if($a==$c)
			{
				echo "<br>a and c are same and b is different";
			}else
			{
				if($a>$b)
				{
					if($a>$c)
					{
						echo "<br> a is max";
					}else
					{
						echo "<br> c is max";
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
			}

				
		}
	}


 ?>