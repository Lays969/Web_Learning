<?php

// Если cookie пустая, то ничего не делаем.
If (!isset($_COOKIE['ClientName'])){
    setcookie('ClientName', null);
}

if (isset($_COOKIE['logged_in'])){
    if ($_COOKIE['logged_in'] === 'yes'){
        echo 'Добро пожаловать на наш сайт!';
    }
}

?>

<!doctype html>
<html lang="ru">


<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1><a href="login.php">Авторизация</a></h1>
<h1><a href="guestbook.php">Отзывы</a></h1>
<h1><a href="galery.php">Галерея</a></h1>


</body>
</html>