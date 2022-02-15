<?php 
//Задача №1
$test = 0;

 if (isset($test)) {
		echo '+';
	} else {
		echo '-';
	}
echo '<br>';//+

//Задача №2
$test = null;

 if (!isset($test)) {
		echo '+';
	} else {
		echo '-';
	}
echo '<br>';//+

//Задача №3
$test = null;

 if (isset($test)) {
		echo '+';
	} else {
		echo '-';
	}
echo '<br>';//-

//Задача №4
 if (!isset($test)) {
		echo '+';
	} else {
		echo '-';
	}
echo '<br>';//+

//Задача №5
$test = '';

 if (isset($test)) {
		echo '+';
	} else {
		echo '-';
	}
echo '<br>';//+

//Задача №6
 if (!isset($test)) {
		echo '+';
	} else {
		echo '-';
	}
echo '<br>';//-

//Задача №7
$test = false;

 if (isset($test)) {
		echo '+';
	} else {
		echo '-';
	}
echo '<br>';//+

//Задача №8
//$arr = [1, 2, 3, 4, 5];

 //if (isset($arr[])) {
//		echo '+';
//	} else {
//		echo '-'};//¯\_(ツ)_/¯
?>