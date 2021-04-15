<?php

//1
$color = array('white','green','red','blue','black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

//2
echo "<br>";
 $color = array('white','green','red');
 sort($color);
 echo "<ul>";
 foreach($color as $c){
 	echo "<li> $c </li>";
 }
 echo "</ul>";

 //3
echo "<br>";
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

natsort($ceu);

foreach($ceu as $key => $val){
	echo "The capital of $key is $val <br> <br>" ;
}

//4
$x = array(1,2,3,4,5);
array_splice($x,3,1);
print_r($x);

//5

$color = array(4=>'white',6=>'green',11=>'red');
print_r(array_slice($color,0,1));

//6

$json = array(array("Title" => "The Cuckoos Calling","Author"=>"Robert Galbraith","detail"=>array("Publisher" =>"Little Brown")));
echo "<pre>";
print_r(json_encode($json));

print_r($json);

//7

$num_arr = array(1,2,3,4,5);

array_splice($num_arr,3,null,'$');
print_r($num_arr);


//8

$names = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

asort($names);
print_r($names);

ksort($names);
print_r($names);

arsort($names);
print_r($names);

krsort($names);
print_r($names);

//9

?>