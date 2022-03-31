<?php
function foo_sum(int $a=10, $b=10): int { // передаем значение по умолчанию / int  говорит что нужно вернуть число/ Внутри функции переменная локальная 
    return $a+$b; // возвращает значение 
}


function foo_change(&$x){ // задать ссылку с помощью & / и он будет видеть глобальную переменную 
    global $x;
    $x.=" рублей" ;
    return $x;
}

function show_login(){
    return LOGIN;
}

function count_up(){
    static $count = 0; // статичное объявление переменной 
    $count++; // увеличение значения переменной static
    echo "счет: $count<br>";

}



?>