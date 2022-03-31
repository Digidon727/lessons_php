<?php
/*
Переменная -это временное хранилище, контейнер, в котором можно хранить какое-либо значение.
Регистрозависимы $name и $Name - разные переменные  

*/

$userName; // Camel case
$user_name; // Snake case


$name = "Jack";
$century =20;
echo $name;
echo 'hello world <br>';
echo 'hello $name <br>';
echo "hello $name  <br>";



echo 'Сумма чисел: 3+2 = '. 3+2 . "<br>";
echo "$name was born in the {$century}th century<br>"; // 20th {переменная}- скобки позволяют выводить переменную так ка надо 


$century =30;
echo "name -", $name, "century - ", $century, "<br>";


echo "Компания 'TomPoM'<br>";
echo 'Компания "TomPom"<br>';
echo "Компания \"TomPom\" \$nam <br><br>"; // знак экранирования -\

?>

<!-- Функция date используется даля вывода даты и времени-->
<div>
    <span>Текущая дата: <?=date('d.m.Y H:i.s') ?></span> 
    <br>
    <br>
</div>


<?php
// Константа - хранит значение, но в отличи от переменной это значение может быть заданно только 1 раз
// define ("название", "значение") объявление константы 
// Константы пишутся только заглавными буквами

define("DB_LOGIN", "root");
echo DB_LOGIN. "<br><br>";


define('COLORS',['red','blue', 'green']);
echo COLORS[1]. "<br>"; // обращение к массиву константы COLORS
echo defined('COLORS'). "<br>";






// Встроенные константы

echo __DIR__,"<br>"; // показывает директорию к файлу index.php
echo __FILE__, "<br>";  // показывает полный путь к файлу index.php
echo __LINE__, "<br>"; //  выводит n строку кода на которой она написана
echo PHP_VERSION, "<br>"; // выводит версию php
error_reporting(E_ALL); // любые ошибки будут попадать в отчет 



$name = "Ivan";
$age = 22;
define("CITY", "Bishkek");
$text = "Меня зовут: ". $name . " мне ". $age. " лет, я из города "  . CITY . "<br>";
echo $text;



?>


<div>
    <h1>Цвет</h1>
    <?php 
    define('COLOR', 'blue');
    ?>
 <p style="color:<?= COLOR?>"><?= $text?></p>
</div>