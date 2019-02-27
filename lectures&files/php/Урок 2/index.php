<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-2</title>
</head>
<body>

<h1>Подсчет уравнения</h1>

<?php
/* Задаем коэффициенты уравнения */
/* Составьте функцию вычисления дискриминанта квадратного уравнения. Покройте ее тестами.
Используя эту функцию, напишите программу, которая решает квадратное уравнение. Оформите красивый вывод решения. */

$x = 1;
$y = 4;
$c = 2;


include __DIR__ . "/discriminant.php";

$value = descry(1, 4, 2);

switch ($value){
    case 2:
        $x1 = (-$y+(sqrt($y*$y-4*$x*$c)))/(2*$x);
        $x2 = (-$y+(sqrt($y*$y+4*$x*$c)))/(2*$x);
        break;
    case 1:
        $x1 = (-$y/(2*$x));
        $x2 = 'нет ответа';
        break;
    case 0:
        $x1 = 0.0;
        break;
}

if ($x1 === 0.0) {
    echo 'Подобраны ошибочные коэффициенты - дискриминант ниже 0';
}   elseif ($x2 == 'нет ответа') {
    echo 'В уравнении только 1 корень, он равен = ' . $x1;
}   else {
    echo 'Первый корнь = ' . $x1 . ', второй корень = ' . $x2;
}
?>

<br>
<br>

<?php
/*  Пробую 4 задание  */
/*   Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь угадать по имени (null - если угадать не удалось).
Вам придется самостоятельно найти нужные вам строковые функции. Начните с написания тестов для функции.  */

$Name = 'С';

if (strpos($Name, я)== (strlen($Name)-2)){
    echo 'Предположительно, это женское имя (если не Женя)';
}elseif (strpos($Name, а)== (strlen($Name)-2)){
    echo 'Если имя не Саша, то, наверно, это женское имя';
} else{
    echo 'Есть вероятность, что это мужское имя';
}

echo strlen ($Name);
echo strrchr ($Name, а);
echo strrpos ($Name, а);


?>

<hr>

</body>
</html>