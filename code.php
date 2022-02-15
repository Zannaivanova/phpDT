<?php 
//Задача №1
$day = 25;
if ($day<=10) {
		echo '1я декада';
	} 
if ($day>10 and $day<=20) {
		echo '2я декада';
	} 
if ($day>20 and $day<=31) {
		echo '3я декада';
	} 
echo '<br>';

//Задача №2
$day = 15;
if ($day<=10) {
		echo '1я декада';
	} elseif ($day>10 and $day<=20) {
		echo '2я декада';
	} elseif ($day>20 and $day<=31) {
		echo '3я декада';
	} 
echo '<br>';


//Задача №3
$day = 35;
if ($day<=10) {
		echo '1я декада';
	} elseif ($day>10 and $day<=20) {
		echo '2я декада';
	} elseif ($day>20 and $day<=31) {
		echo '3я декада';
	} else {
		echo 'ошибка, что-то другое';
	} 
echo '<br>';


//Задача №4
$age = '10';

if ($age>=10 and $age<=99) {
	if (($age[0]+$age[1])<=9) {
			echo 'сумма цифр однозначна';
	  } else {
		 	echo 'сумма цифр двузначна';
		 }
  } else {
	 echo 'число меньше 10 или больше 99';
  }

?>