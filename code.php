<?php 
//Задача №1
$num = 10;
++$num;
++$num;
--$num;

echo $num . '<br>';//11

//Задача №2
$num = 3;

echo ++$num . '<br>';//4

//Задача №3
$num = 3;

echo $num++ . '<br>';//3


//Задача №4
$num = 3;

echo --$num . '<br>';//2

//Задача №5
$num = 3;

echo $num-- . '<br>';//3

//Задача №6
$num1 = 3;
$num2 = ++$num1;

echo $num1 . '<br>';//4
echo $num2 . '<br>';//4


//Задача №7
$num1 = 3;
$num2 = $num1++;

echo $num1 . '<br>';//4
echo $num2 . '<br>';//3

//Задача №8
$num1 = 3;
$num2 = --$num1;

echo $num1 . '<br>';//2
echo $num2 . '<br>';//2

//Задача №9
$num1 = 3;
$num2 = $num1--;

echo $num1 . '<br>';//2
echo $num2 . '<br>';//3


//Задача №10
$num1 = 3;
$num1++;
$num2 = $num1--;

echo $num1++ . '<br>';//3
echo --$num2 . '<br>';//3
?>