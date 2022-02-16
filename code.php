<?php
// Задача 1
$user = ['name' => 'john', 'age' => 30];

$name = $user['name'] ?? 'unknown';


// Задача 2
$result = $user['name'] ?? $user['surname'] ?? 'empty';
?>