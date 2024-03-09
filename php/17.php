<?php 
$a=45;
$b=48;
$c=43;

echo "a=".$a;
echo "<br>b=".$b;
echo "<br>c=".$c;
echo($a<$b ?($a<$c ? "<br>a is min" : "<br>c is min" ): ($b<$c ? "<br>b is min" : "<br>c is min"));
 ?>