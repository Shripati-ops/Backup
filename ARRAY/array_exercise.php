<?php
//1
echo "<pre>";
echo "<br>";
$a = array(0,1,2,3,4);

$num = array_search(3,$a);
echo "$num";

//2

$akey = array("zero" => 0, "one" => 1, "two" => 2, "three" => 3, "four" => 4);

 if(array_key_exists("three",$akey)){
 	$num1 = $akey['three'];
 }

echo " $num1";

 //3

$a = array(array(0,1),array(2,array(3)));
echo " ";
print_r($a[1][1]);

//4
$a3= array("a"=>array("b"=>0,"c"=>1),"b"=>array("e"=>2,"o"=>array("b"=>3)));

print_r($a3['b']['o']['b']);
//5
$str = "a,b,c,d,e,f";
$str_arr = explode(',',$str);
print_r($str_arr);

//6

$new_array = array();
foreach($str_arr as $e){
	$new_array[$e] = $e;
}
print_r($new_array);

//7

$keys = array(
	"field1" => "first",
	"field2" => "second",
	"field3" => "third"
);

$values = array(
 "field1value" => "dinosaur",
	"field2value" => "pig",
	"field3value" => "platypus"
);
$new = array();
//foreach(array(1,2,3) as $index){
//	$new[$keys["field$index"]] = $values["field".$index."value"];
//}
print_r($new);
$new_array =  array_combine(array_values($keys),array_values($values));

print_r($new_array);
//8
$transactions = array(
	array(
		"debit"=>2,
		"credit"=>3
	),
	array(
		"debit"=>15,
		"credit"=>14
	)
);

$new_transaction = array();

foreach($transactions as $t){
	$new_t = $t;
	$new_t["amount"] = abs($t["debit"] - $t["credit"]);
	$new_transaction[] = $new_t;
}
$transactions = $new_transaction;

print_r($transactions);
//9
$a = array(0,1,2,3,4,5,6);
$sum = array_sum($a);

echo "$sum";
?>