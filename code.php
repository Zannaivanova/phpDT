<?php 
//Задача №1
switch ($num=10) {
		case ($num>=1 and $num<=2)or $num==12:
			echo 'winter';
		break;
		case $num>=3 and $num<=5:
			echo 'spring';
		break;
		case $num>=6 and $num<=8:
			echo 'summer';
		break;
		case $num>=9 and $num<=11:
			echo 'autumn';
		break;
		default:
			echo 'нет такого сезона';
		break;
	}
echo '<br>';
?>