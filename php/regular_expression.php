<?php 
$str="visit cdmi.in";
$pattern="/cdmi/i";
 echo preg_match($pattern, $str);

echo "<br>------------";
$str="the rain in SPAIN fails mainaly on the  plains";
$pattern="/ain/i";
echo "<br>" .preg_match_all($pattern, $str);

echo "<br>------------";

$str="visit cdmi";
$pattern="/cdmi/";
echo "<br>".preg_replace($pattern, "cdmi.in", $str);
 ?>