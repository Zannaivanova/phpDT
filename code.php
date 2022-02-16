<?php 
//Задача №1
$month = 11;

if (($month>=1 and $month<=2)or $month==12) {
		echo 'winter';
	} 
if ($month>=3 and $month<=5) {
		echo 'spring';
	}  
if ($month>=6 and $month<=8) {
		echo 'summer';
	}
if ($month>=9 and $month<=11) {
		echo 'autumn';
	}  
echo '<br>';

//Задача №2
$str = 'abcde';

if ($str[0]=='a'){
	echo 'первым символом этой строки является буква "a"';
}
echo '<br>';

//Задача №3
$str = '12345';

if ($str[0]==('1' or '2' or '3')){
	echo 'первым символом этого числа является цифра 1, 2 или 3';
}
echo '<br>';

//Задача №4
$str = '777';

echo $str[0]+$str[1]+$str[2];

echo '<br>';

//Задача №5
$str = '631541';

if (($str[0]+ $str[1]+$str[2])==($str[3]+$str[4]+$str[5])) {
		echo 'сумма первых трех цифр равняется сумме вторых трех цифр';
	} else {
		echo 'сумма первых трех цифр НЕ равняется сумме вторых трех цифр';
	};
?>