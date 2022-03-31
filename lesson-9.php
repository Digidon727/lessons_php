<?php
// математические функции
echo abs(-20), "<br>";
echo sqrt(9), "<br>";
echo pow(2,5), "<br>";
echo M_PI, "<br>";
echo M_E, "<br>";

echo round(122,-1), "<br>";
echo floor(22.3), "<br>"; // округляет в большую сторону
echo ceil(33.2), "<br>"; // округляет в большую сторону 
echo mt_rand(1,1000), "<br>";
echo min(5,10,-4,5), "<br>";
echo max(5,6,10,2), "<br>";

$arr = [1,2,3,4,5,6,7,];
echo max($arr), "<br>";


echo  base_convert(1543, 10,2), "<br>"; // перевод из 10 системы в 2 систему 

// функция работа со строками
$str ='hello';
$str2 = "Приве";
echo strlen($str), "<br>"; // выводит длину строки латинских букв
echo mb_strlen($str2), "<br>"; // выводит длину строки русских слов 


echo ucfirst("london hello"), "<br>"; // делает 1 букву заглавной предложения 
echo lcfirst("London"), "<br>"; // делает заглавную букву прописной

echo ucwords("ha ha ha "), "<br>"; // каждое слово каждую букву возводит в верхний регистр 
echo strtoupper("hello"), "<br>";
echo strtolower("HELLO"), "<br>";

$date = "31.12.2031";
echo str_replace(".", "-", $date), "<br>"; // делает замену выбранных символов 
echo substr_replace($date, '2022', -4,4), "<br>"; // меняет 

echo trim('   Lin      '), "<br>"; // Убирает пробелы
echo trim('@!!!lin!!!', '!@'), '<br>'; // убирает указанные символы 
echo strrev('boon'), '<br>'; // выводит слово в обратном 

echo strip_tags('<p>просто текст </p>'), '<br>'; // удаляет все теги HTML 
echo htmlspecialchars("<p>просто текст </p>",ENT_QUOTES), '<br>'; // Воспринимает теги html как сущности 

// хеширование данных

echo md5("123456"), "<br>";
echo password_hash("12345", PASSWORD_DEFAULT); // 255 60-160 количество символов 
 
?>

