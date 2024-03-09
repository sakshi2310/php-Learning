
    <!-- swap value in 2 value -->
<?php 
$a=5;
$b=2;

echo "before swap";
echo "<br>a=".$a;
echo "<br>b=".$b;
echo "<br>after swap";
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "<br>a=".$a;
echo "<br>b=".$b;

 ?>