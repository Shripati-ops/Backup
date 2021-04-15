<?php
echo "<pre>";
echo "<br>";
echo "An Example of Array Combine ";
$color = array('white','green','red','blue','black');
$col_index = array('1','2','3','4','5');

print_r(array_combine($col_index,$color));

echo "<br>";
echo "An example of Array Columns ";

$tdArray = array(
     array('First Name' => 'Shripati' ,
     'Middle name' => 'Vijayaraghavan',
	     'Last Name' => 'Acharya'),

	array('First Name' => 'Naruto' ,
	      'Middle name' => 'Minato',
	      'Last Name' => 'Uzumaki'),

	array('First Name' => 'Boruto' ,
	      'Middle name' => 'Naruto',
	      'Last Name' => 'Uzumaki'),

);
print_r(array_column($tdArray,'First Name'));

echo "<br>";
echo "An example of Array Fill ";
$empty = array();
print_r(array_fill(1,5,'Full'));

echo "<br>";
echo "An example of Array Count values ";
print_r(array_count_values($col_index));

echo "<br>";
echo "An example of Array chunk ";
print_r(array_chunk($tdArray,2,true));

echo "<br>";
echo "An example of Array diff assoc ";
$array1 = array('A'=>1,'B'=>2,'C'=>3);
$array2 = array('B'=>2, 'E'=>5, 'F'=>4);

print_r(array_diff_assoc($array1,$array2));

echo "<br>";
echo "An example of Array diff Keys ";

$array1 = array('A'=>1,'B'=>2,'C'=>3);
$array2 = array('B'=>2, 'E'=>5 , 'F' => 5);

print_r(array_diff_key($array1,$array2));

echo "<br>";
echo "An example of Array diff uassoc ";
function compareindx($a,$b){
	if($a == $b){
		return 0;
	}
	else{
		return ($a > $b)? 1:-1;
	}
}

print_r(array_diff_uassoc($array1,$array2,"compareindx"));

echo "<br>";
echo "An example of Array diff ukeys ";

function comparekeys($key1,$key2){
	if($key1 == $key2){
		return 0;
	}else{
		return($key1 > $key2)? 1:-1;
	}
}

print_r(array_diff_ukey($array1,$array2,"comparekeys"));

echo "<br>";
echo "An example of Array fill keys ";

$emptyKeys = array(1,2,3,4,5,6);
print_r(array_fill_keys($emptyKeys,"Number"));

echo "<br>";
echo "An example of Array filter ";

function odd($num){
	if($num % 2 != 0){
		return 1;
	}
	else{
		return 0;
	}
}
$arr = array(1,2,3,4,5,6,7,8,9,10);
print_r(array_filter($arr,"odd"));

echo "<br>";
echo "An example of array Flip ";

print_r(array_flip($emptyKeys));

echo "<br>";
echo "An example of array_key_exists ";

$array_keys = array('First_name' => 'XYZ', 'Second_Name' => 'YXZ');
if(array_key_exists('First_name',$array_keys) == true){
	print_r("Key exists");
}
else{
	print_r("Key does not exist");
}
echo "<br>";
echo "An example of Array key_first ";
print_r(array_key_first($array_keys));

echo "<br>";
echo "An example of Intersect_assoc ";
$arr = array('1' =>1,'2' => 2,'3' => 3,'6' => 6,'5' => 5);
$arr1 = array('6' => 6,'7' => 7,'8' => 8,'5' => 5,'10' => 10);

print_r(array_intersect_assoc($arr,$arr1));

echo "<br>";
echo "An example of Intersect Keys ";

print_r(array_intersect_key($arr,$arr1));


echo "<br>";
echo "An example of Intersect uassoc ";

function intersect($a,$b){
	if($a === $b){
		return 0;
	}
	else{
		return($a > $b)? 1: -1;
	}
}
print_r(array_intersect_uassoc($arr,$arr1,"intersect"));

echo "<br>";
echo "An example of Intersect Ukeys ";

function key_intersect($key1,$key2){
	if($key1 == $key2){
		return 0;
	}
	else{
		return($key1 > $key2)? 1: -1;
	}
}
print_r(array_intersect_ukey($arr,$arr1,"key_intersect"));

echo "<br>";
echo "An example of Array_key_last ";

