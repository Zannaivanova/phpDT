<?php
// Задача 1
$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem % 2 == 1) {
			echo $elem. "\n";
		}
	}

echo '<br>';

// Задача 2
$arr = [2, 5, 9, 15, 1, 4];
$elem = 3;

	foreach ($arr as $elem) {
		if ($elem<=10) {
			echo $elem . "\n";
		}
	}

echo '<br>';

// Задача 3
$arr = [-8, 3, -10, 1, 5, 4, -7];
$elem = -10;
	
	foreach ($arr as $elem) {
		if ($elem>=0) {
			echo $elem . "\n";
		}
	}

echo '<br>';

 // Задача 4
$arr = [10, 20, 30, 50, 235, 3000];

	foreach ($arr as $elem) {
		if ((int)$elem = (string)$elem and $elem[0]==1||$elem[0]==2||$elem[0]==5) {
			echo $elem . "\n";
		}
	}

echo '<br>';

// Задача 5
$arr = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб','Вс'];

	foreach ($arr as $elem) {
		if ($elem=='Сб'||$elem=='Вс') {
			echo   '<b>' .$elem. '</b>'. "\n";
		} else {
		echo   $elem . "\n";}
	}

echo '<br>';

// Задача 6
$arr = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб','Вс'];

	foreach ($arr as $elem) {
		if ($day=$elem and $elem=='Вт') {
			echo   '<i>' . $day . '</i>'. "\n";
		} else {
		echo   $elem . "\n";}
	}
?>