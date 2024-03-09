<?php 
//student result
$s1=56;
$s2=78;
$s3=67;
$s4=69;
$s5=56;


	
	echo "<br>s1=".$s1;
	echo "<br>s2=".$s2;
	echo "<br>s3=".$s3;
	echo "<br>s4=".$s4;
	echo "<br>s5=".$s5;

	$total=$s1+$s2+$s3+$s4+$s5;
	echo "<br>total".$total;
	$per=$total/5;
	echo "<br>per=".$per;

	if($s1<=$s2 && $s1<=$s3 && $s1<=$s4 && $s1<=$s5)
	{
		$min=$s1;
	}else if($s2<=$s3 &&$s2<=$s4 &&$s2<=$s5)
	{
		$min=$s2;
	}else if($s3<=$s4 && $s3<=$s5)
	{
		$min=$s3;
	}else if($s4<=$s5)
	{
		$min=$s4;
	}else
	{
		$min=$s5;
	}
	echo "<br>min".$min;
	if($s1>=$s2  &&$s1>=$s3 && $s1>=$s4 && $s1>=$s5)
	{
		$max=$s1;
	}else if($s2>=$s3 && $s2>$s4 && $s2>=$s5)
	{
		$max=$s2;
	}else if($s3>=$s4 && $s4>=$s5)
	{
		
		$max=$s3;
	}else if($s4>=$s5)
	{
		$max=$s4;
	}else
	{
		$max=$s5;
	}
	echo "<br>max=".$max;
	if($per>=35)
	{
		echo "<br>result=pass";
	}else
	{
		echo "<br>result=fail";
	}
	if($per>=80)
	{
		echo "<br>grade=dis";
	}else if($per>=70)
	{
		echo "<br>grade=first";
	}else if($per>=60)
	{
		echo "<br>grade=secound";
	}else if($per>=50)
	{
		echo "<br>grade=third";
	}else if($per>=30)
	{
		echo "grade=pass";
	}else
	{
		echo "grade=fail";
	}






 ?>