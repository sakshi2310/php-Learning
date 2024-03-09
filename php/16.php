<?php 
$a=56;
$b=54;
$c=89;
$d=23;
$e=64;	
echo "<br>a=".$a;
echo "<br>b=".$b;
echo "<br>c=".$c;
echo "<br>d=".$d;
echo "<br>e=".$e;	

if($a<$b && $a<$c && $a<$d && $a<$e)
{
    echo "<br>a is min";
} else if($b<$c && $b<$d && $b<$e)
{
    echo "<br> b is min";
}else if($c<$d && $c<$e)
{
    echo "<br> c is min ";
}else if($d<$e)
{
    echo "<br> d is min";
}else
{
    echo "<br> e is min";
}


 ?>