<?php
//Массив- это набор однотипных данных в упорядоченном виде
/*
$month = [1=>"январь","февраль","март", "апрель"]; // список 
echo $month[4];
$month[]= "май";
$month[2]= "день";
unset($month[5]); // удаляет элемент в массиве

echo "<pre>";
print_r($month);
echo "</pre>";


$num = [12,3,4,5,12,1,3,21];
sort($num); // сортирует массив
$num2=array_unique($num); // удаляет повторяющее элементы массива 
foreach ($num2 as $key=>$v) {
    echo "Ключ-". $key. " ". $v . "<br>";
}

echo "Вариант 2 сортировки массива";
foreach (array_unique($num) as $key => $v) {
    echo "Ключ-". $key. " ". $v . "<br>";
}

echo "сумма-->" . array_sum($num). "<br>";
echo "произведение-->" . array_product($num). "<br>";
echo "количество элементов-->" . count($num). "<br>";
echo "поиск элемента в массиве-->" . in_array("5",$num). "<br>";

$num = [12,3,4,5,12,1,3,21];
echo"<pre>";
 print_r(array_chunk($num,2));   //Разбивает массив на подмассивы (не меняет исходный массив)
 print_r(array_slice($num,0,5)); //Вырезать из массива элементы  (не меняет исходный массив)
 array_splice($num,0,3,['a','b','c']);//меняет элементы внутри массива
 print_r($num);
 echo "</pre>";


 echo "Ассоциативный массив <br>";

 $fruit = ['яблоко' =>10, 'дыня' => 5, 'арбуз'=>12,'дыня' => 8,];
 asort($fruit); // сортирует только ассоциативный массив
 foreach ($fruit as $key => $v) {
        if($v > 6)
        echo"$key количество $v шт. <br>";
        
 }

 



$food = [
    'fruits'=>['kiwi', 'banana', 'apple'],
    'veggie'=>['tomato', 'potato', 'pea'],
 ];
echo $food['fruits'][1],"<br>";  //банан
echo count($food, 1),"<br>";  //для рекурсии

foreach ($food as $key=>$value){
   echo $key, ": <br>";
   foreach ($value as $k=>$v){
   echo "$k - ",$v,"<br>";
   }
}



//СЛИЯНИЕ МАССИВОВ  ==========================
 
$arr1 = range(1,10);// задает массив в определенной диапазоне 
$arr2 = range(1,10,2);

foreach ($arr1 as $value){
    echo $value," ";
}
echo "<br>";
foreach ($arr2 as $value){
    echo $value," ";
}
echo "<br>";
$sum_arr = array_merge($arr1,$arr2); // объединяет массив только для нумерованных ключей.


foreach ($sum_arr as $value){
    echo $value," ";
}
echo "<br>";

print_r(array_intersect($arr1,$arr2)); // вычисляет пересечения массивов (возвращает массив) ищет похожие элементы массива 
echo"<br>";
print_r(array_diff($arr1,$arr2));    // сравнивает массив 1 со вторым (возвращает массив)

//ПРЕОБРАЗОВАНИЕ МАССИВА в строку и обратно  ====================
 
$str = 'пн вт ср чт пт сб вс';
$arr = explode(' ', $str); // создать массив из строки
echo "<pre>";
print_r($arr);
echo "</pre>";

$color = ['красный', 'зеленый', 'синий'];
list($red,$green,$blue)=$color; //Присваиваем переменным значения массива
echo $red,$green,$blue, "<br>";
$string = implode('|', $color); // преобразовать массив в строку
var_dump($string);
echo "<br>";
*/

//ДЗ

// №1
$arr = [
    ['name'=>'iphon','price'=>30000],
    ['name'=>'macbook','price'=>130000],
    ['name'=>'macpro','price'=>430000]
];

//-Увеличить стоимость товара на 30%
//-Вывести весь товар: цена iphone = 39000р.; (с помощью цикла foreach)


foreach ($arr as $key => $value) {
    $result = $value['price'] * 30/100;
    $result2 = $result + $value['price'];
    echo "цена ". $value['name']. " = ". $result2. "<br>";
}

/*
$food = [
    'fruits'=>['kiwi', 'banana', 'apple'],
    'veggie'=>['tomato', 'potato', 'pea'],
 ];
echo $food['fruits'][1],"<br>";  //банан
echo count($food, 1),"<br>";  //для рекурсии

foreach ($food as $key=>$value){
   echo $key, ": <br>";
   foreach ($value as $k=>$v){
   echo "$k - ",$v,"<br>";
   }
}

// №2

$array_num = range(1,100);
echo array_sum($array_num). "<br>";


// №3

$array_str = range('a','z');
echo implode(" ", $array_str);
*/

?>