print_r(array_key_last($array_keys));

echo "<br>";
echo "An example of Array_map ";

function change_values($n){
	 $m = $n + 1;
	 return $m;
}

print_r(array_map("change_values",$arr));

echo "<br>";
echo "An example of Array merge Recursively ";

$ar = array("name" => "Shripati","Lname" => "Acharya",10);
$ar1 = array("name" => "Shrindhi", "Lname"=> "Ackerman",20);

print_r(array_merge_recursive($ar,$ar1));

echo "<br>";
echo "An example of Array merge ";

print_r(array_merge($ar,$ar1));

echo "<br>";
echo "An example of Array multiSort ";

$ar = array(
	    array(1,3,5,7,2,3),
	    array(4,3,1,4,2,1)
  );

 array_multisort( $ar[0], SORT_DESC ,
	 $ar[1],SORT_ASC);

 print_r($ar[0]);
 print_r($ar[1]);

 echo "<br>";
 echo "An example of Array Pad ";
 $new_arr = array('1','2','3','4');
 print_r(array_pad($new_arr,10,'6'));

 echo "<br>";
 echo "An example of Array Pop ";
 $new_arr = array('Apple',1,3,5,'Banana');
 print_r("Popped element is ".array_pop($new_arr));

 echo "<br>";
 echo "An example of Array Product ";

 $product_arr = array(1,2,3,4,5,6);
 print_r(array_product($product_arr));

 echo "<br>";
 echo "An example of Array Push ";

 $push_arr = array("1","2","3","4",5);

 array_push($push_arr, 6,7,8,9,10);
 print_r($push_arr);

 echo "<br>";
 echo "An example of Array_rand ";

 $menu = array(1,2,3,5,6,7);
 $keys = array_rand($menu,3);

 echo $menu[$keys[0]]. "<br>";
 echo $menu[$keys[1]]. "<br>";
 echo $menu[$keys[2]]. "<br>";


 echo "<br>";
 echo "An example of array_reduce ";

 $array = array(1,2,3,4,5,6);

 function sum($sum,$n){
 	$sum += $n;
 	return $sum;
 }

 function product($prod,$n){
 	$prod *= $n;
 	return $prod;
 }



 var_dump(array_reduce($array,'product',4));
 var_dump($array);


  echo "<br>";
  echo "An example of Array replace Recursive ";

  $base = array('name' =>array('Shripati','Shrinidhi','Dhaval'),'Foods'=>array('Chips','VadaPav','Samosa'));
  $replacement = array('name' => array('Rushi'),'Foods'=> array('Fruits'));

  print_r(array_replace_recursive($base,$replacement));

  echo "<br>";
  echo "An example of array_replace";

  $base = array('a','b','c','d','e');
  $replacement = array('a','d','c','b','e');

  print_r(array_replace($base,$replacement));
  echo "<br>";
  echo "An example of array_reverse ";
  $array = array("1","2","3","4","5");
  print_r(array_reverse($array));


  // In-depth example of array_reduce

echo"<br>";
echo "In-depth example of Array reduce ";

$ar = array(array("menu_id" => "1",
            "menu_name" => "Products",
            "submenu_name" => "Add",
            "submenu_link" => "clients/add"),
	array('menu_id' => "2",
	      'menu_name' => "Clients",
	      'submenu_name' => "List",
	      'submenu_link' => "clients"));

$menu = array_reduce($ar,function($result,$item){
	$index = $item['menu_name'];
	if(!isset($result[$index])){
		$result[$index] = [
			'menu_id' => $item['menu_id'],
			'menu_name' => $item['menu_name'],
			'submenu' => []
		];
		$result[$index]['submenu'] = [
		   'submenu_name' => $item['submenu_name'],
		   'submenu_link' => $item['submenu_link']
		];
	}
	return $result;
},[]);
echo "<pre>";
var_dump(json_encode($menu));
echo "</pre>";
echo "<br>";
echo "An example of Array Search ";

print_r(array_search('Clients',array_column($menu,'menu_name')));

echo "<br>";
echo "An example of array_shift ";

$arr = array(1,2,3,4,5,6,7,8,9);
array_shift($arr);
print_r($arr);

echo "<br>";
echo "An example of Array Slice ";

