<?php
// Задача 1
$arr = [2,4,1,5,7,9,2, 0,8,4];

foreach ($arr as $elem){
	if ($elem==0)
        break;
	else
	    echo $elem . "\n";
}

echo '<br>';

// Задача 2
$arr = [2,4,1,0,8,4,-5,7,-9,2];
$sum = 0;

foreach ($arr as $elem){
	if ($elem < 0)
		break;
	else 
		$sum +=$elem;	
}
echo $sum;
echo '<br>';


// Задача 3
$arr = [2,4,1,0,8,4,3,7,-9,2];
// $i = 0; // Создаём переменную и присваиваем ей ноль
 
 foreach ($arr as $elem){
	if ($elem==3)
        break;
	else
	    echo $elem . "\n";}
echo '<br>';

// Задача 4
$i=0;
$n=0;

while (true) {
   $n++;
   $i=$i+$n;
   echo $i. "\n";
  if($i>=100){break;}
}
echo '<br>';
echo $n;
?>