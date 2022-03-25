<?php
$rain = 0;
if($rain){
    echo "Идет дождь <br>";
    if($rain>3)echo "Идет ливень<br>";
}else{
    echo "Погода ясная ";
}


echo $rain ? "идет дождь":"Погода ясная<br>";

$price = 190;
$discount = $price >= 100 ? 30 :($price >=50 ? 15:10);
echo $discount, "%<br>";




//Условие 

// ISSET - определяет была ли установлена переменная значением отличным от NULL (существует ли она)

// EMPTY - "", false, "0", '0', null



// сокращенная структура условного оператора if
$user = 'dark';
if (isset($user)):
    echo "hello $user";
    unset($user); // Удаляет пользователя в этом моменте   
endif;




$_SESSION['user'] = 'dark';
$user = $_SESSION['user']??0; //проверяет если такой пользователе есть то все ок иначе помести значение 0

if(empty($user)){
    echo "Гость";
}else echo "$user". "<br>";




$lang = $_GET['lang']??"ru";
switch ($lang){
    case 'en':
        echo "Это английский";
    break;
    case 'ed':
        echo "Это немецкий";
    break;
    case 'ru':
        echo "Это русский";
    break;
    default:
        echo "не понятный язык";
    break;
}
    
?>

<div>
<a href="?lang=en">английский язык</a>
<a href="?lang=ed">немецкий язык</a>
<a href="?lang=ru">русский язык</a>
</div>