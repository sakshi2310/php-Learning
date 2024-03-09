<?php 
//array

//index array
$a=array(10,20,30,40);
print_r($a);

//only element print
echo "<br><br>".$a[2];

// for loop
$i;
echo "<br>";
 for($i=0;$i<4;$i++)
 {
 	echo "<br>".$a[$i];
 }

echo "<br>";
 //foreach loop
$sum=0;
 foreach ($a as $k => $v) 
 {
 	echo "<br>".$k.'=>'.$v;
 	$sum=$sum+$v;
 }

 echo "<br>sum=".$sum;
 ?>