<?php 

function sum($a,$b)
{
	echo "<br>a=".$a;
	echo "<br>b=".$b;
	return $a+$b;
}
echo "<br>sum=".sum(10,20);
echo "<br>";
function sub($a,$b)
{
		echo "<br>a=".$a;
		echo "<br>b=".$b;
		return $a-$b;
}
echo "<br>sub=".sub(30,20);

echo "<br>";
function mul($a,$b)
{
	echo "<br>a=".$a;
	echo "<br>b=".$b;
	return $a*$b;
}
echo "<br>mul=".mul(20,10);
echo "<br>";
function div($a,$b)
{
	echo "<br>a=".$a;
	echo "<br>b=".$b;
	return $a/$b;
}
echo "<br>div=".div(50,10);
 ?>