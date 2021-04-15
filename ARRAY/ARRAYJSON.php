<?php


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

print_r($menu);
?>