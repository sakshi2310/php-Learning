<?php 
$n1=30;
$n2=20;

if($n1<=$n2)
{
	while($n1<=$n2)
	{
		if($n1%2==1)
		{
			echo "<br>".$n1;
		}
		$n1++;
	}
}else
{
	while ($n1>=$n2) 
	{
		if($n1%2==0)
		{
			echo "<br>".$n1;
		}	
		$n1--;	
	}

}

 ?>