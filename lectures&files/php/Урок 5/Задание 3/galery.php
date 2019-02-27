<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galery</title>
</head>
<body>
<!--
2. На основе кода, изученного на уроке, сделайте простейшую фотогалерею:
	1. Скрипт, который выводит в браузер изображения из определенной папки на сервере
	2. Форма и скрипт загрузки нового изображения в эту папку
3. Решите задачу загрузки файла от пользователя в заданное место на сервере с тем же именем файла, что он имел на компьютере пользователя.
4*. Решите задачу ограничения загрузки, например - только файлов JPEG и PNG
	    -->
<?php
if ($_COOKIE['logged_in'] === 'yes'){
?>
    <form action="/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="picture">
        <button type="submit">Send</button>
    </form>
<?
}else{
    echo 'Загружать картинки могут только авторизованные пользователи';
}
?>


</body>
</html>