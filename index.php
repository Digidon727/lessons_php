<?php
require_once('./func.php'); //подключение файлов 
 


echo foo_sum(23, 30); // передаем аргументы
echo foo_sum();
echo "<br>";


$x = 5000;
echo foo_change($x), "<br>";
echo $x,"<br>";

define("LOGIN",'users');

echo show_login(), "<br>";



count_up();
count_up();
count_up();



?>