<?php
function foo_sum(int $a=10, $b=10): int { // передаем значение по умолчанию / int  говорит что нужно вернуть число/ Внутри функции переменная локальная 
    return $a+$b; // возвращает значение 
}
/*
echo foo_sum(20, 30); // передаем аргументы
echo foo_sum();
echo "<br>";

function foo_change(&$x){ // задать ссылку с помощью & / и он будет видеть глобальную переменную 
    global $x;
    $x.=" рублей" ;
    return $x;
}

$x = 500;
echo foo_change($x), "<br>";
echo $x,"<br>";

define("LOGIN",'admin');

function show_login(){
    return LOGIN;
}

echo show_login(), "<br>";


function count_up(){
    static $count = 0; // статичное объявление переменной 
    $count++; // увеличение значения переменной static
    echo "счет: $count<br>";

}

count_up();
count_up();
count_up();

*/
// Анонимные функции 
$arr =[10,15,20,30];
$average = function(array $arr){
    return array_sum($arr)/count($arr);
};

echo "Среднее значение:". $average($arr). "<br>";


// рекурсия функций 
function factirial($a){
    if ($a == 0) return 1; // если факториал равен 0 до вывод 1 и дальше год не выполняется 
    return $a*factirial($a-1); // вызывает функцию внутри себя
}

echo factirial(3);
?>