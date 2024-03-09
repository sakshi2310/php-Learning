<?php 
//no aregrument no return value

function f_name(){

	echo "good morning";
}
f_name();

// with aregrument no return value
echo "<br><br>";
function get($name,$s_name)
{
	echo "name=".$name."<br>";
	echo "surname=".$s_name;
}
get('raj','savaliya');

echo "<br><br>";

//no aregrumnet with return value

function sum()
{
	$a=10;
	$b=20;
	echo "<br>a=".$a;
	echo "<br>b=".$b;
	return $a+$b;
}
 echo "<br>sum=". sum();

echo "<br><br>";
//with aregrument with return value

function total($a,$b)
{
	echo "<br>a=".$a;
	echo "<br>b=".$b;
	return $a+$b;
}
echo "<br>total=". total(20,30);

 ?>