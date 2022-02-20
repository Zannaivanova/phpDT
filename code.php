<?php
// Задача 1
$result = 1;

for ($i = 1; $i<=20; $i++) {

		$result = $result * $i;
}
echo $result;

echo '<br>';

// Задача 2
$result = 0;

for ($i = 2; $i<=100; ) {
        $i+=2;
		$result = $result + $i;
}
echo $result;

echo '<br>';

// Задача 3
$result = 0;

for ($i = 1; $i<=99; ) {
        $i+=2;
		$result = $result + $i;
}
echo $result;

?>