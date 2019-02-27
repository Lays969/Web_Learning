<?php
/* Считываем файл функцией readguest */
$FileLocation = __DIR__ . '/commentary.txt';
$Res = fopen($FileLocation, 'a+');
include __DIR__ . "/readguest.php";
$FileCont = reading($FileLocation);

if (isset($_POST['Commentaries'])){
    if (!empty($_POST['Commentaries'])){
        $TextVariable = trim($_POST['Commentaries']);
        if ($TextVariable !== array_pop($FileCont)){
            fwrite($Res, "\r\n" . $TextVariable);
            header('Location: redir.php');
            exit;
        }
    } else{
        echo 'Оставьте комментарий по форме';
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
    <title>Guestbook</title>
</head>
<body>

<!--
1. Делаем гостевую книгу. Алгоритм:
	1. Создайте текстовый файл, в котором будут находиться записи гостевой. Одна строка - одна запись. Заполните файл 2-3 записями.
	2. Напишите функцию, которая будет читать этот файл и возвращать массив записей гостевой книги
	3. Сделайте страницу, где гостевая книга будет отображаться. Используйте функцию из пункта 2
	4. В конце страницы сделайте форму для добавления новой записи в гостевую книгу.
	5. Скрипт-обработчик, приняв данные из формы пункта 4, должен получить массив уже имеющихся записей гостевой, добавить к этому массиву новый элемент (текст из формы) и записать полученный массив в тот же файл, разделяя элементы символом переноса строки
	6*. После окончания своей работы скрипт из пункта 5 должен перенаправить клиента на главную страницу гостевой книги
-->

     <table border="1px">
        <? foreach ($FileCont as $key => $Value){?>
            <tr>
                <td>
                    <?php echo $key?>
                </td>
                <td>
                    <?php echo $Value?>
                </td>
            </tr>
        <?php }?>
     </table>



    <form method="post" >
        <textarea placeholder="Оставьте свой отзыв" rows="5" cols="30" name="Commentaries"></textarea>
        <a href="guestbook.php"><button type="submit">Отправить</button></a>
    </form>


</body>
</html>