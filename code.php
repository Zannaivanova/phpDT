<?php
// Задача 1
$arr = ['a', 'b', 'c', 'd', 'e'];
	
	foreach ($arr as $elem) {
		echo $elem . '<br>';
	}

echo '<br>';

// Задача 2
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$res = 0;
	
	foreach ($arr as $elem) {
		$res+=$elem;
	}
echo $res;
echo '<br>';

// Задача 3
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$res = 0;
	
	foreach ($arr as $elem) {
		$res+=$elem;
	}
echo $res/9;
?>