print_r(array_slice($arr,0,4,true));

echo "<br>";
echo "An example of Array Splice ";
print_r(array_splice($arr,2,count($arr),4));

echo "<br>";
echo "An example of Array sum ";
$arr2 = array(1,2,3,4,5,6,7,8,9);
print_r(array_sum($arr2));

echo "<br>";
echo "An example of Array_udiff_assoc ";



class cr {
	private $priv_member;
	function cr($val)
	{
		$this->priv_member = $val;
	}

	static function comp_func_cr($a, $b)
	{
		if ($a->priv_member === $b->priv_member) return 0;
		return ($a->priv_member > $b->priv_member)? 1:-1;
	}

	static function comp_func_keys($key1,$key2){
		if($key1 === $key2){
			return 0;
		}
		return ($key1 > $key2)? 1 : -1;
	}
}

$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1=> new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1=> new cr(4), 2 => new cr(-15),);

$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"), array("cr","comp_func_keys"));

echo "<br>";
echo "An example of Array Udiff Uassoc";
$result1 = array_udiff_uassoc($a, $b, array("cr", "comp_func_cr"), array("cr","comp_func_keys"));
print_r($result1);

echo "<br>";
echo "An example of Array_Uintersect_Assoc ";

$inter_arr = array('a'=> 'Blue', 'b' => 'Black','c'=> 'Green');
$inter_arr1 = array('a'=>'Blue','b'=>'Purple', 'c'=> 'Green');
function compare($a,$b){
	if($a === $b){
		return 0;
	}
	else{
		return($a > $b)? 1: -1;
	}
}
print_r(array_uintersect_assoc($inter_arr,$inter_arr1,"compare"));

echo "<br>";
echo "An example of Array_Uintersect_Uassoc";

print_r(array_uintersect_uassoc($inter_arr,$inter_arr1,"compare","compare"));

echo "<br>";
echo "An example of Array_unique ";

$unique = array('Blue','Black','Green','Green','Black','Blue');

print_r(array_unique($unique));


echo "<br>";
echo "An example of Array_unshift";

$queue = array("orange","banana");

array_unshift($queue,"Apple");
print_r($queue);

echo "<br>";
echo "An example of array_values";

print_r(array_values($queue));

echo "<br>";
echo "An example of arsort";

arsort($queue);
print_r($queue);

echo "<br>";
echo "An example of asort";

asort($queue);
print_r($queue);

echo "<br>";
echo "An example of compact";
echo "<pre>";
$events = array('Comic-con','Coder-con','Tech-con');
$cities = array('Ahmedabad','Mumbai','Chennai');
$states = array('Gujarat','Maharashtra','Tamilnadu');
$location = array("cities","states");
$result = compact("events",$location);
print_r($result);
echo"</pre>";

echo "<br>";
echo "An example of Count ";

echo "<pre>";

print_r(count($result));
echo "</pre>";

echo "<br>";
echo "An example of current, next, prev, end ";

echo "<pre>";
$array3 = array(1,2,3,4,5,6,7,8,9,10);
$pos = current($array3);
$next_pos = next($array3);
$prev_pos = prev($array3);
$end_pos = end($array3);
echo $pos. " ".$prev_pos." ".$next_pos." ". $end_pos;

echo "<br>";
echo "An example of krsort";
echo "<pre>";
$key_ar = array('e'=>1, 'c' => 2, 'd' =>3, 'a'=> 4 , 'b' => 5);
krsort($key_ar);

foreach($key_ar as $l=>$num){
	echo "$l = $num ";
}
echo"</pre>";

echo "<br>";
echo "An example of ksort";
echo "<pre>";

ksort($key_ar);
foreach($key_ar as $l=> $num){
	echo "$l = $num ";
}
echo "</pre>";

echo "<br>";
echo "An example of list";
echo "<pre>";
$info  = array(1,2,3);
list($one,$two,$three) = $info ;
echo "$one is smaller than $two and even smaller than $three";

echo "<br>";
$array1 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

natcasesort($array1);
print_r($array1);


echo "<br>";
echo "An example of natsort ";

$array1 = array("img12.png", "img10.png", "img2.png", "img1.png");
natsort($array1);
print_r($array1);
echo "</pre>";


?>