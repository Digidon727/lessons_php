<?php
// Типы данных 
// Строки 
$name = "Ivan";
$name2 = "Иван";

echo gettype($name). "<br>"; // выводит тип переменной 
echo is_string($name), "<br>"; // проверяет является строка типом данных как string


//var_dump() - Выводит информацию о переменной

// echo var_dump($name). "<br>"; 
// echo var_dump($name2). "<br>";
// if(is_string($name)) echo "$name - это строка";

// целое число
echo PHP_INT_MAX, "<br>"; // выводит максимальный диапазон значения 
$num = 33;

echo gettype($num);
echo var_dump($num), '<br>';
echo is_int($num); // выводит true или false 

// дробное число
$a = 3.5;

echo is_float($a);

// булевые значения 
$rain = true;
$snow = false;

echo gettype($rain);
echo var_dump($rain), '<br>';
echo is_int($rain); // выводит true или false 

// тип данных null

$var = null;
echo gettype($var);
echo var_dump($var), '<br>';
echo is_null($var); // выводит true или false 



?>