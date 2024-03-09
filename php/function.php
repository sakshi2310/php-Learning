<?php 
//chr
echo "<br> <b> <u><h2>string function </b> </u></h2>";
echo "<br>".chr(65);

//ord
echo "<br>".ord("a");

//strtolower
echo "<br>".strtolower("HELLO");

//strtouper
echo "<br>".strtoupper("good morning");

//ucfirst
echo "<br>".ucfirst("hello");

//ucwords
echo "<br>".ucwords("how are you");

//strlen
echo "<br>".strlen("hello good morning");

//ltrim
echo "<br>".strlen(ltrim("  hello good morning"));	
echo ltrim(  "hello good morning");

//rtrim
echo "<br>".strlen("i am sakshi   ");
echo rtrim("i am sakshi   ");

//trim
echo "<br>".strlen(trim("  hi  good afternoon   "));
echo trim("  hi  good afternoon   ");

//substr
echo "<br>".substr("computer", 0,3);

//strcmp
echo "<br>".strcmp("SAKSHI" , "sakshi");

//strcasecmp
echo "<br>".strcasecmp("sakshi", "SAKSHI");

//strncasecmp
echo "<br>".strncmp("sakshi", "somiya", 3);

//strpos
echo "<br>".strpos("sakshi", "k");

//strrpos
echo "<br>".strrpos("sakshi", "s");

//strstr
echo "<br>".strstr("sakshi", "k");

//strrev
echo "<br>".strrev("hello");	

//str_replace
echo "<br>".str_replace("k", "*", "sakshi");

//str_ireplace
echo "<br>".str_ireplace("K", "^", "sakshi");

//stechr
echo "<br>".strrchr("hello good morning","o");

//strval
$digit=1234;
echo "<br>".strval($digit);

//echo
echo "<br>".$digit;

//print 
$a="WelCome";
$b=" Bye"; 
print"<br>".$a; print $b; 

//add slashes
echo "<br>father's";
echo addslashes("   father's");

//stripcslashes
echo "<br>mother/'s";
echo stripslashes(  "mother/'s");

echo "<br><br> <b> <u><h2>math function </b> </u></h2>";

//abs
echo "<br>".abs(-45.78);

//ceil
echo "<br>".ceil(67.34);

//floor
echo "<br>".floor(56.23);

//round
echo "<br>".round(23.585468,2);

//fmod
echo "<br>".fmod(10, 3);

//min
echo "<br>".min(12,46,15,58,35,98);

//max
echo "<br>".max(12,46,15.58,35,98);

//pow
echo "<br>".pow(3, 2);

//sqtr
echo "<br>".sqrt(16);

//rand
echo "<br>".rand(0,100);

//bindec
echo "<br>".bindec(1100);

//octdec
echo "<br>".octdec(14);

//hexdec
echo "<br>".hexdec("A7");

//decbin
echo "<br>".decbin(45);

//decoct
echo "<br>".decoct(45);

//dechex
echo "<br>".dechex(45);

echo "<br><br> <b> <u><h2> date function </b> </u></h2>";

//date
echo "<br>".date("d-F-y h:i:s a");
echo "<br>".date("d-m-Y h:i:s a");


//getday
$date=getdate(12343574);
echo "<pre>"; print_r($date);

//setdate
$date = new DateTime();
$date->setdate(2004,10,23);
echo "<br>".$date->format("D:F-Y-d");


//cheakdate
$chk=checkdate(2, 29, 2005);
echo "<br>";
var_dump($chk);

//mktime
$mktime=mktime(11,25,10,12,25,2022);
echo date("d-m-y h:i:s A",$mktime);

echo "<br><br><b><u><h2> array handling function </b></u></h2>";

//count
$student=array(1,"sakshi","surat");
echo "<br>student=".count($student);

//list
list($no,$name,$city)=$student;
echo "<br>no=".$no;
echo "<br>name=".$name;
echo "<br>city=".$city;

//is array
echo "<br>";
var_dump(is_array($student));

//in array
var_dump(in_array("raj", $student));

//currtent
$student=array("somiya","siya");
echo current($student);

//next
echo "<br>".next($student);

//prev
echo "<br>".prev($student);

//reset
$student=array(1,"sakshi");
echo "<br>".reset($student);

//end
echo "<br>".end($student);

// each
// $student=array(1,"sakshi");
// $each=each($student);
// print_r($each);

//sort
$a=array(23,87,46,98,46);
echo "<pre>";print_r($a);
sort($a);echo "<br>sort=";
print_r($a);

//resort
rsort($a);echo "<br>rsort=";
print_r($a);
 
//asort
asort($a);echo "<br>asort=";
print_r($a);

//merge array
$a=array(1,2,3);
$b=array(4,5,6);
$x=array_merge($a,$b);
echo "<per>"; print_r($x);

//array values
$x=array(
	'no'=>10,
	'name'=>'sakshi',
	'city'=>'surat',
	'email'=>'sakshi@gmail.com'
);
$y=array_values($x);
echo "<pre>";print_r($x);print_r($y);

//array keys
$y=array_keys($x);
echo "<pre>";print_r($x);print_r($y);


//array key exitsts
$y=array_key_exists('name', $x);
echo "<pre>";print_r($y);
// var_dump($y);

//array reverse
$y=array_reverse($x);
echo "<pre>";print_r($y);

//aaray push
array_push($x, 20);
echo "<pre>";print_r($x);

//array pop
array_pop($x);
echo "<pre>";print_r($x);

echo "<br><br><b><u><h2>Miscellaneous function</b></u></h2>";

//include
include("f1.php");
echo "<br>".$name;

//reqire
require("f1.php");
echo "<br>".$name;

//header
// $user='admin';
// $pass='admin';
// if($user=='admin' and $pass=='admin')
// {
// 	header('location:f1.php');
// }else
// {
// 	echo "invalid input";
// }


//define
define("pi",3.14);
echo "<br>".pi;

//constant
// define("pi",3.14);
$x="pi";
echo "<br>x=".$x;
$y=constant("pi");
echo "<br>y=".$y;

//die
// echo "<br>before die";
// die();
// echo "<br>after die";

echo "<br><br><b><u><h2>file handling function</b></u></h2>";
$f=fopen("f1.txt","r");
$data=fread($f, 10);
echo "<br>".$data;

// $f=fopen('f1.txt');

 ?>	
