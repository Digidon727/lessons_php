<?php
// Типы данных 
// Строки №1
$name = "Ivan";
$name2 = "Иван";

echo gettype($name). "<br>"; // выводит тип переменной 
echo is_string($name), "<br>"; // проверяет является строка типом данных как string


//var_dump() - Выводит информацию о переменной

// echo var_dump($name). "<br>"; 
// echo var_dump($name2). "<br>";
// if(is_string($name)) echo "$name - это строка";

// целое число №2
echo PHP_INT_MAX, "<br>"; // выводит максимальный диапазон значения 
$num = 33;

echo gettype($num);
echo var_dump($num), '<br>';
echo is_int($num); // выводит true или false 

// дробное число 
$a = 3.5;

echo is_float($a);

// булевые значения bool №3
$rain = true;
$snow = false;

echo gettype($rain);
echo var_dump($rain), '<br>';
echo is_int($rain); // выводит true или false 

// тип данных null №4

$var = null;
echo gettype($var), '<br>';
echo var_dump($var), '<br>';
echo is_null($var), '<br>'; // выводит true или false 

//тип данных array-массив №5

$array_number = [1,2,4,55,6,7];
echo $array_number[3], "<br>";

$arr_user =[ 'name' => 'William', 'age' => 33]; //ассоциативный массив
echo $arr_user['name'], "<br>"; // Ключ значение


echo is_array($arr_user), "<br>"; // проверка массив это или нет
echo "<pre>";
print_r($arr_user); // выводит полную информацию о массиве в формате ключ значение 
echo "<pre>";


// тип данных resource №6
// Resource-это переменная содержащая ссылку на какой-либо внешний ресурс

$book = fopen('./dbconnect/text.txt', 'r');
echo is_resource($book), '<br>';



//Object

$mysql = new Mysqli('localhost', 'root', 'root', 'testdb1'); // реальное подключение к БД
echo gettype($mysql), "<br>";
var_dump($mysql);


// неявное приведение типа

$a = 5;
echo gettype($a). "<br>";
$a = $a*1.5;
echo gettype($a). "$a <br>";
$a =$a .'строка';
echo gettype($a). "<br>";


// Принудительно приведение типов данных
$b = 3;
$b = (string) $b;
echo gettype($b). "<br>";

$b = 3;
$b = (float) $b;
echo gettype($b). "<br>";

$b = 3;
$b = (bool) $b;
echo gettype($b). "<br>";


$b = "33";
$b = (int) $b;
echo gettype($b). "<br>";
$c = "33";
$c = (array) $c;
echo gettype($c). "<br>";
print_r($c). "<br><br><br><br><br><br>";

/* 
Создать по одной переменной с типами string/ integer, float, boolean, array, null 
(вывести информацию о переменной функцией var_dump) объяснить самому себе что вывело на экран

*/

$name_string = "Tom";
$number_int = 123;
$number_float = 13.2;
$number_boolean = true;
$number_array = [1,2,3,4,5];
$num_null;

var_dump($name_string). "<br>";
var_dump($number_int). "<br>";
var_dump($number_float). "<br>";
var_dump($number_boolean). "<br>";
var_dump($number_array). "<br>";
var_dump($num_null). "<br>";






?>