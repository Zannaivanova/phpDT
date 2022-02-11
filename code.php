<?php 
//Задача №1
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr['a'] = 5;
$arr['b'] = '$';
$arr['c'] = '@';

var_dump($arr) . '<br>';

//Задача №2
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr['a'] = 3;
$arr['b'] = 3;
$arr['c'] = 3;

var_dump($arr) . '<br>';

//Задача №3
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr['a']++;
$arr['a']++;//3
$arr['b']--;//1
$arr['c']--;//
$arr['c']--;//1

var_dump($arr) . '<br>';

?>