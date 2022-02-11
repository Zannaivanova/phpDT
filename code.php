<?php 
//Задача №1
$arr = ['a', 'b', 'c'];
echo $arr . '<br>';//Warning: Array to string conversion in /home/n/Документы/123/phpDT/code.php on line 5
var_dump($arr);

//Задача №1
$arr = array('1','2','3');
foreach ($arr as $value) {
    echo $value, "\n";
}
var_dump($arr);

//Задача №2
$arr = ['a','b','c'];

echo $arr[0];
echo $arr[1];
echo $arr[2]. '<br>';


//Задача №3
$arr = ['a','b','c','d'];

echo $arr[0] . '+'. $arr[1] . '+'. $arr[2] . '+'. $arr[3] . '<br>';


//Задача №4s
$arr = [1,2,3];

echo ($arr[0]+$arr[1]+$arr[2]) . '<br>';
?>