<?php 
//Задача №1
$str ='abcde';

echo $str[0] . '<br>';
echo $str[2] . '<br>';
echo $str[4]. '<br>'. '<br>';

//Задача №2
$str ='abcde';

echo $str[4];
echo $str[3];
echo $str[2];
echo $str[1];
echo $str[0]. '<br>'. '<br>';


//Задача №3
$str ='abcde';
$num = 0;

echo $str[$num]  . '<br>'. '<br>'. '<br>';


//Задача №4
$str ='qwerty';
$last = strlen($str) - 1;

echo $str[$last] . '<br>';

//Задача №5
$str ='qwerty';
$last = strlen($str) - 2;

echo $str[$last] . '<br>';

//Задача №6
$str ='qwerty';
$last = strlen($str) - 3;

echo $str[$last]  . '<br>'. '<br>'. '<br>';


//Задача №7
$str ='12345';

echo $str[0]+ $str[1]+ $str[2]+ $str[3]+ $str[4] . '<br>'. '<br>'. '<br>';

//Задача №8
$num = 12345;
$str = (string)$num;

echo $str[0]+ $str[1]+ $str[2]+ $str[3]+ $str[4] . '<br>';

//Задача №9
$num = 12345;
$str = (string)$num;

echo $str[0]* $str[1]* $str[2]* $str[3]* $str[4] . '<br>';

//Задача №10
$num = 12345;
$str = (string)$num;
	
	echo $str[4];
	echo $str[3];
	echo $str[2];
	echo $str[1];
	echo $str[0];

?>