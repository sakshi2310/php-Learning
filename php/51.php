<?php 
$a=array();
$sum=0;


for($i=0;$i<=5;$i++)
{
	$a['sub'.$i]=rand(0,100);
	$sum+=$a['sub'.$i];
}
$min=$a['sub1'];
for($i=0;$i<=5;$i++)
{
	if($a['sub'.$i]<=$min)
	{
		$min=$a['sub'.$i];
	}
}

$max=$a['sub1'];
for($i=0;$i<=5;$i++)
{
	if($a['sub'.$i]>=$max)
	{
		$max=$a['sub'.$i];
	}
}
$cnt=0;
for($i=0;$i<=5;$i++)
{
	if($a['sub'.$i]<=33)
	{
		$cnt++;
	}
}



$per=$sum/5;
echo "<pre>";
print_r($a);
echo "<br>sum=".$sum;
echo "<br>per=".$per;
echo "<br>min=".$min;
echo "<br>max=".$max;
echo "<br>cnt=".$cnt;
if($cnt==0)
	{
		echo "<br>result=pass";
	}else if($cnt==1)
	{
		echo "<br>result=atkt";
	}else
	{
		echo "<br>result=fail";
	}
	if($per>=70)
	{
		echo "<br>greade=dis";
	}else if($per>=60 && $per<70)
	{
		echo "<br>grade=first";
	}else if($per>=50 && $per<60)
	{
		echo "<br>grade=secound";
	}else if($per>=35 && $per<50)
	{
		echo "<br>grade=third";
	}else
	{
		echo "<br>grade=fail";
	}





 ?>
