<?php 
//Задача №1
$min = 25;

if ($min>=0 and $min<=19) {
		echo '1 треть';
	} 
if ($min>=20 and $min<=39) {
		echo '2 треть';
	}  
if ($min>=40 and $min<=59) {
		echo '3 треть';
	}  
echo '<br>';

//Задача №2
$arr = '256';

if (strlen($arr)==3) {
		echo $arr[0]+$arr[1]+$arr[2];
	} else {
		echo 'в массиве НЕ 3 элемента';
	}  
echo '<br>';

//Задача №3
$a = 60;
$b = 20;
	
if ($a % $b === 0) {
		echo 'четное';
} else {
		echo 'нечетное';
}
echo '<br>';

//Задача №4
$a = 61;
$b = 3;
$rest = $a % $b;
	
	if ($rest === 0) {
		echo 'делится на 3';
} else {
		echo 'не делится на 3';
}
?>