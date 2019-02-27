<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>

<!--        Задание
1. Напишите программу-калькулятор
	a. Форма для ввода двух чисел, выбора знака операции и кнопка "равно"
	b. Данные пусть передаются методом GET из формы (да, можно и так!) на скрипт, который их примет и выведет выражение и его результат
	c*. Попробуйте улучшить программу. Пусть данные отправляются на ту же страницу на PHP, введенные числа останутся в input-ах, а результат появится после кнопки "равно"
-->

<form method="get">
    Введите первое число:<input type="text" name="FirstNumber">
    <br>
    Введите второе число:<input type="text" name="SecondNumber">
    <br>
    Какую операцию провести?<input type="text" name="Operation">
    <br>
    <button type="submit">Получить результат</button>
    <?php
    if ('*' == $_GET[Operation]) {
        $Result =  $_GET['FirstNumber']*$_GET['SecondNumber'];
    } elseif ('+' == $_GET['Operation']){
        $Result = $_GET['FirstNumber']+$_GET['SecondNumber'];
    } elseif ('-' == $_GET[Operation]){
        $Result = $_GET['FirstNumber']-$_GET['SecondNumber'];
    } elseif ('/' == $_GET[Operation]){
        $Result = $_GET['FirstNumber']/$_GET['SecondNumber'];
    }
    if(isset($_GET['FirstNumber']) && isset($_GET['SecondNumber'])) { ?>
        <span class="ans">Ответ <?= $Result ?></span>
    <? } ?>
</form>
</body>
</html>