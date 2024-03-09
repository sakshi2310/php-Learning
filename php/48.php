<?php 
//random value 
$a=array();
$i;
for($i=0;$i<=5;$i++)
{
	$a[]=rand(0,100);
}
print_r($a);


//assoative array
echo "<br>";
$a=array('name'=> 'rajesh','email'=>'rajesh@gmail.com','city'=>'surat');
print_r($a);

echo "<br>";
echo $a['city'];
 ?>