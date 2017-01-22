<?php
header('Content-Type: text/html; charset=utf-8');


$str = "a";
$str2 = "b";
$str3 = "c";

 
    

    $result = exec("python test.py $str $str1 $str2");




echo $result;

$result = str_replace('[','',$result);
$result = str_replace(']','',$result);	
$result = str_replace('\'','',$result);
$visit_list = explode("," , $result);

echo $visit_list[0];
echo "<br/>"; 
echo $visit_list[1];
echo "<br/>"; 
echo $visit_list[2];
echo "<br/>"; 
echo $visit_list[3];
echo "<br/>"; 
echo $visit_list[4];
echo "<br/>"; 
echo $visit_list[5];
echo "<br/>"; 
echo $visit_list[6];
echo "<br/>"; 
echo $visit_list[7];
echo "<br/>"; 
echo $visit_list[8];
echo "<br/>"; 
echo $visit_list[9];
?>



