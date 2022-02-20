<?php
// Задача 1
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
	
	foreach ($arr as $key => $elem) {
		echo $key . ' - ' . $elem . '<br>';
	}

echo '<br>';

// Задача 2
$arr = ['user1'=>30, 'user2'=>32, 'user3'=>33];
	
	foreach ($arr as $key => $elem) {
		echo $key . ' - возраст ' . $elem . ' лет' . '<br>';
	}

echo '<br>';
?>