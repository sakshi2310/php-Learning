<?php 

 $name=$_REQUEST['u_name'];

 $a[]="sakshi";
 $a[]="vrushti";
 $a[]="dhruvika";
 $a[]="kashish";
 $a[]="chandni";
 $a[]="shruti";
 $a[]="mansi";
 $a[]="foram";
 $a[]="isha";
 $a[]="disha";
 $a[]="mayur";
 $a[]="shubham";
 $a[]="jenish";
 $a[]="vaidik";
 $a[]="nikhil";
 $a[]="juli";
 $a[]="amisha";
 $a[]="anisha";
 $a[]="hirali";
 $a[]="ankit";
 $a[]="mitul";
 $a[]="chirag";
 $a[]="janvi";
 $a[]="dhruvi";
 $a[]="komal";
 $a[]="krinsi";
 $a[]="mitali";
 $a[]="bansi";
 $a[]="krishna";
 $a[]="ridhhi";
 $a[]="surdharshan";
 $a[]="viraj";
 $a[]="riya";
 $a[]="siya";
 $a[]="smit";
 $a[]="darshit";
 $a[]="romil";
 $a[]="srushti";
 $a[]="aayushi";
 $a[]="hemanshi";
 $a[]="madhavi";
 $a[]="yashvi";
 $a[]="mahek";
 $a[]="jinal";
 $a[]="devanshi";
 $a[]="nutan";
 $a[]="neha";
 $a[]="suhani";
 $a[]="somiya";
 $a[]="pradip";
 $a[]="jensi";
 $a[]="shreya";
 $a[]="shrudhha";
 $a[]="piyu";
 $a[]="pranjal";
 $a[]="priyanshi";

 $output="";
 if($name!="")
 {
    foreach($a as $value)
    {
        if(stripos($value, $name)!==false)
        {
            $output.="<li>$value</li>";
        }
    }
    echo $output;

 }else
 {
    echo "no output";
 }
 ?>